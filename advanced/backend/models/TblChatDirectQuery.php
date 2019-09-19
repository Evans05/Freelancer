<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblChatDirect]].
 *
 * @see TblChatDirect
 */
class TblChatDirectQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblChatDirect[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblChatDirect|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
