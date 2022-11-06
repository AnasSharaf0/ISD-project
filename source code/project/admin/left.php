<?php 
session_start();

?>
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
<table style="width:100%">
<tr><td style="font-size:28px">Admin Links</td></tr>
<tr><td><a href="addcategory.php">Add Category</a></td></tr>

<tr><td><a href="updatecategory.php">Update Category</a></td></tr>

<tr><td><a href="deletecategory.php">Delete Category</a></td></tr>

<tr><td><a href="viewcategory.php">View Category</a></td></tr>

<tr><td><a href="addsubcategory.php">Add Subcategory</a></td></tr>

<tr><td><a href="updatesubcategory.php">Update Subcategory</a></td></tr>

<tr><td><a href="deletesubcategory.php">Delete Subcategory</a></td></tr>

<tr><td><a href="viewsubcategory.php">View Subcategory</a></td></tr>

<tr><td><a href="addpackage.php">Add Package</a></td></tr>

<tr><td><a href="updatepackage.php">Update Package</a></td></tr>

<tr><td><a href="deletepackage.php">Delete Package</a></td></tr>

<tr><td><a href="viewpackage.php">View Package</a></td></tr>
<tr><td><a href="viewmessages.php">View Messages</a></td></tr>
<tr><td><a href="viewBooking.php">View Bookings</a></td></tr>
<tr><td><a href="../login.php">logout</a></td></tr>
</table>




</body>
</html>