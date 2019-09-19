<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_chat_workspace}}".
 *
 * @property int $pk_wksp_chat_id
 * @property int $fk_wksp_chat_workspace
 * @property int $fk_wksp_chat_employer
 * @property int $fk_wksp_chat_user
 * @property string $wksp_chat_message
 * @property string $wksp_chat_time_sent
 * @property string $wksp_chat_sender
 * @property string $wksp_chat_status
 * @property string $wksp_chat_time_read
 *
 * @property TblWorkspace $fkWkspChatWorkspace
 * @property TblEmployer $fkWkspChatEmployer
 * @property TblEmployer $fkWkspChatEmployer0
 * @property TblUser $fkWkspChatUser
 */
class TblChatWorkspace extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_chat_workspace}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_wksp_chat_workspace', 'fk_wksp_chat_employer', 'fk_wksp_chat_user', 'wksp_chat_message', 'wksp_chat_time_sent', 'wksp_chat_sender', 'wksp_chat_status'], 'required'],
            [['fk_wksp_chat_workspace', 'fk_wksp_chat_employer', 'fk_wksp_chat_user'], 'integer'],
            [['wksp_chat_message'], 'string'],
            [['wksp_chat_time_sent', 'wksp_chat_sender', 'wksp_chat_time_read'], 'string', 'max' => 20],
            [['wksp_chat_status'], 'string', 'max' => 10],
            [['fk_wksp_chat_workspace'], 'exist', 'skipOnError' => true, 'targetClass' => TblWorkspace::className(), 'targetAttribute' => ['fk_wksp_chat_workspace' => 'pk_wkspc_id']],
            [['fk_wksp_chat_employer'], 'exist', 'skipOnError' => true, 'targetClass' => TblEmployer::className(), 'targetAttribute' => ['fk_wksp_chat_employer' => 'pk_emp_id']],
            [['fk_wksp_chat_employer'], 'exist', 'skipOnError' => true, 'targetClass' => TblEmployer::className(), 'targetAttribute' => ['fk_wksp_chat_employer' => 'pk_emp_id']],
            [['fk_wksp_chat_user'], 'exist', 'skipOnError' => true, 'targetClass' => TblUser::className(), 'targetAttribute' => ['fk_wksp_chat_user' => 'pk_user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_wksp_chat_id' => Yii::t('app', 'Pk Wksp Chat ID'),
            'fk_wksp_chat_workspace' => Yii::t('app', 'Fk Wksp Chat Workspace'),
            'fk_wksp_chat_employer' => Yii::t('app', 'Fk Wksp Chat Employer'),
            'fk_wksp_chat_user' => Yii::t('app', 'Fk Wksp Chat User'),
            'wksp_chat_message' => Yii::t('app', 'Wksp Chat Message'),
            'wksp_chat_time_sent' => Yii::t('app', 'Wksp Chat Time Sent'),
            'wksp_chat_sender' => Yii::t('app', 'Wksp Chat Sender'),
            'wksp_chat_status' => Yii::t('app', 'Wksp Chat Status'),
            'wksp_chat_time_read' => Yii::t('app', 'Wksp Chat Time Read'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkWkspChatWorkspace()
    {
        return $this->hasOne(TblWorkspace::className(), ['pk_wkspc_id' => 'fk_wksp_chat_workspace']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkWkspChatEmployer()
    {
        return $this->hasOne(TblEmployer::className(), ['pk_emp_id' => 'fk_wksp_chat_employer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkWkspChatEmployer0()
    {
        return $this->hasOne(TblEmployer::className(), ['pk_emp_id' => 'fk_wksp_chat_employer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkWkspChatUser()
    {
        return $this->hasOne(TblUser::className(), ['pk_user_id' => 'fk_wksp_chat_user']);
    }

    /**
     * {@inheritdoc}
     * @return TblChatWorkspaceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblChatWorkspaceQuery(get_called_class());
    }
}
