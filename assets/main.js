$(document).ready(function() {
	$("body")[0].onmousewheel = function() {
		if(document.body.scrollTop > 50) {
			$("nav").css({"background-color":"white","height":"60px"});
			$("li a").css({"color":"black"});
			$("ul").css({"margin-top":"20px"});
			$("#header").css({"color":"black","margin-top":"10px"});
			$("#logo").css({"margin-top":"5px","width":"50px","height":"50px","background-size":"50px"});
		}
		else {
			$("nav").css({"background-color":"rgba(0,0,0,0)","height":"80px"});
			$("li a").css({"color":"white"});
			$("ul").css({"margin-top":"30px"});
			$("#header").css({"color":"white","margin-top":"18px"});
			$("#logo").css({"margin-top":"10px","width":"60px","height":"60px","background-size":"60px"});

		}
	}
}
);