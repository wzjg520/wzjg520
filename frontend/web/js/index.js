/**
 * @author Jiajun Wang
 */

;
$(function(){
	
	$('#slide').hover(function(){
		$('#test').stop().slideDown(function(){
		});
	}, function(){
		$('#test').stop().slideUp('fast', function(){
		});
	});
	
	$('.scroll-top').click(function(e){
		e.preventDefault();
		app.tool.scrollTop();
	})
});