<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php include ("inc/links.php");?>
<body>
	<form method="POST" action="install-site">
		<div class="install-site">
			<img src="assets/img/codeark.png">
			<label>Your Website Title :</label>
			<input type="text" name="db_name" placeholder="Website Name">
			<label>Your Log In username :</label>
			<input type="text" name="user_name" placeholder="Username">
			<label>Your Log In password :</label>
			<input type="text" name="pass_word" placeholder="Password">
			<input type="submit" name="next" value="Next">
		</div>
	</form>
</body>
</html>

