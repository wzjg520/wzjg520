<?php
namespace frontend\controllers;

use frontend\controllers\AuthController;
use common\models\ConfCode;
use yii;

class UserController extends AuthController
{
    public function actionLogin()
    {

        if (!$this->isAjax()) {
            echo $this->ajaxReturnErro(ConfCode::ACCESS_ERROR);
        }

        if (!Yii::$app->user->isGuest) {
            echo $this->ajaxReturnErro(ConfCode::ACCESS_ERROR);
        }
        $model = new \common\models\LoginForm();

        if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
            $this->ajaxReturnSucc(ConfCode::LOGIN_SUCC);
        } else {
            $this->ajaxReturnErro(ConfCode::LOGIN_ERROR);
        }

    }
}