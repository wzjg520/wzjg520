<?php
namespace common\models;

use yii\db\ActiveRecord;
use yii;

class Nav extends ActiveRecord
{
	public static function getDb(){
		return yii::$app->db_ihuahua;
	}
}