<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 

$data = $_POST["x"];
$query = mysqli_query($con,"DELETE FROM $cs_addmenu WHERE OrderID='$data'");
mysqli_close($con);
?>

