<?php 

$dbhost = "172.17.0.5";
$dbuser = "root";
$dbpass = "panos";
$dbname = "kubernetes";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
}


?>
