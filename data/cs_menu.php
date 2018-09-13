<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 



if(isset($_POST['save_menu'])){
	$query = mysqli_query($con,"DELETE FROM cs_addmenu");
	$lastN = $_POST["addMenu_ctr"];
	$x = 1;
	 while($x <= $lastN){
		if(!isset($_POST["dbMenu_".$x]) && !isset($_POST["IDMenu_".$x])){
		}
		else{
			$cs_Menus = $_POST["dbMenu_".$x];
			$addMenu_ID = $_POST["IDMenu_".$x];
			$addMenu_IDx = $_POST["order_".$x];

			$query = mysqli_query($con,"INSERT INTO cs_addmenu(addMenu_ID,cs_Menus)VALUES('$addMenu_IDx','$cs_Menus')");
		}
		
		$x++;
	}
	mysqli_close($con);
	header("location:".home_url()."/menu");
	echo "lastN: ".$lastN;
}



  

