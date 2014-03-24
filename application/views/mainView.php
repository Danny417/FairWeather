<!DOCTYPE html>
<html id="ng-app" ng-app="construction">
<head>
	<title>YourStudio</title>
  	<style>
		h1 {
			font-size: 80px;
			text-align:center;
			margin: 0 auto;
		    color: #333333;
		    font-family: ‘Lucida Console’, Monaco, monospace;
		}
		
	    #footer {
			width:100%;
			height:0;
			bottom:0;
			left:0;
		    color: #333333;
		    font-family: ‘Lucida Console’, Monaco, monospace;
	    }
	        
		.draggable, .contain, #footer {
			position: absolute;
		}
	    
	    .draggable{
			left: -100px;           
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
	</style>	
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"> <!-- Jqery library -->

</head>
<body>
    <div class="contain">
		<h1 id="construction"> Under Construction  </h1>			
		<a href="#"><img elementanimation enter="" leave="flash" click="swing" src="img/buttons/facebook-print.png" class="draggable"/></a>
		<a href="#"><img elementanimation enter="" leave="flash" click="swing" src="img/buttons/twitter-print.png" class="draggable"/></a>
		<a href="#"><img elementanimation enter="" leave="flash" click="swing" src="img/buttons/gmail.png" class="draggable"/></a>
		
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
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script> <!-- library for draggable function -->
    <script src="js/jquery.dim-background.js"></script>
    <script src="js/main_construction.js"></script>
	<script src="js/semantic.min.js"></script>
	<script type="text/javascript">		
		$(window).resize( function() {
			checkBrowserSize();
		});
        
		$(document).ready(function() {
			$(".draggable").each(function() {
				$(this).css('left', Math.random()*window.innerWidth*0.75).css('top', Math.random()*window.innerHeight*0.75);
			});
            
			checkBrowserSize();
            
			$(".draggable").draggable({
                containment: "body", scroll:false
            }).mousedown(function(){
                $(this).dimBackground(); 
            }).mouseleave(function(){
                $(".draggable").undim();
            }).mouseup(function(){
                $(this).undim(); 
            });
            
		});
	</script>
</body>
</html>