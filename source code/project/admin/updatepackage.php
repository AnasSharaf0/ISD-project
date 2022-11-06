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


<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$f1=0;

	
	$target_dir = "packimages/";
	//t4
	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	

		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
			$f1=1;
	} 	


  ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	$s="update package set Packname='" . $_POST["t1"] ."',Category='" . $_POST["t2"] . "',Subcategory='" . $_POST["t3"] . "',Packprice='" . $_POST["t8"] . "',Pic1='" .  basename($_FILES["t4"]["name"]) ."',Detail='" . $_POST["t7"] . "' where Pacid='" . $_POST["s1"] . "'";}
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";

    }
  

?>

<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post" enctype="multipart/form-data">
<table border="0" width="500px" height="700px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Package</td></tr>
<tr><td class="lefttxt">Select Package</td><td><select name="s1" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from package";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
echo $s;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from package where Pacid='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s)or die("Error");
$r=mysqli_num_rows($result);
echo $s;

$data=mysqli_fetch_array($result);
$Packid=$data[0];
$Packname=$data[1];
$Category=$data[2];
$Subcategory=$data[3];
$Packprice=$data[4];
$Pic1=$data[5];

$Detail=$data[6];

mysqli_close($cn);

}

?>

</td></tr>

<tr><td class="lefttxt">Package Name</td><td><input type="text"  value="<?php if(isset($_POST["show"])){ echo $Packname ;} ?> " name="t1" required  title"Please Enter Only Characters between 1 to 50 for Package Name"/></td></tr>
<tr><td class="lefttxt">Select Category</td><td><select name="t2" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);


while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $Category==$data[0])
	{
		
		echo "<option value=$data[0] selected='selected' >$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	
}
}
mysqli_close($cn);



?>

</select>

<tr><td class="lefttxt">Select Subcategory</td><td><select name="t3" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from subcategory";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);


while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $Subcategory==$data[0])
	{
		
		echo "<option value=$data[0] selected='selected' >$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	
}
}
mysqli_close($cn);



?>

</select>

<tr><td class="lefttxt">Package Price</td><td><input type="text" name="t8" value="<?php if(isset($_POST["show"])){ echo $Packprice ;} ?> " /></td></tr>


<tr><td class="lefttxt">Upload Pic</td><td><input type="file" name="t4"/></td></tr>



<tr><td class="lefttxt">Details</td><td><textarea name="t7" /><?php if(isset($_POST["show"])){ echo $Detail ;} ?></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>





<?php include('footer.php'); ?>

</body>
</html>