<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 

	$ses_sqli = mysqli_query($con,"SELECT * FROM cs_page ORDER BY PageID");
	$x = 1;


	while($row = mysqli_fetch_array($ses_sqli)){
		$PageID = $row['PageID'] + 1;

	}

$page_title_ = $_POST["page_title_"];
$page_link_ = $_POST["page_link_"];
echo $page_title_;
echo $page_link_;


$query = mysqli_query($con,"INSERT INTO cs_Page(PageID,PageName,PageLink)VALUES('$PageID','$page_title_','$page_link_')");

mysqli_close($con);
// header("location:".home_url()."/menu");




  