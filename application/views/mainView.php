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
	#menu li {
		text-align: center;		
		float: middle;
		display: inline;
	}
	#menu * {
		margin: 0 15px;
	}
	ul {
		list-style-type:none;
		margin:0;
		padding:0;
		overflow: hidden;
	}
	#title {
		background: -webkit-linear-gradient(45deg, rgba(216,234,245,0.2), rgba(164,210,237,0.5), rgba(216,234,245,0.2)); /*Safari*/
		background: -o-linear-gradient(45deg, rgba(216,234,245,0.2), rgba(164,210,237,0.5), rgba(216,234,245,0.2))); /*Opera 11-12*/
		background: -moz-linear-gradient(45deg, rgba(216,234,245,0.2), rgba(164,210,237,0.5), rgba(216,234,245,0.2)); /*Fx 3.6-15*/
		background: linear-gradient(45deg, rgba(216,234,245,0.2), rgba(255,255,255,0.5), rgba(216,234,245,0.2)); /*Standard*/
		line-height: 64px;
		min-height: 64px;
	}
	#title * {
		display: inline;
		font-family: HERAS;
	}
	#menu {		
		position: relative;
		min-height: 128px;
		text-align: center;
	}
	h1 {
		color: #A09494;
	}
	body {
		background-repeat:no-repeat;
		background-position:center;
		height:auto;
		min-width:500px;
		min-height:500px;
	}
	.swiper-container {
		padding:30px 0;
		max-width: 1200px;
	}
	.swiper-slide {
		width:auto;		
		max-height:450px;	
		min-height: 150px;
		min-width: 100px;
		background-size:cover;
		background-repeat:no-repeat;
		background-position:center;
		border-radius:5px;
		border-bottom:1px solid #555; 
		-webkit-box-reflect: below 1px -webkit-linear-gradient(bottom, rgba(0,0,0,0.5) 0px, rgba(0,0,0,0) 20px);
	}
	@media screen {
		body {
			background: -webkit-linear-gradient(45deg, rgba(240,248,243,0.5), rgba(207,237,217,1), rgba(240,248,243,0.5)); /*Safari*/
			background: -o-linear-gradient(45deg, rgba(240,248,243,0.5), rgba(207,237,217,1), rgba(240,248,243,0.5)); /*Opera 11-12*/
			background: -moz-linear-gradient(45deg, rgba(240,248,243,0.5), rgba(207,237,217,1), rgba(240,248,243,0.5)); /*Fx 3.6-15*/
			background: linear-gradient(45deg, rgba(240,248,243,0.5), rgba(207,237,217,1), rgba(240,248,243,0.5)); /*Standard*/
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
	</style>	
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/idangerous.swiper.css">
	<link rel="stylesheet" type="text/css" href="css/idangerous.swiper.3dflow.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
	<script src="js/idangerous.swiper-2.0.min.js"></script>
	<script src="js/idangerous.swiper.3dflow-2.0.js"></script>
</head>
<body>
	<div id="page">
		<div class="swiper-container">
			<div class="swiper-wrapper" listanimation enter="flash" leave="" elems="div" visibility="visible">
				<div class="swiper-slide" style="background-color:white"><a href=""></a></div>
				<div class="swiper-slide" style="background-color:white"><a href=""></a></div>
				<div class="swiper-slide" style="background-color:white"><a href=""></a></div>
			</div>
		</div>
		<ul id="menu" listanimation enter="fadeIn" leave="fadeOut" elems="li" visibility="hidden">
			<div id="title">
				<h1>New Project</h1>
				<h2>Coming Soon...</h2>
			</div>
			<li duration="2s"><a href="#"><img duration="2s" elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/facebook.png"/></a></li>
			<li duration="3s"><a href="#"><img duration="2s" elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/twitter.png"/></a></li>
			<li duration="4s"><a href="#"><img duration="2s" elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/gmail.png"/></a></li>
		</ul>
	</div>
	<div class="ui modal">
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
			<label for="comment">User Text</label>
			<textarea name="comment" ></textarea>
		</div>
</div>
		
	  </div>
	  <div class="actions">
		<div class="ui button">Cancel</div>
		<div class="ui button">Submit</div>
	  </div>
	</div>
	<footer id="footer">
		&copy; 2013 YourStudio
	</footer>
	
	<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
	<script src="js/main_construction.js"></script>
	<script src="js/semantic.js"></script>
	<script type="text/javascript">
		var swiper = new Swiper('.swiper-container', {
			slidesPerView:3,
			loop: true,
			//3D Flow:
			tdFlow: {
				rotate : 50,
				stretch :0,
				depth: 100,
				modifier : 1,
				shadows : true
			}
		});
		function checkBrowserSize() {
			$(".swiper-slide, .swiper-wrapper").css('height', window.innerHeight*0.5);
			$("#page").css('height', window.innerHeight - 50);
			$("#menu").css('height', '20%');
			$("#title").css('height', '10%');
			$('#menu img').css('margin-top', $("#menu").height()/4-32);
		};
		
		$(window).resize( function() {
			checkBrowserSize();
		});
		$(document).ready(function() {
			checkBrowserSize();
			$('.ui.form').form({        
      givenName: {
        identifier: 'name',
        rules: [{
          type: 'empty',
          prompt: 'Please enter your name'
        }]
      },       
      surname: {
        identifier: 'comment',
        rules: [{
          type: 'empty',
          prompt: 'Please enter your comments'
        }]
      },
      subject: {
        identifier: 'subject',
        rules: [{
          type: 'empty',
          prompt: 'Please enter a subject'
        }]
      }	  
	  }, {
      on: 'blur',
      inline: 'true'
    });
			
		});

	</script>
</body>
</html>