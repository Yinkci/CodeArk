<?php require ("dashboard-header.php");
require ("database.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<div class="col-md-12 col-lg-10 col-xl-10 dash-container">
	<!-- your code here -->
	<?php



$PageName = $_GET['edit']; 
$query = mysqli_query($con,"SELECT * FROM cs_page where PageLink = '$PageName'  ");
		$row = mysqli_num_rows($query);


	while($rowx = mysqli_fetch_array($query)){
			$PageLink = $rowx['PageLink'];
			$PageName = $rowx['PageName'];

			$content = $rowx['TemplateFile'];
			$htmlcontent = $rowx['htmlcontent'];


	}






	?>


	<div ng-app="plunker" >
	<div class="row dashboard-container ">
		<div class="col-md-10 p-0">
			<div class="leftMenu_">
				<div class="add-page_">
				<form method="POST" id="publishpage_id" action="data/addPage">
				<div class="title-link">
					<label>ADD TITLEs:</label>
					<input type="text" name="page_title_" value="<?php echo $PageName; ?>" class="page_title_"><br>
					<label>LINK:</label>
					<div class="link_url"><?php echo home_url()."/"?><input type="text" name="page_link_" value="<?php echo $PageLink; ?>" class="page_link_"></div>
					<input type="submit" name="publish_page" class="publishpage_" >
				</div>
				<input type="hidden" name="htmlcontent" value="" class="html_data">
				<input type="hidden" name="template_file_field" value="" class="template_file_field">
				</form>
				</div>
				<div class="htmleditor">
				<form method="post">
				<textarea id="mytextarea"><?php echo $htmlcontent; ?></textarea>
				</form>
				</div>
			</div>
		</div>
		<div class="col-md-2 p5-custom">
			<div class="rightMenu">
				<div class="controlers">
				<a href="add-page" class="secprimary_btn">ADD NEW PAGE</a>
				<a href="#" class="secprimary_btn publish_page_btn">PUBLISH PAGE</a>
				</div>
				<div class="choose-tem">
					<div class="temp-title_">Choose Template:</div>
					<select name="template_file" class="template_file">
						<option>Default Template</option>
					<?php 
					foreach (new DirectoryIterator('./templates') as $file) {
					if ($file->isFile()) {
					$files__ = str_replace(".php", "", $file->getFilename());
					echo "<option value='".$files__."'>".$files__. "</option>";
					}
					}
					?>
					</select>
				</div>
			</div>
		</div>
	</div>
	</div><!-- angular -->


	<!-- end of your code -->
</div>
</div><!-- END DASHBOARD-HEADER ROW  -->


<script>
var app = angular.module('plunker', []);

app.filter('replace', [function () {

    return function (input, from, to) {
      
      if(input === undefined) {
        return;
      }
  
      var regex = new RegExp(from, 'g');
      return input.replace(regex, to);
       
    };


}]);

</script>

<?php 

	mysqli_close($con);

?>