
<?php 
$ads = $_POST['ads']; 
?>
<br>
<!-- <input type='text' name='dbMenu_<?php echo $ads; ?>'>
<input type='hidden' value='<?php echo $ads; ?>' class='input-text' name='IDMenu_<?php echo $ads; ?>'> -->


<div class='dropdown-cus' type='button'>
	<div class='slidx'>
		<span>MENU<i class='fas fa-plus'></i></span>
	</div>
	<div  class='mfields hidden h-label'>
		<hr>
		<label >NAME:</label><input type='text' value='<?php echo $ads; ?>'  name='dbMenu_<?php echo $ads; ?>'>
		<label >URL:</label><input type='text' value='LINK' name='LINK' >

		<div class='menu_delete re_".$menuID."' data-name='".$menuID."'>
			<span class='fas fa-times-circle'></span>
		</div>

		<input type='hidden' value='<?php echo $ads; ?>' class='input-text' name='IDMenu_<?php echo $ads; ?>'>
	</div>
</div>