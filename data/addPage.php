<?php 
ob_start();
include (dirname(dirname(__FILE__))."/data/database.php");
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 

	$ses_sqli = mysqli_query($con,"SELECT * FROM $cs_page ORDER BY PageID");
	$i = 0;


	while($row = mysqli_fetch_array($ses_sqli)){
		$PageID = $row['PageID'] + 1;
	$i++;
	}
	if($i==0){
        $PageID = 1;
    }

$page_title_ = $_POST["page_title_"];
$template_file = $_POST["template_file_field"];
$htmlcontent = $_POST["htmlcontent"];

$page_link_ = strtolower(str_replace(" ", "-",$_POST["page_link_"]));
// echo $page_title_;
// echo $page_link_;
// echo $htmlcontent;



echo "string".$template_file;
$query = mysqli_query($con,"INSERT INTO $cs_page(PageID,PageName,PageLink,TemplateFIle,htmlcontent)VALUES('$PageID','$page_title_','$page_link_','$template_file','$htmlcontent')");
mysqli_close($con);

header("location:".home_url()."/page");





  ?>


