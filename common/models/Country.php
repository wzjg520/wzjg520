<?php
namespace common\models;

use yii;
use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
	public function getNavs(Array $params)
	{
		return $this->find($params);
	}
}