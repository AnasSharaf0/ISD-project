<?php
session_start();
require 'function.php';
if(isset($_POST['submit'])){
    $name=$_POST['user_name'];
    $package_name=$_POST['package_name'];
    $p_price=$_POST['p_price'];
    $date=$_POST['date'];

// $q="INSERT INTO booking (user_name,package_price,package_name,date) VALUES('$name',$p_price,'$package_name','$date')";
// mysqli_query($cn, $q);

// if(mysqli_query($cn, $q)){
//     echo "Booking added successfully";
//     echo '<script>alert("Booking added successfully")</script>';
//     header('location: index.php');
// }
// else {
//     echo "Error: " . $q . "<br>" . mysqli_error($cn);
//     }

// mysqli_close($cn);
// }
$user_id="SELECT id from users WHERE username='".$name."';";
$package_id="SELECT Pacid from package WHERE Packname='".$package_name."';";
$result1=mysqli_query($cn,$user_id);
$result2=mysqli_query($cn,$package_id);
$user=0;
$package=0;
if ($result1) {
    while ($data=mysqli_fetch_array($result1)) {
      $user= ($data[0]);
    }
}
if ($result2) {
    while ($data=mysqli_fetch_array($result2)) {
      
        $package= ($data[0]);
        $_SESSION['pack_id']= $package= ($data[0]);
    }
}

 
$query="INSERT INTO user_booking (user_id,package_id,date) VALUES('$user','$package','$date')";
mysqli_query($cn, $query);

if(mysqli_query($cn, $query)){
    echo "Booking added successfully";
    echo '<script>alert("Booking added successfully")</script>';
    header('location: index.php');
}
else {
    echo "Error: " . $query . "<br>" . mysqli_error($cn);
    }
 }