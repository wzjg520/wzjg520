<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>country</h1>
<? foreach($countrys as $country){?>
<li>
	<?= Html::encode("{$country->name} {$country->code}")?>:
	<?= $country['population']?>
</li>
<? }?>

<?=LinkPager::widget(['pagination' => $pagination]);?>