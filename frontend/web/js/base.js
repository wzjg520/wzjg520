/**
 * @author Jiajun Wang
 */


$.extend({
	'appAjax' : function($obj){
		$.ajax({
			url : $obj['url'],
			data : $obj['data'],
			type : $obj['type'] || 'post',
			success : function(data){
				var jsonData = JSON.parse(data);
				$obj['success'] && $obj['success'](parseInt(jsonData['code']));
			}
		});
	}
});

;$(function(){
	//点击弹出登录窗口
	$('#login').click(function(e){
		e.preventDefault();		
		$('#login_form').modal();
	});
	
	$('#login_submit').click(function(){
		
		var data = {},
			$username = $('#username'),
			$password = $('#password');
		
		data['username'] = $username.val();
		data['password'] = $password.val();
		data['remeberMe'] = 0;
		
		//验证
		if($.trim(data['username']) == ''){
			$username.parent().addClass('has-error has-feedback');
			$('#help_username').show().focus();
			return false;
		}
		
		if($.trim(data['password']) == ''){
			$password.parent().addClass('has-error has-feedback');
			$('#help_password').show().focus();
			return false;
		}
		
		
		
		var btn = $(this).button('loading');
		$.appAjax({
			url : '/user-login',
			data : data,
			success : function(code){
				if (code == 1){
					location.reload();
				}else{
					
					$password.parent().addClass('has-error has-feedback');
					$('#help_password').show().focus();
				}
			}
		});
		setTimeout(function(){
			btn.button('reset');
		}, 3000)
	});
});