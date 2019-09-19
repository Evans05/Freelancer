<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblDispute]].
 *
 * @see TblDispute
 */
class TblDisputeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblDispute[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblDispute|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
