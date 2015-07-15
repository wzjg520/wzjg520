<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message).'('.yii::$app->request->absoluteUrl.')') ?>
    </div>

    <p>
        您请求的页面不存在
    </p>
    <p>
       实在抱歉
    </p>

</div>
