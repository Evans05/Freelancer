<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblEmployerCompany]].
 *
 * @see TblEmployerCompany
 */
class TblEmployerCompanyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblEmployerCompany[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblEmployerCompany|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
