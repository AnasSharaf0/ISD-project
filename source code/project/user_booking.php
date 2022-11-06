<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<?php include('function.php'); ?>
<?php include('functions.php'); ?>
<?php include('nav.php'); ?>

<?php
   
   if(isset($_SESSION['pack_id'])){
    $user_id=$_SESSION['user']['id'];
    $package_id= $_SESSION['pack_id'];
    $q="SELECT user_booking.id, users.username, package.Packname,package.Packprice,user_booking.date
    FROM ((user_booking
    INNER JOIN users ON users.id = $user_id)
    INNER JOIN package ON user_booking.package_id= package.Pacid);";
    $result=mysqli_query($cn,$q);
    $r=mysqli_num_rows($result);


    while($data=mysqli_fetch_array($result))
    {
        
            echo "
            <table class='table table-bordered mt-5'>
            <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Package Name</th>
            <th>Package Price</th>
            <th>Date</th>
    </thead>
    <tbody>
            <tr><td style=' padding:5px;'>$data[0]</td>
            <td style=' padding:5px;'>$data[1]</td>
            <td style=' padding:5px;'>$data[2]</td>
            <td style=' padding:5px;'>$data[3]</td>
            <td style=' padding:5px;'>$data[4]</td>
            </tr>
            </tbody>
            </table>
            ";

    }
}else{
    $user_id=$_SESSION['user']['id'];
    $q="SELECT user_booking.id, users.username, package.Packname,package.Packprice
    FROM ((user_booking
    INNER JOIN users ON users.id = $user_id)
    INNER JOIN package ON user_booking.package_id= package.Pacid);";
    $result=mysqli_query($cn,$q);
    $r=mysqli_num_rows($result);


    while($data=mysqli_fetch_array($result))
    {
        
            echo "
            <table class='table table-bordered mt-5'>
            <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Package Name</th>
            <th>Package Price</th>
    </thead>
    <tbody>
            <tr><td style=' padding:5px;'>$data[0]</td>
            <td style=' padding:5px;'>$data[1]</td>
            <td style=' padding:5px;'>$data[2]</td>
            <td style=' padding:5px;'>$data[3]</td>
            </tr>
            </tbody>
            </table>
            ";
    }
}
    



?>











<?php include('footer.php'); ?>
</body>
</html>