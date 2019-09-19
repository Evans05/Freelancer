<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblPaymentDeduction]].
 *
 * @see TblPaymentDeduction
 */
class TblPaymentDeductionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblPaymentDeduction[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblPaymentDeduction|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
