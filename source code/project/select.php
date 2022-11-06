<?php
require 'function.php';

$value=$_POST['Packname'];

if(isset($_POST['Packname'])){
    $value=$_POST['Packname'];
    
$q="SELECT Packprice FROM package WHERE Packname='$value' ";

$myfile = fopen("testfile.txt", "w");
fwrite($myfile, $q);

$result=mysqli_query($cn,$q);
$option='';
while($data=mysqli_fetch_array($result))
{
    $option .= '<option value="'. $data['Packprice'].'">'.$data['Packprice'].'</option>';
}
echo $option;
}