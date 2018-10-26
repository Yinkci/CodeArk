<?php
session_start();
require("data/database.php");
$user_check = $_SESSION['login_user'];
$ses_sqli = mysqli_query($con,"SELECT * FROM $cs_prefix where username = '$user_check'");
$row = mysqli_fetch_assoc($ses_sqli);
$login_session = $row['username'];


if (!isset($login_session)) {
	mysqli_close($con);
	header("location: cs-login.php");
}