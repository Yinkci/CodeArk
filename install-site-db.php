<?php 
session_start();

if(isset($_POST['next'])){
	echo "SESSION : ".$_SESSION["prefix"];
	echo "string :".$_SESSION["servername"];
	echo "string :".$_SESSION["username"];
	$login_user = $_POST["user_name"];
	$login_password = $_POST["pass_word"];
	$login = $_SESSION["prefix"];
	echo $login;
	$servername = $_SESSION["servername"];
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$DbName = $_SESSION["DbName"];
	$con = mysqli_connect($servername, $username, $password);
	$db = mysqli_select_db($con,$DbName); 
	$query = mysqli_query($con,"INSERT INTO $login(username,password)VALUES('$login_user','$login_password')");
	mysqli_close($con);
}

$con_ = str_replace(" ", "", "$ con");
$db_ = str_replace(" ", "", "$ db");
$cs_prefix = str_replace(" ", "", "$ cs_prefix");
$success = settype($varname, 'string');
$myfile = fopen("config.php", "w");
$var = "
<?php
$con_ = mysqli_connect('$servername', '$username', '$password');
$db_ = mysqli_select_db( $con_ ,'$DbName');
$cs_prefix = '$login';
";

$strvar = (string) $var; // Casts to string
echo $var; // Will cast to string implicitly


fwrite($myfile, $var);
fclose($myfile);
session_destroy();
// header("location: cs-login");
