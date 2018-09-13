	<?php
	define('__ROOT__', dirname(dirname(__FILE__)));
	require(__ROOT__."/data/database.php");
	$ses_sqli = mysqli_query($con,"SELECT * FROM cs_addmenu ");
	$lastNum = 1;
	while($row = mysqli_fetch_array($ses_sqli)){
	$lastNum++;
	}
	echo $lastNum;
	?>