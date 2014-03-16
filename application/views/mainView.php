<!DOCTYPE html>
<html id="ng-app" ng-app="construction">
<head>
	<title>YourStudio</title>
  	<style>
	@font-face {
		font-family: HERAS;
		src: url('fonts/HERAS.ttf');
	}
	#footer {
		position: absolute;
 		z-index: 10;
 		height: 3em;
		bottom: 0;
		font-family: arial;
	}

	@media screen {
		body {
			background-position:center;
			min-width:500px;
			min-height:400px;
			background-image:url('img/blueprint.jpg'); <!-- VW - this image we get from  http://designmoo.com/4759/blueprint-texture -->; /*Standard*/ 
		} 
	}
	@media (max-width: 300px) {
		h1 { font-size: 100%; }
		h2 { font-size: 40%; }
	}

	@media (min-width: 500px) {
		h1 { font-size: 120%; }
		h2 { font-size: 80%; }
	}

	@media (min-width: 700px) {
		h1 { font-size: 180%; }
		h2 { font-size: 120%; }
	}

	@media (min-width: 1200px) {
		h1 { font-size: 350%; }
		h2 { font-size: 200%; }
	}
	
	h1 {
	font-size: 80px;
	text-align:center;
	margin: 0 auto;
	
	}
	
	</style>	
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/idangerous.swiper.css">
	<link rel="stylesheet" type="text/css" href="css/idangerous.swiper.3dflow.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"> <!-- Jqery library -->

</head>
<body>
		<!-- VW - Delete three slides from the page -->
		<h1 id="construction"> Under Construction  </h1>			
		<a href="#"><img elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/facebook-print.png" class="draggable"/></a>
		<a href="#"><img elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/twitter-print.png" class="draggable"/></a>
		<a href="#"><img elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/gmail.png" class="draggable"/></a>
	
	<footer >
		&copy; 2013 YourStudio
	</footer>
	
	<div class="ui modal comment">
		<i class="close icon"></i>
		<div class="header">
			Modal Title
		</div>
		<div class="content">			
			<div class="ui form segment">				
				<div class="field">
					<input name="name" type="text" placeholder="Name">
				</div>
				<div class="field">
					<input name="email" type="text" placeholder="Email">
				</div>
				<div class="field">
					<input name="subject" type="text" placeholder="Subject">
				</div>
				<div class="field">
					<label for="content">User Text</label>
					<textarea name="content" ></textarea>
				</div>
			</div>			
			<div class="modalAction ui buttons">
				<div class="ui button" onclick="cancel()">Cancel</div>
				<div class="or"></div>
				<div class="ui positive button" onclick="submit()">Submit</div>
			</div>		
		</div>
	</div>
	<div class="ui basic modal response">
	</div>
	
	<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
	<script src="js/main_construction.js"></script>
	<script src="js/semantic.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script> <!-- library for draggable function -->
	<script type="text/javascript">
		function checkBrowserSize() {
			$('body').css('height', window.innerHeight);
			//$("#menu").css('height', $("body").height());/* VW - Adjust the size of the menu */
			//$('#menu img').css('margin-top', $("#menu").height()/4);
		};

		$(window).resize( function() {
			checkBrowserSize();
		});
		$(document).ready(function() {
			checkBrowserSize();
			$(".draggable").draggable({containment: "body", scroll:false} );

		});
	//vincent comment
	</script>
</body>
</html>