<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblDepositDeduction]].
 *
 * @see TblDepositDeduction
 */
class TblDepositDeductionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblDepositDeduction[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblDepositDeduction|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
