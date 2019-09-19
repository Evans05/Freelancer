<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblJobAttachement]].
 *
 * @see TblJobAttachement
 */
class TblJobAttachementQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblJobAttachement[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblJobAttachement|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
