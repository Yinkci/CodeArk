<?php include ("header.php"); ?>
<?php require("mylogin.php"); ?>
<div class="vertical-center" >
	<div class="container">
		<div class="login-form">
			<div class="title">CS Login</div>
			<form action="" method="POST">
				<input type="text" name="username" placeholder="username"><br>
				<input type="password" name="password" placeholder="password"><br>
				<?php echo "<div class='error-message'>".$error."</div>" ?>
				<div class="g-recaptcha" data-sitekey="6Ldu1WwUAAAAAPSjQoOxWCArmvyPydmopaI31AAK"></div>
				<input type="submit" name="submit" value="LOGIN">
			</form>
		</div>
	</div>
</div>
