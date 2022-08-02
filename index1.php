<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PANICAP</title>
</head>

<style>
body {
  background-image: url('images/photo1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>

<body>

	
	<a href="logout.php">Logout</a>

	<h2>Hello, <?php echo $user_data['user_name']; ?></h2>
	<br>
	<h1>WELCOME TO KUBERNETES</h1>
	

  
</body>
</html>
