var AGC=document.getElementById("id_about_game");
var $fixer_ag=$("#fixer_ag");
function fulling(a){
	for(var i=1; i<=a;++i){
		var $item = $('<img class="about_game_item">');
		$item.attr('src','../img/items/'+5+'.png');
		$item.insertAfter($fixer_ag);
	}
}
function get(){
	var w = document.documentElement.clientHeight;
	var h = document.documentElement.clientWidth;
	alert(w + 'x' + h);
}
var q1=0;
var q2=0;
var q3=0;
var q4=0;
function interval(){
	var x1=setInterval(function(){
		++q1;
	},200)
	var x2=setInterval(function(){
		++q2;
	},200)
	var x3=setInterval(function(){
		++q3;
	},200)
	var x4=setInterval(function(){
		++q4;
	},200)
	alert("done!");
}
alert("include");
