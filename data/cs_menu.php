<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
require (__ROOTs__."/header.php"); 



if(isset($_POST['save_menu'])){
	$query = mysqli_query($con,"DELETE FROM cs_addmenu");
	$lastN = $_POST["addMenu_ctr"];
	$menu_title = $_POST['menu-title'];
	if($lastN == 'NaN'):
		$lastN = 2;
	endif;
	echo "menutitle".$menu_title;
	$x = 1;
	 while($x <= $lastN){
		if(!isset($_POST["dbMenu_".$x]) && !isset($_POST["IDMenu_".$x])){
		}
		else{
			$cs_Menus = $_POST["dbMenu_".$x];
			$OrderID = $_POST["IDMenu_".$x];
			$OrderID_ = $_POST["order_".$x];
			$cs_Links_ = $_POST["cs_Links_".$x];


			$query = mysqli_query($con,"INSERT INTO cs_addmenu(OrderID,menu_title,cs_Menus,cs_Links)VALUES('$OrderID_','$menu_title','$cs_Menus','$cs_Links_')");
		


		}
		
		$x++;
	}
	mysqli_close($con);
	header("location:".home_url()."/menu");
}



  

