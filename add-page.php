<?php require ("dashboard-header.php"); ?>
<div class="col-md-12 col-lg-12 col-xl-10 dash-container">
	<!-- your code here -->
	<div class="add-page_">
		<div class="controlers">
		<a href="add-page" class="secprimary_btn">ADD NEW PAGE</a>
		<a href="#" class="secprimary_btn publish_page_btn">PUBLISH PAGE</a>
		</div>

		<form method="POST" id="publishpage_id" action="data/addPage">
			<span class="title-link">
				<label>ADD TITLE:</label>
				<input type="text" name="page_title_" value="" class="page_title_"><br>
				<label>Link:</label>
				<?php echo home_url()."/"?><input type="text" name="page_link_" value="" class="page_link_">
				<input type="submit" name="publish_page" class="publishpage_" >
			</span>
		</form>

	</div>

	<!-- end of your code -->
</div>
</div><!-- END DASHBOARD-HEADER ROW  -->
