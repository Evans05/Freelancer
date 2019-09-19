<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblUserCertification]].
 *
 * @see TblUserCertification
 */
class TblUserCertificationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblUserCertification[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblUserCertification|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
