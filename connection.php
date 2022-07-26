<?php

/$dbhost = "mariadb";
$dbuser = "root";
$dbpass = "panos";
$dbname = "kubernetes";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
