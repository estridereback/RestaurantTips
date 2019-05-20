<?php
   	$uname = "dbtrain_1036";
	$pass = "xotlno";
	$host = "dbtrain.im.uu.se";
	$dbname = "dbtrain_1036";
	
	$connection =  new mysqli($host, $uname, $pass, $dbname);
	mysqli_set_charset($connection,"utf8");
	
	if($connection -> connect_error)
	{
		die("Connection failed: ".$connection.connect_error);
	}
	
	session_start();
   
	$user_check = $_SESSION['login_user'];
	$query = "Select email From Webusers WHERE email = '$user_check'";
   
	$result = $connection->query($query);
	$row = $result->fetch_assoc();
   
	$login_session = $row['email'];
   
	if(!isset($_SESSION['login_user'])){
      header("URL:../login.php");
      die();
	}
?>
