<?php require ("dashboard-header.php"); ?>
	<div class="col-md-12 col-lg-12 col-xl-10 dash-container">
<!-- your code here -->

<div class="row">
	<div class="col-md-2 pleft-0">
		<div class="leftMenu_">
			<form method="POST" class="eds"  id="callValue">
				<li> ADD MENU <a class="addMenu_btn primary_btn" type="button" >+</a></li>
				<li> ADD MENU <a class="addMenu_btn primary_btn" type="button" >+</a></li>
			</form>

		</div>
	</div>
	<div class="col-md-10">
		<div class="rightMenu">

<!-- 
<div id='sortable_nav' class='sortable ui-sortable'>
    <li class='ui-state-default' style=''>
    </span>
        Apple
        <input class='ui-state-default sortable-number' value='1'>
          
       
    </li>
    <li class='ui-state-default'>
        Mengo
            <input class='ui-state-default sortable-number' value='2'>
    </li>


</div>
 -->




		<form action="data/cs_menu" method="POST" id="save_menuID">
			<?php call_menu(); ?>
				<input type="submit" name="save_menu"  id="save_menu" value="SAVE" class="secprimary_btn">
				<input type="button" name="lastorder"  id="lastorder" value="lastorder" class="secprimary_btn">
			</form>
		</div>
	</div>	<!-- col 10 end -->
</div>
<?php
function call_menu() {
	require("data/database.php");
	$ses_sqli = mysqli_query($con,"SELECT * FROM cs_addmenu ");
	$x = 1;
	echo "<div class='addMenu_input'>";
	// echo "<div class='draggable_ ui-sortable'>";
	echo "<div id='sortable_nav' class='sortable ui-sortable'>";

	while($row = mysqli_fetch_array($ses_sqli)){
		$menu = $row['cs_Menus'];
		$menuID = $row['addMenu_ID'];
	
echo "
 <li class='ui-state-default' style=''>
 <input type='text' name='order_".$x."' class='ui-state-default sortable-number' value='".$x."'>
		<div class='dropdown-cus' type='button'>
			<div class='slidx'>
				<span>MENU<i class='fas fa-plus'></i></span>
			</div>
			 <div  class='mfields hidden h-label'>
			  	<hr>
					<label >NAME:</label><input type='text' value='".$menu."'  name='dbMenu_".$x."' class='re_".$menuID."'>
					<label >URL:</label><input type='text' value='LINK HERE'  name='dbMenuz_".$x."' class='' >

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

	echo "<input type='text' name='addMenu_ctr' value='' class='addMenu_ctr'>";

}

?>


<!-- end of your code -->
	</div>
</div><!-- END DASHBOARD-HEADER ROW  -->
