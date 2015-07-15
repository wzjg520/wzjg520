<?php
namespace frontend\controllers;

use yii;
use yii\data\Pagination;
use yii\web\Controller;
use common\models\Country;

class CountryController extends Controller
{
	public function actionIndex()
	{
		$query = Country::find();
		
		$pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count()
		]);
		
		$countrys = $query->orderBy('name')
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		
		return $this->render('index',[
				'countrys'=>$countrys,
				'pagination'=>$pagination
		]);
	}
}