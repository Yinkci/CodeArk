<?php 
session_start();

if(isset($_POST['next'])){
	echo "SESSION : ".$_SESSION["prefix"];
	echo "string :".$_SESSION["servername"];
	echo "string :".$_SESSION["username"];
	$login_user = $_POST["user_name"];
	$login_password = $_POST["pass_word"];
	$login = $_SESSION["prefix"]."_login";
	$servername = $_SESSION["servername"];
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$DbName = $_SESSION["DbName"];
	$con = mysqli_connect($servername, $username, $password);
	$db = mysqli_select_db($con,$DbName); 
	$query = mysqli_query($con,"INSERT INTO $login(username,password)VALUES('$login_user','$login_password')");
	mysqli_close($con);
}
session_destroy();
  

