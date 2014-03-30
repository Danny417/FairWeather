<!DOCTYPE html>
<html id="ng-app" ng-app="construction">
<head>
	<title>YourStudio</title>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"> <!-- Jqery library -->
	<link rel="stylesheet" type="text/css" href="css/constructionpage.css">	
</head>
<body>
	<h1 id="construction"> Under Construction  </h1>			
	<img elementanimation enter="" leave="flash" click="swing" src="img/buttons/facebook-print.png" class="draggable"/>
	<img elementanimation enter="" leave="flash" click="swing" src="img/buttons/twitter-print.png" class="draggable"/>
	<img elementanimation enter="" leave="flash" click="swing" clickfn="$('.modal.comment').show('show')" src="img/buttons/comment.png" class="draggable"/>
	
	<div class="ui modal comment">
		<div class="ui header"> <!-- DH : font is not on the git? style="font-family:Archistico_Bold; font-size:2em;">	<!--unless i add style rules here, get times new roman!-->
			Leave a comment
			<div class="ui pointing left label" id="promptMessage" style="display:none;">
			Please enter your <span id="msg"></span>
			</div>
		</div>	
		<div class="content">			
			<div class="left" id="leftBox" style="min-width:50%;">			<!--put this style rule at the top-->		
				<div class="ui form segment">
				<div class="field">
					<input name="name" class='required' type="text" placeholder="Name" autocomplete="off" spellcheck="false">
				</div>
				<div class="field">
					<input name="email" type="text" placeholder="Email" autocomplete="off" spellcheck="false">
				</div>
				<div class="field">
					<input name="subject" class='required' type="text" placeholder="Subject" autocomplete="off" spellcheck="false">
				</div>
				</div>			
			</div>
			<div class="right">
				<div class="ui form segment">
				<textarea name="message" class='required' placeholder="What's on your mind?" spellcheck="false" style="height:10.99em; max-height:10.99em;"></textarea>	
				</div>
			</div>
		</div>			

		<div class="modalAction ui buttons">
			<div class="ui button" onclick="cancel()">Cancel</div>
			<div class="or"></div>
			<div class="ui positive button" onclick="submit()">Submit</div>
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
                containment: "document", 
                scroll: false,
                cursor: "crosshair",
                delay: 300,
                snap: true,
            	stop: function(){
	                $(this).undim(); 
	            }
            }).mousedown(function(e) {
            	clearTimeout(GLOBAL.timeOut);
			    GLOBAL.timeOut = setTimeout(function() {
			    	$(".draggable").dimBackground();  
			    }, 350);
            });
            $(document).mouseup(function(e) {
			    clearTimeout(GLOBAL.timeOut);
			    $(".draggable").undim();  
			});
            
		});
	</script>
	<script id="oncall">
		
	</script>
</body>
</html>