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




<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View Messages</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="70%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">Message Id</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">First Name</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Last Name</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Email</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Message</td>
</tr>




<?php

$s="select * from contactus";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);


while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>$data[0]</td><td style=' padding:5px;'>$data[1]</td> <td style=' padding:5px;'>$data[2]</td> <td style=' padding:5px;'>$data[3]</td> <td style=' padding:5px;'>$data[4]</td> <td style=' padding:5px;'>$data[5]</td></tr>";

}


?>

</table>
</td></tr></table>

</form>



</div>


</div>
<?php include('footer.php'); ?>

</body>
</html>