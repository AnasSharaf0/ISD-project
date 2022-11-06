<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>



<?php include('nav.php'); 
include('functions.php');
require 'function.php';

$username="";
if(isset($_SESSION['user'])){
 $username=$_SESSION['user'];
//  print_r($username);
 echo $username['username'];
}

 //getting package data
 
// $s="SELECT * FROM `package`;";
// $result=mysqli_query($cn,$s);
// $r=mysqli_num_rows($result);
// while($row = $result->fetch_assoc()) {
//   // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   print_r($row);
//   // $json=json_encode($row);
//   // echo $json;
// }
// $cn->close();

// // $data=$result->fetch_assoc();
// // print_r($data);



?>

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<form method="POST" action="store.php">
  <div class="form-group">
    <label for="name">Username</label>
    <input type="text" readonly class="form-control" id="name" value="<?php echo $username['username']?>" name="user_name">
  </div>
  <div class="form-group">
    <label for="packages">Packages</label>
    <select name="package_name" required class="form-control" id="select" value=""><option value="" disabled>Select</option>

<?php
$cn=makeconnection();
$s="select * from package";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);


while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value='$data[1]' selected>$data[1]</option>";
	}
	else
	{
		echo "<option value='$data[1]'>$data[1] </option>";
    
	}
}
mysqli_close($cn);



?>
</select>
<div class="form-group">
    <label for="package_price">Price</label>
  <select  class="form-control" id="p_price" name="p_price">
  <option value="" id="price"></option>
  </select>
</div>




  </div>
 
  <div class="form-group">
  <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
  </div>

  <div>
    <input name="submit" type="submit" class="btn btn-primary">
  </div>
</form>


    <?php include('footer.php'); ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>

<script>
  $('#select').on('change', function() {
var value =this.value;
  
   $.ajax({
    url:'select.php',
    type:'POST',
    data:{'Packname' : value},
    success:function(data){
      console.log(data,value);
      $('#p_price').html(data);
    }
   });
  });
</script>