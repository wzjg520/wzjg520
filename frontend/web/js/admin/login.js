/**
 * 登录
 */
;$(function() {
	//登录模态窗
	$('#login-modal').modal();
	$('#login-modal').on('shown.bs.modal', function () {
		  $('#username').focus()
	})
	
	//登录
	$('#login-form').submit(function() {
		
		var postData = app.tool.getPostData(this);
		
		
		
		return false;
	})
	
});