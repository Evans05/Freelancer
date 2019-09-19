<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_employer_company".
 *
 * @property int $pk_company_id
 * @property int $fk_company_employer
 * @property string $company_name
 * @property string $employer_industry
 *
 * @property TblEmployer $fkCompanyEmployer
 * @property TblJob[] $tblJobs
 */
class TblEmployerCompany extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_employer_company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_company_employer', 'company_name', 'employer_industry'], 'required'],
            [['fk_company_employer'], 'integer'],
            [['company_name'], 'string', 'max' => 150],
            [['employer_industry'], 'string', 'max' => 100],
            [['fk_company_employer'], 'exist', 'skipOnError' => true, 'targetClass' => TblEmployer::className(), 'targetAttribute' => ['fk_company_employer' => 'pk_emp_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_company_id' => 'Pk Company ID',
            'fk_company_employer' => 'Fk Company Employer',
            'company_name' => 'Company Name',
            'employer_industry' => 'Employer Industry',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCompanyEmployer()
    {
        return $this->hasOne(TblEmployer::className(), ['pk_emp_id' => 'fk_company_employer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblJobs()
    {
        return $this->hasMany(TblJob::className(), ['fk_job_company' => 'pk_company_id']);
    }
}
