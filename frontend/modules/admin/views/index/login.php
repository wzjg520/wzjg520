<?php
use frontend\assets\AdminAsset;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'wzjg520后台';

AdminAsset::registerStaticJs($this, '@web/js/admin/login.js');
AdminAsset::registerStaticCss($this, '@web/css/index.css');
?>


<div class="container">
</div>
<!-- 登录弹出窗 -->
<div id="login-modal" class="modal fade" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">登录</h4>
      </div>
      <div class="modal-body">
	        <form class="form-signin" id="login-form" action="<?=Url::toRoute('user/login'); ?>"  method="post">
		        <div class="form-group">
					  <label class="control-label" for="username">用户名:</label>
					  <input type="text" class="form-control" placeholder="用户名" name="username" id="username">
				</div>
				<div class="form-group">
					  <label class="control-label" for="password">密码:</label>
					  <input type="password" class="form-control" placeholder="密码" name="password" id="password">
				</div>				
				 <div class="checkbox">
				    <label>
				      <input type="checkbox" name="remeber">记住我
				    </label>
				 </div>
				 <button type="submit" class="btn btn-primary btn-block">提交</button>
	      </form>
      </div>
    </div>
  </div>
</div>