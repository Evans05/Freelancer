<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_job}}".
 *
 * @property int $pk_job_id
 * @property int $fk_job_company
 * @property string $job_title
 * @property string $job_budget
 * @property string $job_category
 * @property string $job_duration
 * @property string $job_description
 * @property string $job_status
 *
 * @property TblBid[] $tblBs
 * @property TblEmployerCompany $fkJobCompany
 * @property TblJobAttachment[] $tblJobAttachments
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_job}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_job_company', 'job_title', 'job_budget', 'job_category', 'job_duration', 'job_description', 'job_status'], 'required'],
            [['fk_job_company'], 'integer'],
            [['job_description'], 'string'],
            [['job_title'], 'string', 'max' => 200],
            [['job_budget', 'job_duration'], 'string', 'max' => 50],
            [['job_category'], 'string', 'max' => 100],
            [['job_status'], 'string', 'max' => 20],
            [['fk_job_company'], 'exist', 'skipOnError' => true, 'targetClass' => TblEmployerCompany::className(), 'targetAttribute' => ['fk_job_company' => 'pk_company_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_job_id' => Yii::t('app', 'Pk Job ID'),
            'fk_job_company' => Yii::t('app', 'Fk Job Company'),
            'job_title' => Yii::t('app', 'Job Title'),
            'job_budget' => Yii::t('app', 'Job Budget'),
            'job_category' => Yii::t('app', 'Job Category'),
            'job_duration' => Yii::t('app', 'Job Duration'),
            'job_description' => Yii::t('app', 'Job Description'),
            'job_status' => Yii::t('app', 'Job Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBs()
    {
        return $this->hasMany(TblBid::className(), ['fk_job_bidded' => 'pk_job_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkJobCompany()
    {
        return $this->hasOne(TblEmployerCompany::className(), ['pk_company_id' => 'fk_job_company']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblJobAttachments()
    {
        return $this->hasMany(TblJobAttachment::className(), ['fk_attachment_job' => 'pk_job_id']);
    }

    /**
     * {@inheritdoc}
     * @return JobQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JobQuery(get_called_class());
    }
}
