<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php include ("inc/links.php");?>
<body>


<?php
require("data/database.php");
$PageName = $_GET['page']; 
if ($PageName):
	$query = mysqli_query($con,"SELECT * FROM $cs_page where PageLink = '$PageName'  ");
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
	
else:
?>

<?php
$config = file_exists("config.php");
if($config == 1):
header("location: cs-admin");
else:

?>
	<form method="POST" action="install-db">
		<div class="create-db">
			<img src="assets/img/codeark.png">
			<label>Your Database name you want to use for this CodeArk :</label>
			<input type="text" name="db_name" placeholder="Database Name">
			<label>Your Database username :</label>
			<input type="text" name="user_name" placeholder="Username">
			<label>Your Database password :</label>
			<input type="text" name="pass_word" placeholder="Password">
			<label>Your Database host :</label>
			<input type="text" name="local_name" placeholder="Database Host">
			<label>Your Database Table prefix :</label>
			<input type="text" name="prefix_name" placeholder="Table Prefix">
			<input type="submit" name="next" value="Next">
		</div>
	</form>
<?php
endif;
?>


<?php
endif;

?>

</body>
</html>