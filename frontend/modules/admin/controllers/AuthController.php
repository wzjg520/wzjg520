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