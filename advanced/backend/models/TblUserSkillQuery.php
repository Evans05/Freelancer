<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblUserSkill]].
 *
 * @see TblUserSkill
 */
class TblUserSkillQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblUserSkill[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblUserSkill|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
