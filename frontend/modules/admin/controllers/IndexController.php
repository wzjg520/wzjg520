<?php
namespace frontend\modules\admin\controllers;

use yii\web\Controller;
class IndexController extends Controller
{
    public function actionIndex(){  	
        return $this->render('login');
    }
}