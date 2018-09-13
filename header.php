<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TEST</title>
	<?php include ("inc/links.php");?>
	<!-- <script type="text/javascript" src="assets/cookieconsent-master/src/cookieconsent.js"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/cookieconsent-master/src/styles/layout.css"> -->
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<!-- <script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({

container: document.getElementById("content"),
  "palette": {
    "popup": {
      "background": "#aa0000",
      "text": "#ffdddd"
    },
    "button": {
      "background": "#ff0000"
    }
  },
  "theme": "classic",
  "position": "bottom-right",
  "content": {
    "href": "www.nicky.com"
  }
})});
</script>
 -->
<script>
window.addEventListener("load", function(){
// alert("jaja");
cookieconsent.initialise({

	palette: {
	popup: {background: '#000000', text: '#fff', link: '#fff'},
	button: {background: 'transparent', border: '#f8e71c', text: '#f8e71c'},
	highlight: {background: '#f8e71c', border: '#f8e71c', text: '#000000'},
	},
	layout: 'my-cool-layout',
	layouts: {
	'my-cool-layout': '<div class="my-cool-layout">\
	  {{header}}{{message}}{{compliance}}</div>{{close}}',
	},
	elements: {
	// pictureOfCat: '<img href="http://placekitten/300/300" />',
	},
	content: {
	header: 'My awesome cat popup!',
	message: 'Our site uses cookies to ensure you get the best experience on our website'
	},
	position: 'bottom-right'
});
});

</script>
</head>
<!-- <div id="spinner" style="visibility: visible; text-align: center; margin-top: 250px;color: white;"><img src="assets/img/spinner3.gif" style="margin-bottom: 10px;"><p>CodeSensei</p></div> -->
<?php $pagename =  basename($_SERVER['PHP_SELF']); ?>
<?php $page =  str_replace(".php","",$pagename); ?>
<body style="visibility: visible;" id="<?php echo $page; ?>" class="bodyx">
