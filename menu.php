<?php require ("dashboard-header.php");
 ?>
<div class="col-md-12 col-lg-12 col-xl-10 dash-container">
	<!-- your code here -->

	<div class="row dashboard-container">
		<div class="col-md-3 pleft-0">
			<div class="leftMenu_">
				<form method="POST" class="eds"  id="callValue">
					<li> ADD NEW MENU <a href="add-new-menu" class="addnewMenu_btn primary_btn" type="button" >+</a></li>
					<li> ADD LINK <a class="addMenu_btn primary_btn" type="button" >+</a></li>
				</form>

			</div>
		</div>
		<div class="col-md-9">
			<div class="rightMenu">
				<form action="data/cs_menu" method="POST" id="save_menuID">
					<div class="menu-title">Menu Title: <input type="text" name="menu-title" value="<?php menu_title(); ?>" placeholder="Edit Title here .."></div>
					<?php call_menu(); ?>
					<input type="submit" name="save_menu"  id="save_menu" value="SAVE" class="secprimary_btn">
				</form>
			</div>
		</div>	<!-- col 9 end -->
	</div>
	<?php
	function menu_title(){
include (__DIR__."/data/database.php");
		
		$ses_sqli = mysqli_query($con,"SELECT * FROM $cs_addmenu");
		$row = mysqli_fetch_array($ses_sqli);
			$menu_title = $row['menu_title'];
			echo $menu_title;
		
	}
	function call_menu() {
include (__DIR__."/data/database.php");
		
		$ses_sqli = mysqli_query($con,"SELECT * FROM $cs_addmenu ORDER BY OrderID");
		$x = 1;
		echo "<div class='addMenu_input'>";
		echo "<div id='sortable_nav' class='sortable ui-sortable'>";

		while($row = mysqli_fetch_array($ses_sqli)){
			$menu = $row['cs_Menus'];
			$menuID = $row['OrderID'];
			$cs_Links = $row['cs_Links'];


			echo "
			<li class='ui-state-default' style=''>
			<input type='hidden' name='order_".$x."' class='ui-state-default sortable-number' value='".$x."'>
			<div class='dropdown-cus' type='button'>
			<div class='slidx'>
			<span>".$menu."<i class='fas fa-plus'></i></span>
			</div>
			<div  class='mfields hidden h-label'>
			<hr>
			<label >NAME:</label><input type='text' value='".$menu."'  name='dbMenu_".$x."' class='re_".$menuID."'>
			<label >URL:</label><input type='text' value='".$cs_Links."''  name='cs_Links_".$x."' class='' >

			<div class='menu_delete re_".$menuID."' data-name='".$menuID."'>
			<span class='fas fa-times-circle'></span>
			</div>
			<input type='hidden' value='".$menuID."' class='input-text' name='IDMenu_".$x."'>
			</div>
			</div>
			</li>


			";

			$x++;
		}
		echo "</div>";
		echo "</div>";

		echo "<input type='hidden' name='addMenu_ctr' value='' class='addMenu_ctr'>";

	}

	?>


	<!-- end of your code -->
</div>
</div><!-- END DASHBOARD-HEADER ROW  -->
