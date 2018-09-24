<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 

$pageID_ = $_POST["pageID_"];
$query = mysqli_query($con,"DELETE FROM cs_page WHERE PageID='$pageID_'");
mysqli_close($con);
?>

