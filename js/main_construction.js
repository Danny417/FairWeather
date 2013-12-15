var app = angular.module("construction", []);
var GLOBAL = {
	browsers : ['webkit', 'ms', 'moz', 'o']
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
			if(element.hasClass('animated '+attrs.click)) return false;
			element.removeClass('animated '+attrs.leave).addClass(attrs.enter+' animated');
			element.unbind(event);
			element.one(event, function() {
					element.removeClass('animated').removeClass(attrs.enter);
				});
		});
		element.bind("mouseleave", function() {	
			if(element.hasClass('animated '+attrs.click)) return false;
			element.removeClass(attrs.enter+' animated').addClass('animated '+attrs.leave);
			element.unbind(event);
			element.one(event, function() {
					element.removeClass('animated').removeClass(attrs.leave);
				});
		});
		element.bind("click", function() {
			element.removeClass(attrs.enter+' animated').addClass('animated '+attrs.click);
			element.unbind(event);
			element.one(event, function() {
				element.removeClass('animated').removeClass(attrs.click);
			});
		});
	};
});