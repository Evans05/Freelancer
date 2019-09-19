<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblDeduction]].
 *
 * @see TblDeduction
 */
class TblDeductionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblDeduction[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblDeduction|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
