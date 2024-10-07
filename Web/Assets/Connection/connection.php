<?php  
$servername="localhost";
$username="root";
$password="";
$db="db_eventlizer";

$con=mysqli_connect($servername,$username,$password,$db);

if(!$con)
{
	echo "Not connect";
}
	
?>