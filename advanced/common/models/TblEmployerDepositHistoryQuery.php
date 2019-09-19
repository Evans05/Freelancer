<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblEmployerDepositHistory]].
 *
 * @see TblEmployerDepositHistory
 */
class TblEmployerDepositHistoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblEmployerDepositHistory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblEmployerDepositHistory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
