
<?php
function makeconnection()
{
	$cn=mysqli_connect("localhost","root","","project2");
	if(mysqli_connect_errno())
	{
		echo "failed to connect to mysqli:".mysqli_connect_error();
	}
	return $cn;
}
$cn=mysqli_connect("localhost","root","","project2");
makeconnection();



?>

