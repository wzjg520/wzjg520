<?php
use yii\helpers\Html;
use frontend\assets\AdminAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AdminAsset::register($this);
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
    <?= $content ?>
    
    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Wzjg520 <?= date('Y') ?></p>
        <p class="pull-right">版权所有，可以翻版</p>
        </div>
    </footer>
    
    
    

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
