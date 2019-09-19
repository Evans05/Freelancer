<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblEmployer]].
 *
 * @see TblEmployer
 */
class TblEmployerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblEmployer[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblEmployer|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
