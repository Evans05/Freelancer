<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblChatWorkspace]].
 *
 * @see TblChatWorkspace
 */
class TblChatWorkspaceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblChatWorkspace[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblChatWorkspace|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
