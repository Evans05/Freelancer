<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_chat_direct}}".
 *
 * @property int $pk_direct_chat_id
 * @property int $fk_direct_chat_admin
 * @property int $fk_direct_chat_employer
 * @property string $direct_chat_message
 * @property string $direct_chat_time_sent
 * @property string $direct_chat_sender
 * @property string $direct_chat_status
 * @property string $direct_chat_time_read
 *
 * @property TblSupportAdmin $fkDirectChatAdmin
 * @property TblEmployer $fkDirectChatEmployer
 */
class TblChatDirect extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_chat_direct}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_direct_chat_admin', 'fk_direct_chat_employer', 'direct_chat_message', 'direct_chat_time_sent', 'direct_chat_sender', 'direct_chat_status'], 'required'],
            [['fk_direct_chat_admin', 'fk_direct_chat_employer'], 'integer'],
            [['direct_chat_message'], 'string'],
            [['direct_chat_time_sent', 'direct_chat_sender', 'direct_chat_time_read'], 'string', 'max' => 20],
            [['direct_chat_status'], 'string', 'max' => 10],
            [['fk_direct_chat_admin'], 'exist', 'skipOnError' => true, 'targetClass' => TblSupportAdmin::className(), 'targetAttribute' => ['fk_direct_chat_admin' => 'pk_support_admin_id']],
            [['fk_direct_chat_employer'], 'exist', 'skipOnError' => true, 'targetClass' => TblEmployer::className(), 'targetAttribute' => ['fk_direct_chat_employer' => 'pk_emp_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_direct_chat_id' => Yii::t('app', 'Pk Direct Chat ID'),
            'fk_direct_chat_admin' => Yii::t('app', 'Fk Direct Chat Admin'),
            'fk_direct_chat_employer' => Yii::t('app', 'Fk Direct Chat Employer'),
            'direct_chat_message' => Yii::t('app', 'Direct Chat Message'),
            'direct_chat_time_sent' => Yii::t('app', 'Direct Chat Time Sent'),
            'direct_chat_sender' => Yii::t('app', 'Direct Chat Sender'),
            'direct_chat_status' => Yii::t('app', 'Direct Chat Status'),
            'direct_chat_time_read' => Yii::t('app', 'Direct Chat Time Read'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDirectChatAdmin()
    {
        return $this->hasOne(TblSupportAdmin::className(), ['pk_support_admin_id' => 'fk_direct_chat_admin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDirectChatEmployer()
    {
        return $this->hasOne(TblEmployer::className(), ['pk_emp_id' => 'fk_direct_chat_employer']);
    }

    /**
     * {@inheritdoc}
     * @return TblChatDirectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblChatDirectQuery(get_called_class());
    }
}
