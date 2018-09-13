<?php
	define('__ROOT__', dirname(dirname(__FILE__)));
	require(__ROOT__."/data/database.php");
	// $ses_sqli = mysqli_query($con,"SELECT * FROM cs_menu ");
	// while($row = mysqli_fetch_array($ses_sqli)){
	// $menu = $row['nav_menu'];
	// echo $menu;
	// }

?>
<?php


	$ses_sqli = mysqli_query($con,"SELECT * FROM cs_addmenu ");
	$x = 1;
	while($row = mysqli_fetch_array($ses_sqli)){
	$menuID = $row['addMenu_ID'];
	$x++;
	}
	// echo "last:".$menuID;
	echo $menuID;



?>
