<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php include ("inc/links.php");?>
<body>
<?php
$config = file_exists("config.php");
if($config == 1):
echo "already insatlled!";
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
</body>
</html>

