<?php require ("dashboard-header.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<div class="col-md-12 col-lg-10 col-xl-10 dash-container">
	<!-- your code here -->
	<div ng-app="plunker" >

 
	<div class="row dashboard-container ">
		<div class="col-md-9 ">
			<div class="leftMenu_">
				<div class="add-page_">
				<form method="POST" id="publishpage_id" action="data/addPage">
				<span class="title-link">
					<label>ADD TITLE:</label>
					<input type="text"  ng-model="page_title_" name="page_title_" value="" class="page_title_"><br>
					<label>Link:</label>
					<?php echo home_url()."/"?><input type="text" name="page_link_" value="{{page_title_|replace: ' ':'-'}}" class="page_link_">
					<input type="submit" name="publish_page" class="publishpage_" >
				</span>
				<select name="template_file" class="template_file">
					<option name="">Default Template</option>
				<?php 
				foreach (new DirectoryIterator('./data') as $file) {
				if ($file->isFile()) {
				$files__ = str_replace(".php", "", $file->getFilename());
				echo "<option value='".$files__."'>".$files__. "</option>";
				}
				}
				?>
				</select>

				<input type="hidden" name="htmlcontent" value="" class="html_data">
				</form>

				</div>
				<div class="htmleditor">
				<form method="post">
				<textarea id="mytextarea">Hello, World!</textarea>
				</form>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="rightMenu">
				<div class="controlers">
				<a href="add-page" class="secprimary_btn">ADD NEW PAGE</a>
				<a href="#" class="secprimary_btn publish_page_btn">PUBLISH PAGE</a>
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

