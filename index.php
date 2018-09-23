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

	}


// Check page if exist
if ($row==1) {
	echo $namae;
	echo $content;

}
else{
	echo "404 not Found";

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
