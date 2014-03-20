<!DOCTYPE html>
<html id="ng-app" ng-app="construction">
<head>
	<title>YourStudio</title>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/idangerous.swiper.css">
	<link rel="stylesheet" type="text/css" href="css/idangerous.swiper.3dflow.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.css">
	<script src="js/idangerous.swiper-2.0.min.js"></script>
	<script src="js/idangerous.swiper.3dflow-2.0.js"></script>
	<link rel="stylesheet" type="text/css" href="css/constructionpage.css">	
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
				<h2>coming soon... </h2>
			</div>
			<li duration="2s"><a href="#"><img duration="2s" elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/facebook.png"/></a></li>
			<li duration="3s"><a href="#"><img duration="2s" elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/twitter.png"/></a></li>
			<li duration="4s"><a href="#" onclick="$('.modal') .modal('show');"><img duration="2s" elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/gmail.png"/></a></li>
		</ul>
	</div>
	<div class="ui modal">
		<div class="ui header">	
			Leave a comment
			<div class="ui pointing left label" id="promptMessage" style="display:none;">
			Please enter your
			</div>
		</div>
		<div class="content">
				<div class="left" id="leftBox" style="min-width:50%;">			<!--put this style rule at the top-->
					<div class="ui form segment">
					<div class="field">
						<input name="name" type="text" placeholder="Name" onBlur="updateMessage(this)" autocomplete="off" spellcheck="false">
					</div>
					<div class="field">
						<input name="email" type="text" placeholder="Email" onBlur = "updateMessage(this)" autocomplete="off" spellcheck="false">
					</div>
					<div class="field">
						<input name="subject" type="text" placeholder="Subject" onBlur = "updateMessage(this)" autocomplete="off" spellcheck="false">
					</div>
					</div>			
				</div>
				<div class="right">
					<div class="ui form segment">
					<textarea name="message" placeholder="What's on your mind?" onBlur = "updateMessage(this)" spellcheck="false" style="height:10.99em; max-height:10.99em;"></textarea>	
					</div>
				</div>
		</div>
		<div class="actions">
		   <div class="ui button">Cancel</div>
		   <div class="ui button"style="float:right; margin-right: 0em;">Submit</div>
		</div>
	</div>
	<footer id="footer">
	&copy; 2013 YourStudio
	</footer>
	
	<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
	<script src="js/main_construction.js"></script>
	<script src="js/semantic.js"></script>
	<script src = "js/constructionpage.js"></script>
	<script type="text/javascript">
		
		$(window).resize( function() {
			checkBrowserSize();
		});
		$(document).ready(function() {
			checkBrowserSize();
			console.log(document.getElementById("leftBox").height);
						
		});

	</script>
</body>
</html>