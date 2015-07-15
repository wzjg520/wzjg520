<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Nav]].
 *
 * @see Nav
 */
class NavQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Nav[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Nav|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}