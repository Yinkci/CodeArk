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
				<a href='".home_url()."/".$PageLink."'>".home_url()."/".$PageLink."</a>
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

<script  src="vendors/tinymce/tinymce.min.js"></script>

  <script>
    tinymce.init({
        selector: "#mytextarea",
        theme: "modern",
        width: 500,
        height: 300,
        plugins: [
             "advlist advcode autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       content_css: "css/content.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons code", 
       style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
    }); 



  </script>


<h1>TinyMCE Quick Start Guide</h1>
  <form method="post">
    <textarea id="mytextarea">Hello, World!</textarea>
  </form>
