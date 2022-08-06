<?php

$dbhost = "172.17.0.3";
$dbuser = "root";
$dbpass = "panos";
$dbname = "kubernetes";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
