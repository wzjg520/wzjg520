<?php
namespace frontend\controllers;
use yii\web\Controller;
use yii;
use common\models\Nav;
use common\macro\ConfMacro;

class AuthController extends Controller
{
	
    private  $ajaxData = array(
        'type' => '',
        'msg' => '',
        'code' => ''
    );
    
	public function __construct($id, $module)
	{
		parent::__construct($id, $module);
		

		$view = yii::$app->view;
		
		$navs = $this->getNavs();
		if($navs){
		    foreach($navs as $k => $v){
		        $view->params['nav'][$k]['label'] = $v->title;
		        $view->params['nav'][$k]['url'] = $v->href;
		    }
		}else{
		    $view->params['nav'][0]['url'] = '/site/index';
		    $view->params['nav'][0]['label'] = 'default';
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
	
	public function ajaxReturn($code, $type = ConfMacro::SUCC, $msg = ''){
	    $data_arr = $this->ajaxData;
	    if($type != ConfMacro::SUCC){
	       $type = ConfMacro::ERRO;
	    }
	    $data_arr['type'] = $type;
	    $data_arr['msg'] = $msg;
	    $data_arr['code'] = $code;
	    
	    
	    return json_encode($data_arr);
	}
	
	public function ajaxReturnSucc($code) {
	    echo $this->ajaxReturn($code);
	    exit;
	}
	
	public function ajaxReturnErro($code) {
	    echo $this->ajaxReturn($code, $type = ConfMacro::ERRO);
	    exit;
	}
	
	public function isAjax() {
	    return yii::$app->request->isAjax;
	}
	
	public function isGet() {
	    return yii::$app->request->isGet;
	}
	
	public function isPost() {
	    return yii::$app->request->isPost;
	}
	
	public function post($name = null, $defaultValue = null)
	{
		return Yii::$app->request->post($name, $defaultValue);
	}
	
	public function get($name = null, $defaultValue = null)
	{
		return Yii::$app->request->get($name, $defaultValue);
	}
	
}