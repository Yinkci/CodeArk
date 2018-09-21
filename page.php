<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require ("header.php"); 

	$ses_sqli = mysqli_query($con,"SELECT * FROM cs_page ORDER BY PageID");
	$x = 1;


	while($row = mysqli_fetch_array($ses_sqli)){
		$PageName = $row['PageName'];
		echo $PageName;
	}
