var app = angular.module("construction", []);
var GLOBAL = {
	browsers : ['webkit', 'ms', 'moz', 'o'],
	inAction : false,
	timeOut : 0
};
app.directive("listanimation", function() {
	return function(scope, element, attrs) {
		var elems = element.children(attrs.elems);
		var event = "webkitAnimationEnd mozAnimationEnd oAnimationEnd animationend";
		elems.css('visibility', attrs.visibility);
		for(var j = 0; j < GLOBAL.browsers.length; j++) {
			for(var i = 0; i < elems.length; i++) {
				var attr = '-'+GLOBAL.browsers[j]+'-animation-duration';
				$(elems[i]).css(attr, elems[i].getAttribute('duration'));
				//elems[i].style[attr] = elems[i].getAttribute('duration'); //screw ie
			}
		}
		
		element.bind("mouseenter", function() {
			elems.removeClass('animated '+attrs.leave).addClass(attrs.enter+' animated').css('visibility', 'visible');
			element.unbind(event);
			element.one(event, function() {
					elems.removeClass(attrs.enter+' animated');
				});
		});
		element.bind("mouseleave", function() {	
			elems.removeClass(attrs.enter+' animated').addClass('animated '+attrs.leave);
			element.unbind(event);
			element.one(event, function() {
					elems.removeClass('animated '+attrs.leave).css('visibility', attrs.visibility);
				});
		});
	};
});

app.directive("elementanimation", function() {
	return function(scope, element, attrs) {
		var event = "webkitAnimationEnd mozAnimationEnd oAnimationEnd animationend";
		for(var j = 0; j < GLOBAL.browsers.length; j++) {
			var attr = '-'+GLOBAL.browsers[j]+'-animation-duration';
			element.css(attr, element.attr('duration'));
		}
		element.bind("mouseenter", function() {
			if(element.hasClass('animated '+attrs.click) || attrs.enter == '') return false;
			element.removeClass('animated').removeClass(attrs.leave).addClass(attrs.enter+' animated');
			element.unbind(event);
			element.one(event, function() {
					element.removeClass('animated').removeClass(attrs.enter);
				});
		});
		element.bind("mouseleave", function() {	
			if(element.hasClass('animated') || attrs.leave == '') return false;
			element.removeClass(attrs.enter).removeClass('animated').addClass('animated '+attrs.leave);
			element.unbind(event);
			element.one(event, function() {
					element.removeClass('animated').removeClass(attrs.leave);
				});
		});
		element.bind("click", function() {
			if(attrs.click == '') return;
			element.removeClass(attrs.enter).removeClass('animated').addClass('animated '+attrs.click);
			element.unbind(event);
			element.one(event, function() {
				element.removeClass('animated').removeClass(attrs.click);
				if(attrs.clickfn) {
					$('body').append('<script>'+attrs.clickfn+'</script>'); //DH : may need to look for better solution
				}
			});
		});
	};
});

function submit() {
	if(GLOBAL.inAction || getWarningMsg()) return false;
	GLOBAL.inAction = true;
	var jsonData = {};
	$('input[type=text], textarea').each(
		function() { 
			jsonData[$(this).attr("name")] = $(this).val();
		});
	$.ajax({
	    type : "POST",
	    url : "index.php/main/submit",
	    data : jsonData,
	    dataType : "text",
	    success : function(msg) {
	    	response(msg);
	    },
	    fail : function(msg) {
	    	response(msg);
	    }
	});
	
};

function getWarningMsg() {
	var str = '';
	$('.required').each(function(){ 
		if($(this).val() == '') {
			str += $(this).attr('name') + ', ';
		} 
	});
	str = str.substr(0, str.lastIndexOf(', '));
	var index = str.lastIndexOf(', ');
	if(index > 0) {
		var offset = (str.indexOf(', ') == index) ? 0 : 2;
		str = str.substr(0, index+offset) + 'and '+ str.substr(index+2);
	}
	if(str) {
		$('#msg').text(str);
		$("#promptMessage").css('display', 'inline');
		return true;
	}
	$("#promptMessage").css('display', 'none'); 
	return false;
};

function response(msg) {	
	$('.modal.response').html(msg);
	$('.modal.response').show('show');
	$('.modal.comment').hide();
	GLOBAL.inAction = false;
};
function cancel() {
	$('.modal').hide();
};

function checkBrowserSize() {
	$('body').css('height', window.innerHeight);
};
