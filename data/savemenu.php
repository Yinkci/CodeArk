<?php
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 

// $ses_sqli = mysqli_query($con,"SELECT * FROM cs_addmenu ");
// 	$lastNum = 1;
// 	while($row = mysqli_fetch_array($ses_sqli)){
// 	$lastNum++;
// 	}
// 	echo $lastNum;
?>
<input type='hidden'  value='x_' name='IDMenu_'>
<input type='text'  value='' class='input-text' id = 'caller' name='dbMenu_'>