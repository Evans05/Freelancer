<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_dispute}}".
 *
 * @property int $pk_dispt_id
 * @property int $fk_dispt_workspace
 * @property string $dispt_reason
 * @property string $dispt_status
 * @property string $dispt_raise_time
 * @property string $dispt_conclusion_time
 * @property string $dispt_outcome
 *
 * @property TblWorkspace $fkDisptWorkspace
 */
class TblDispute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_dispute}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_dispt_workspace', 'dispt_reason', 'dispt_status', 'dispt_raise_time'], 'required'],
            [['fk_dispt_workspace'], 'integer'],
            [['dispt_reason', 'dispt_outcome'], 'string'],
            [['dispt_status'], 'string', 'max' => 50],
            [['dispt_raise_time', 'dispt_conclusion_time'], 'string', 'max' => 20],
            [['fk_dispt_workspace'], 'exist', 'skipOnError' => true, 'targetClass' => TblWorkspace::className(), 'targetAttribute' => ['fk_dispt_workspace' => 'pk_wkspc_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_dispt_id' => Yii::t('app', 'Pk Dispt ID'),
            'fk_dispt_workspace' => Yii::t('app', 'Fk Dispt Workspace'),
            'dispt_reason' => Yii::t('app', 'Dispt Reason'),
            'dispt_status' => Yii::t('app', 'Dispt Status'),
            'dispt_raise_time' => Yii::t('app', 'Dispt Raise Time'),
            'dispt_conclusion_time' => Yii::t('app', 'Dispt Conclusion Time'),
            'dispt_outcome' => Yii::t('app', 'Dispt Outcome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDisptWorkspace()
    {
        return $this->hasOne(TblWorkspace::className(), ['pk_wkspc_id' => 'fk_dispt_workspace']);
    }

    /**
     * {@inheritdoc}
     * @return TblDisputeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblDisputeQuery(get_called_class());
    }
}
