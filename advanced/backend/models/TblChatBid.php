<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblChatBid]].
 *
 * @see TblChatBid
 */
class TblChatBid extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblChatBid[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblChatBid|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
