<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_job_attachment}}".
 *
 * @property int $pk_job_attachment_id
 * @property int $fk_attachment_job
 * @property string $job_attachment_file_path
 * @property string $job_attachment_file_name
 * @property string $job_attachment_download_name
 *
 * @property TblJob $fkAttachmentJob
 */
class TblJobAttachement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_job_attachment}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_attachment_job', 'job_attachment_file_path', 'job_attachment_file_name', 'job_attachment_download_name'], 'required'],
            [['fk_attachment_job'], 'integer'],
            [['job_attachment_file_path'], 'string', 'max' => 20],
            [['job_attachment_file_name', 'job_attachment_download_name'], 'string', 'max' => 100],
            [['fk_attachment_job'], 'exist', 'skipOnError' => true, 'targetClass' => TblJob::className(), 'targetAttribute' => ['fk_attachment_job' => 'pk_job_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_job_attachment_id' => Yii::t('app', 'Pk Job Attachment ID'),
            'fk_attachment_job' => Yii::t('app', 'Fk Attachment Job'),
            'job_attachment_file_path' => Yii::t('app', 'Job Attachment File Path'),
            'job_attachment_file_name' => Yii::t('app', 'Job Attachment File Name'),
            'job_attachment_download_name' => Yii::t('app', 'Job Attachment Download Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkAttachmentJob()
    {
        return $this->hasOne(TblJob::className(), ['pk_job_id' => 'fk_attachment_job']);
    }

    /**
     * {@inheritdoc}
     * @return TblJobAttachementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblJobAttachementQuery(get_called_class());
    }
}
