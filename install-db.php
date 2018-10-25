<?php
$servername = $_POST['local_name'];
$username =$_POST['user_name'];
$password =$_POST['pass_word'];
$DbName = $_POST['db_name'];
$prefix = $_POST['prefix_name'];
$cs_addmenu = $prefix."_cs_addmenu";
$cs_home_url = $prefix."_cs_home_url";
$cs_page = $prefix."_cs_page";
$login = $prefix."_login";



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
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    USERNAME VARCHAR(30) NOT NULL,
    EMAIL VARCHAR(40) NOT NULL,
    DISCOUNT VARCHAR(5),
    PASSW CHAR(128),
    ROLE VARCHAR(9)
    )";

$table2 = "CREATE TABLE $cs_home_url  (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    TITLE VARCHAR(30) NOT NULL,
    TEXT VARCHAR(30) NOT NULL
    )";

$table3 = "CREATE TABLE $cs_page  (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    TITLE VARCHAR(30) NOT NULL,
    TEXT VARCHAR(30) NOT NULL
    )";

 $table4 = "CREATE TABLE $login  (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    TITLE VARCHAR(30) NOT NULL,
    TEXT VARCHAR(30) NOT NULL
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