<!DOCTYPE html>
<html lang="en">
<head>
  <title>Packages</title>
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
<?php include('nav.php'); ?>

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>


<br>
<br>
<br>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:30px; "><b>Category</b></td></tr>
<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
	echo "<tr><td ' padding:5px;'><b><a style='color: black' href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}

?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText  " style="font-size:30px; ">Packages</td></tr>
<tr><td class="paraText" width="900px">




<table cellpadding="0" cellspacing="0" width="900px">


<?php
$s="select * from package where package.subcategory='" . $_GET["subcatid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%3==0)
	{
	?>
		


<tr>
<?php

	}?>
<td>


<!-- <table cellpadding="0" cellspacing="15" border="0" width="100px">
<tr><td align="center" style=" font-size:20px;  "><?php echo $data[1]; ?></td></tr>
<tr><td class="image"><img src="images/<?php echo $data[5];?>" width="250px" height="250px" /></td></tr>
<tr><td align="center" style=" font-size:20px;  "><?php echo $data[6];   ?></a></td></tr>
<tr><td align="center" style= "font-size:20px;  "> Price: <?php echo $data[4];   ?> $</a></td></tr>

</table> -->
<div class="col-sm-3 mb-3">
<div class="card" style="width: 18rem;height: 600px;">
  <img class="card-img-top" src="admin/packimages/<?php echo $data[5];?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data[1]; ?></h5>
    <p class="card-text"><?php echo $data[6];   ?></p>
    <p> Price: <?php echo $data[4];   ?>$</p>
  </div>
</div>
</div>
</td>

<?php

if($n%3==2)
{
?>
</tr>

<?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

</table>




</td></tr></table>

</div>

</div>

<div style="clear:both"></div>


    <?php include('footer.php'); ?>
</body>
</html>>