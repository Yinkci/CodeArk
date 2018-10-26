<?php

session_start();
$error = "";
require ("data/database.php");
if (isset($_POST["submit"])) {
	// if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){


		$username = $_POST["username"];
		$password = $_POST["password"];

		$username = stripslashes($username);
		$password = stripslashes($password);

		$username = mysqli_escape_string($con,$username);
		$password = mysqli_escape_string($con,$password);

		$query = mysqli_query($con,"SELECT * FROM ".$cs_prefix." where username = '$username' AND password = '$password' ");
		$row = mysqli_num_rows($query);

		if ($row==1) {
			$_SESSION['login_user'] = $username;
			header("location: cs-admin");
		}
		else{
			$error="invalid password";

		}
			mysqli_close($con);
	// }
	// else{
	// 	$error="invalid captcha";
	// }

}// END FIRST IF