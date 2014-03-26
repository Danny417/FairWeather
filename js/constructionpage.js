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

/*--added this function to validate the comment form - checks whether a field is blank and updates accordingly*/
function updateMessage(form){
	var string = " ";
	var count = 0;
	var trimmedInput = form.value.trim();
	var i = formsArray.indexOf(form.name);
	
	if(i != -1) //email form would cause i = -1 since not required
	{
		messageArray[i] = "false";
		
		if (trimmedInput.length == 0)
		{
			messageArray[i] = "true";
		}	
	}
	for(var k=0; k< messageArray.length; k++)
		{
			
			if(messageArray[k] == "true") 		
			count++;							//count how many fields are missing
		}					

		for(var k=0; k< messageArray.length; k++)
		{
			
			if(messageArray[k] == "true") 		//add field name to message string if it was empty in the form
			{
				if(string.length == 1)
				{
					string = string + formsArray[k];
				}
				else
				{
					string = string + ", "
					if(count == 1)				//add 'and' before the last field if there are more than two missing fields
						string = string + "and ";
					string = string + formsArray[k];							
				}
				count--;
			}
		}
	

	document.getElementById("promptMessage").innerHTML = "Please enter your " + string;
	if (string == " ")
		document.getElementById("promptMessage").style.display = 'none'; //this hides the div
	else
		document.getElementById("promptMessage").style.display = 'inline'; //this makes the div appear
		
	//can check whether form is ready to be sent (based on style.display) when cancel or send pressed	
}


