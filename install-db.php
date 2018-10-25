<?php
$servername = $_POST['local_name'];
$username =$_POST['user_name'];
$password =$_POST['pass_word'];
$DbName = $_POST['db_name'];

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE ".$DbName;
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
header("location: install-site");
?>