<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <? $this->registerMetaTag(['name' => 'keywords', 'content' => 'ihuahua, huahua和john的官网,php,js'])?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'ihuahua',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            
			$menuItems = $this->params['nav'];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => '注册', 'url' => yii::$app->urlManager->createUrl(['/site/signup']), 'options' => ['id' => 'signup']];
                $menuItems[] = ['label' => '登录', 'url' => ['/site/login'], 'options' => ['id' => 'login']];
            } else {
                $menuItems[] = [
                    'label' => '退出 (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container content">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    <div class="scroll-top">up</div>
    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; johan和huahua的温馨小家 <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
    
<!-- 模态框（Modal） -->
<div class="modal fade" id="login_form" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">用户登录</h4>
         </div>
         <div class="modal-body">
                <!-- 登录表单 -->
              <div class="form-group">
                <label for="username">用户名</label>
                <input type="email" class="form-control" id="username" placeholder="用户名">
                <span style="display: none" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="help_username" style="display: none" class="help-block">请输入用户名</span>
              </div>
              <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" id="password" placeholder="密码">
                <span style="display: none" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                <span id="help_password" style="display: none" class="help-block">你输入的密码不正确</span>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">下次自动登录
                </label>
              </div>
              <!-- 登录表单 -->
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
            <button id="login_submit" type="button" class="btn btn-primary">
               提交更改
            </button>
         </div>
      </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
