<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblWorkSpace]].
 *
 * @see TblWorkSpace
 */
class TblWorkSpace extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblWorkSpace[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblWorkSpace|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
