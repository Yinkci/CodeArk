<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require ("header.php"); 




$PageName = $_GET['page']; 
$query = mysqli_query($con,"SELECT * FROM cs_page where PageLink = '$PageName'  ");
		$row = mysqli_num_rows($query);


	while($rowx = mysqli_fetch_array($query)){
			$namae = $rowx['PageLink'];
			$content = $rowx['TemplateFile'];
			$htmlcontent = $rowx['htmlcontent'];


	}


// Check page if exist
if ($row==1) {
	if($content == "Default Template"):
	echo $htmlcontent;
	
	else:
	$temp = "./templates/".$content.".php";
	include($temp);
	endif;



}
else{
	$PAGE_NOT_FOUND = "./404/404.php";
	include($PAGE_NOT_FOUND);

}
	mysqli_close($con);




// $convert_file_names=array("template_name"=>"about.php", "HOMEPAGE"=>"about.php");
// echo "<pre>";
// var_dump($convert_file_names["HOMEPAGE"]);
// echo "</pre>";

// // include($filetemp_);

// include('./templates/'.$convert_file_names["HOMEPAGE"]);


// echo str_replace(" ", "-", "home page php");



// $dir    = './data';
// $files1 = scandir($dir);
// $files2 = scandir($dir, 1);

// var_dump($files1) ;

// echo "<pre>";

// var_dump($files2) ;

// echo "</pre>";

 
      // foreach(glob('./data') as $filename){
      // $rest = substr($filename, 7);    
      // echo "<li><a href='#'>".$rest."</a></li>";
      // }
?>