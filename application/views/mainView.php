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
  	<style>
	@font-face {
		font-family: Archistico_Bold;
		src: url('fonts/Archistico_Bold.ttf');
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
		font-family: Archistico_Bold;
	}
	#menu {		
		position: relative;
		min-height: 128px;
		text-align: center;
	}
	<!--h1 {
		color: #A09494;
	}commented out for now-->
	body {
		background-repeat:no-repeat;
		background-position:center;
		height:auto;
		min-width:500px;
		min-height:500px;
		color:white;
	}
	
	div.modalAction {
		float:right;
	}
	div.response {
		color:#FFFFFF;
	}
	div.response p {
		font-size:20px;
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
	
	.ui.header{							<!--added this.problem with semantic CSS-->
		font-family:Arial; 
		color:#E0E0E0;
	}
	.ui.form textarea, .ui.form input[type="text"], .ui.form textarea:focus, .ui.form input[type="text"]:focus{ 
	  background-color:transparent;
	  border-color:white;
	  color:white;
	  font-family:courier;
	  font-size: .9em;
	}	
	
	.ui.form.segment{
		border-style:solid; 
		border-color:white; 
		border-width:1px; 
		border-radius:0;
		background-color: transparent; 
	}
	.ui.modal{
		background-image:url("css/blueprint.jpg");
		border:none;
		border-radius:0;
	}
	
	.ui.modal > .content{
		background-color:transparent;
	}

	
	.ui.form ::-webkit-input-placeholder {
	  color: #CCCCCC;
	}

	.ui.form ::-moz-placeholder {
	  color: #CCCCCC;
	}

	.ui.form :focus::-webkit-input-placeholder {
	  color: #CCCCCC;
	}

	.ui.form :focus::-moz-placeholder {
	  color: #CCCCCC;
	}
	
	.ui.button, .ui.button:not(.loading):active, .ui.active.button:not(.loading):active {
		background-color:transparent;
		color:#CCCCCC;
		border-style:solid; 
		border-color:white; 
		border-width:1px; 
		border-radius:0;
	}
	.ui.pointing.left.label, .ui.pointing.label:before {
		background-color:#CCCCCC;
	}
	
	.ui.button:not(.loading):hover{
		color:#FAFAFA;
	}
	
	.ui.dimmer {
		background-color: rgba(0, 0, 0, 0.7); <!--sets the dimmer backgroud color to darker/brighter-->
	}
	
	.ui.modal > .header {
	  margin: 0em;
	  padding: 1.5rem 0rem 0rem 2em;
	  font-size: 1.6em;
	  font-weight: bold;
	  border-radius: 0.325em 0.325em 0px 0px;
	}
	

	</style>	
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
			<li duration="4s"><a href="" onclick="$('.modal.comment').modal('show')"><img duration="2s" elementanimation enter="swing" leave="" click="flipOutY" src="img/buttons/gmail.png"/></a></li>
		</ul>
	</div>
	<div class="ui modal comment">
		<div class="ui header" style="font-family:Archistico_Bold; font-size:2em;">	<!--unless i add style rules here, get times new roman!-->
			Leave a comment
			<div class="ui pointing left label" id="promptMessage" style="display:none;">
			Please enter your
			</div>
		</div>
		<div class="content">			
				<div class="left" id="leftBox" style="min-width:50%;">			<!--put this style rule at the top-->		
					<div class="ui form segment">
					<div class="field">
						<input name="name" type="text" placeholder="Name" onBlur="isFilled(this)" autocomplete="off" spellcheck="false">
					</div>
					<div class="field">
						<input name="email" type="text" placeholder="Email" onBlur = "updateMessage()" autocomplete="off" spellcheck="false">
					</div>
					<div class="field">
						<input name="subject" type="text" placeholder="Subject" onBlur = "isFilled(this)" autocomplete="off" spellcheck="false">
					</div>
					</div>			
				</div>
				<div class="right">
					<div class="ui form segment">
					<textarea name="message" placeholder="What's on your mind?" onBlur = "isFilled(this)" spellcheck="false" style="height:10.99em; max-height:10.99em;"></textarea>	
					</div>
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
	<footer id="footer">
		&copy; 2013 YourStudio
	</footer>
	
	<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
	<script src="js/main_construction.js"></script>
	<script src="js/semantic.js"></script>
	<script type="text/javascript">
		var messageArray = new Array("false", "false", "false");  //this array will be used when updating the comment prompt message
		var formsArray = new Array("name", "subject", "message"); 
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
		
		<!--added this function to validate the comment form - checks whether a field is blank
		function isFilled(form){
			var trimmedInput = form.value.trim();
			var i = formsArray.indexOf(form.name);
			if(form.value.length == 0 || trimmedInput.length == 0 ){		//if input text is only spaces, it counts it as non-empty. try to change
				//update the prompt message and show the bubble
				messageArray[i] = "true"; //this will need to be shown in the prompt message
				updateMessage();
			}
			else{
				messageArray[i] = "false";
				updateMessage();
			}
		}
		function updateMessage(){
			//console.log(id);
			var string = " ";
			var count = 0;
			for(var k=0; k< messageArray.length; k++)
			{
				if (messageArray[k] == "true")
					count++;
			}			
			if(count > 0 )
			{
				for(var k=0; k< messageArray.length; k++)
				{
					if (messageArray[k] == "true")
					{
						if(string.length == 1 && count == 1)
						{
							string  = string + formsArray[k];
						}
						else if(string.length > 1 && count == 1)
						{
							string = string + " and " + formsArray[k];
						}
						else
						{
								string  = string + formsArray[k] + ", ";
						}
						count--;
					}	
				}
			}
			

			document.getElementById("promptMessage").innerHTML = "Please enter your " + string;
			if (string == " ")
				document.getElementById("promptMessage").style.display = 'none'; //this makes the div appear
			else
				document.getElementById("promptMessage").style.display = 'inline'; //this makes the div appear
		}
		
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