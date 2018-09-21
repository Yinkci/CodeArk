<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require ("header.php"); 




$PageName = $_GET['page']; 
$query = mysqli_query($con,"SELECT * FROM cs_page where PageName = '$PageName'  ");
		$row = mysqli_num_rows($query);
// Check page if exist
if ($row==1) {
	$namae = $row['PageName'];
	echo $namae;
}
else{
	echo "invalid password";

}
	mysqli_close($con);