<!DOCTYPE html>
<html lang="en">
<head>
  <title> Admin Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('function.php'); ?>
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">



<form method="post" enctype="multipart/form-data">
	<table border="0" width="400px" height="450px" align="center" class="tableshadow">
		<tr><td colspan="2" class="toptd">Add Package</td></tr>
		<tr><td class="lefttxt">Package Name</td><td><input type="text" name="t1" required title"Please Enter Only Characters between 3 to 50 for Package Name" /></td></tr>
		<tr><td class="lefttxt">Select Category</td><td>
		<select name="t2" required/><option value="">Select</option>
		<?php
		$cn=makeconnection();
		$s="select * from category";
		$result=mysqli_query($cn,$s);
		$r=mysqli_num_rows($result);
		//echo $r;

		while($data=mysqli_fetch_array($result))
		{
		if(isset($_POST["show"])&& $data[0]==$_POST["t2"])
			{
					echo "<option value=$data[0] selected='selected'>$data[1]</option>";
			}
			else
			{
				echo "<option value=$data[0]>$data[1]</option>";
			}
		}



		?>

		</select>
			<input type="submit" value="Show" name="show" formnovalidate/>

			<tr><td class="lefttxt">Select Subcategory</td><td><select name="t3" required/><option value="">Select</option>

			<?php
			$cn=makeconnection();
			$s="select * from subcategory";
			$result=mysqli_query($cn,$s);
			$r=mysqli_num_rows($result);
			//echo $r;

			while($data=mysqli_fetch_array($result))
			{
				if(isset($_POST["show"]))
				{
					if($data[2]==$_POST["t2"])
					{
						echo"<option value=$data[0] >$data[1]</option>";
					}
				}
			}



			?>

		</select>

		<tr><td class="lefttxt">Package Price</td><td><input type="text" name="t8" /></td></tr>
		<tr><td class="lefttxt">Upload Pic1</td><td><input type="file" name="t4" /></td></tr>
		<tr><td class="lefttxt">Details</td><td><textarea name="t7"></textarea></td></tr>
		<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="submitForm" /></td></tr>
	</table>
</form>



</div>


</div>
<?php
if(isset($_POST["submitForm"]))
{
	echo("<h1>enter</h1>");
	$cn=makeconnection();
	$f1=0;
	
	$target_dir = "packimages/";
	//t4
	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t4"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t4"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
			$f1=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	$s="insert into package(packname,category,subcategory,packprice,pic1,detail) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] ."','". $_POST["t8"] . "','" . basename($_FILES["t4"]["name"]) .  "','" . $_POST["t7"] ."')";
	echo($s);
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
</body>
</html>
