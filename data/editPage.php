<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 



$page_title_ = $_POST["page_title_"];
$template_file = $_POST["template_file_field"];
$htmlcontent = $_POST["htmlcontent"];
$page_link_ =$_POST["page_link_"];
$PageID = $_POST['PageID_'];


$page_link_ = strtolower(str_replace(" ", "-",$_POST["page_link_"]));
// echo $page_title_;
// echo $page_link_;
// echo $htmlcontent;



echo "string".$template_file;
$query = mysqli_query($con,"UPDATE  cs_Page SET PageName='$page_title_',PageLink='$page_link_',TemplateFile='$template_file',htmlcontent='$htmlcontent' WHERE PageID='$PageID'");


mysqli_close($con);
header("location:".home_url()."/page");




  ?>


