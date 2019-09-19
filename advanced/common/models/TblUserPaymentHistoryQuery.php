<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblUserPaymentHistory]].
 *
 * @see TblUserPaymentHistory
 */
class TblUserPaymentHistoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblUserPaymentHistory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblUserPaymentHistory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
