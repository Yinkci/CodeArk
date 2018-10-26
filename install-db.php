<?php
session_start();
$servername = $_POST['local_name'];
$username =$_POST['user_name'];
$password =$_POST['pass_word'];
$DbName = $_POST['db_name'];
$prefix = $_POST['prefix_name'];
$cs_addmenu = $prefix."_cs_addmenu";
$cs_home_url = $prefix."_cs_home_url";
$cs_page = $prefix."_cs_page";
$login = $prefix."_login";

$_SESSION["prefix"]=$login;
$_SESSION["servername"]=$servername;
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;
$_SESSION["DbName"]=$DbName;
$_SESSION["cs_page"]=$cs_page;



// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE ".$DbName;
if ($conn->query($sql) === TRUE) {


	$conn_table = new mysqli($servername, $username, $password, $DbName);
// Create table
$table1 = "CREATE TABLE $cs_addmenu (
    OrderID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    menu_title VARCHAR(30) NOT NULL,
    cs_Menus VARCHAR(40) NOT NULL,
    cs_Links VARCHAR(5),
    )";

$table2 = "CREATE TABLE $cs_home_url  (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    TITLE VARCHAR(30) NOT NULL,
    TEXT VARCHAR(30) NOT NULL
    )";

$table3 = "CREATE TABLE $cs_page  (
    PageID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    PageName VARCHAR(30) NOT NULL,
    PageLink VARCHAR(30) NOT NULL,
    TemplateFile VARCHAR(30) NOT NULL,
    htmlcontent VARCHAR(30) NOT NULL
    )";









 $table4 = "CREATE TABLE $login  (
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
    )";


$tables = [$table1, $table2, $table3, $table4];

foreach($tables as $k => $sql){
    $query = @$conn_table->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}



} else {
    echo "Error creating database: " . $conn->error;
}











$conn->close();
header("location: install-site");
?>