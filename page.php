<?php 
require ("database.php"); 
define('__ROOTs__', dirname(dirname(__FILE__))); 
// require ("header.php"); 
require ("dashboard-header.php");
?>
	<div class="col-md-12 col-lg-12 col-xl-10 dash-container">
<!-- your code here -->

<div class="row">
	<div class="mainpage_">
		<ul>
<?php 


$ses_sqli = mysqli_query($con,"SELECT * FROM cs_page ORDER BY PageID");
	$x = 1;


	while($row = mysqli_fetch_array($ses_sqli)){
		$PageName = $row['PageName'];
		$PageLink = $row['PageLink'];

		echo "<li><a href='".home_url()."/".$PageLink."'>".home_url()."/".$PageName."</a></li>";
	}


?>
</ul>
</div>
</div>

<!-- end of your code -->
	</div>
</div><!-- END DASHBOARD-HEADER ROW  -->
