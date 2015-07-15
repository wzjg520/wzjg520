/**
 * @author Jiajun Wang
 */
;
var app = {};

app.ua = {},
app.tool = {};


app.tool.scrollTop = function (){
	$('html,body').animate({
		'scrollTop' : '0px'
	});
};
