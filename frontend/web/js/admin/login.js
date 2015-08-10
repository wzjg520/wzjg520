/**
 * 登录
 */
$(function() {
	//登录模态窗
	$('#login-modal').modal();
	$('#login-modal').on('shown.bs.modal', function () {
		  $('#username').focus()
	})
	
})