<?php
namespace frontend\widgets;

use yii\bootstrap\Widget;



class test extends Widget
{
	public function init()
	{
		parent::init();
		
		echo $this->render('test');
	}
}