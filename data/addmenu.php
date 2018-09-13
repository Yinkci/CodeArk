 <?php
if(isset($_POST['save_menu_add'])){
	$counter_menu = $_POST['counter_x'];
	$x = 1;
	while($x <= $counter_menu) {
		$addMenu = $_POST['addMenu_'.$x];
		require("database.php");
		$query = mysqli_query($con,"Insert into cs_addmenu(cs_addmenu__)VALUES('$addMenu')");
		mysqli_close($con);
	  	$x++;
	} 


}

?>








