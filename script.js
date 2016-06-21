$(document).ready(function(){
	$("#oneWay").click(function(){
		$(".oneWay").show();
		$(".twoWay").hide();
		$("#oneWay").css({"background-color":"rgba(16,13,53,.3)",
  "border-width":"5px", "border-color":"#24A327", "padding":"4px 12px", "width":"100px",
  "outline":"none", "position": "relative","align":"middle","margin-left": "40%"});
		$("#twoWay").css({"background-color":"rgba(16,13,53,.3)","border-width":"5px",
  "border-color":"#grey", "padding":"4px 12px", "width":"100px",  "outline":"none",
  "position": "relative","align":"middle","margin-left": "1%"});
	});
	$("#two").click(function(){
		$(".oneWay").hide();
		$(".twoWay").show();
		$("#oneWay").css({"background-color":"rgba(16,13,53,.3)","border-width":"5px",
  "border-color":"#grey", "padding":"4px 12px", "width":"100px",  "outline":"none",
  "position": "relative","align":"middle","margin-left": "40%"});
		$("#twoWay").css({"background-color":"rgba(16,13,53,.3)",
  "border-width":"5px", "border-color":"#24A327", "padding":"4px 12px", "width":"100px",
  "outline":"none", "position": "relative","align":"middle","margin-left": "1%"});
		

	})
});/*
$(document).ready(function(){
	$("#oneWay").click(function(){
		$(".oneWay").show();
		$(".twoWay").hide();
		$("#twoWay").css({"color":"#7d7d7d"});
		$("#oneWay").css({"color":"white"});
		$(".one").css({"color":"#ffc206";
					"outline": "#ffc206 solid 1px";
					" background-color":"light gray";});
		$(".two").css({"color":"white";
					"outline": "#black solid 1px";
					" background-color":"rgba(16,13,53,.3)";});
 
});
	$("#twoWay").click(function(){
		$(".oneWay").hide();
		$(".twoWay").show();
		$("#oneWay").css({"color":"#7d7d7d"});
		$("#twoWay").css({"color":"white"});
		$(".two").css({"color":"#ffc206";
				"outline": "#ffc206 solid 1px";
				" background-color":"light gray";});
		$(".one").css({"color":"white";
				"outline": "#black solid 1px";
				" background-color":"rgba(16,13,53,.3)";});
	})
});*/