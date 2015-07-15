<?php
namespace frontend\admin;
use yii\web\Controller;
use yii;
use common\models\Nav;

class AuthController extends Controller
{
	
	public function __construct($id, $module)
	{
		parent::__construct($id, $module);
		

		$view = yii::$app->view;
		
		$navs = $this->getNavs();
		
		foreach($navs as $k => $v){
			$view->params['nav'][$k]['label'] = $v->title;
			$view->params['nav'][$k]['url'] = $v->href;
		}
		
	}
	
	
	
	public function getNavs()
	{
		$query = Nav::find();
		return $query->where(['status'=>1])->orderBy('sort ASC')->all();
	}
	
	public function beforeAction($action)
	{
		return true;
	}
	
	public function afterAction($action, $result)
	{
		return parent::afterAction($action, $result);
	}
	
}