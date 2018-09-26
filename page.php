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
	<a href="add-page" class="secprimary_btn">ADD NEW PAGE</a>
<?php 


$ses_sqli = mysqli_query($con,"SELECT * FROM cs_page ORDER BY PageID");
	$x = 1;


	while($row = mysqli_fetch_array($ses_sqli)){
		$PageName = $row['PageName'];
		$PageLink = $row['PageLink'];
		$PageID = $row['PageID'];

		echo "<form metho='POST' action='' class='form_page".$PageID."'>
				<div class='pagelist_'>
				<div class='pagename_'>".$PageName."</div>
				<div class='pagelink_'>
				<a target='_blank' href='".home_url()."/".$PageLink."'>".home_url()."/".$PageLink."</a>
				</div>
				<div  data-name='".$PageID."' class='deletepage_'>
				<i class='fas fa-times-circle'></i>DELETE
				</div>
				</div>
			</form>";
	}


?>

</div>
</div>

<!-- end of your code -->
	</div>
</div><!-- END DASHBOARD-HEADER ROW  -->


  <script>

  </script>


