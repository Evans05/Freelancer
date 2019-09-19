<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_user}}".
 *
 * @property int $pk_user_id
 * @property string $user_id_number
 * @property string $user_full_name
 * @property string $user_email
 * @property string $user_phone
 * @property string $user_county
 * @property string $user_gender
 * @property string $user_date_of_birth
 * @property string $user_balance
 * @property string $user_username
 * @property string $user_password
 *
 * @property TblBid[] $tblBs
 * @property TblChatBid[] $tblChatBs
 * @property TblChatWorkspace[] $tblChatWorkspaces
 * @property TblProfile[] $tblProfiles
 * @property TblUserCertification[] $tblUserCertifications
 * @property TblUserSkill[] $tblUserSkills
 */
class TblUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_full_name', 'user_email', 'user_county', 'user_gender', 'user_date_of_birth', 'user_balance', 'user_username', 'user_password'], 'required'],
            [['user_id_number', 'user_phone', 'user_county', 'user_username'], 'string', 'max' => 30],
            [['user_full_name'], 'string', 'max' => 150],
            [['user_email'], 'string', 'max' => 70],
            [['user_gender'], 'string', 'max' => 15],
            [['user_date_of_birth'], 'string', 'max' => 20],
            [['user_balance'], 'string', 'max' => 10],
            [['user_password'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_user_id' => Yii::t('app', 'Pk User ID'),
            'user_id_number' => Yii::t('app', 'User Id Number'),
            'user_full_name' => Yii::t('app', 'User Full Name'),
            'user_email' => Yii::t('app', 'User Email'),
            'user_phone' => Yii::t('app', 'User Phone'),
            'user_county' => Yii::t('app', 'User County'),
            'user_gender' => Yii::t('app', 'User Gender'),
            'user_date_of_birth' => Yii::t('app', 'User Date Of Birth'),
            'user_balance' => Yii::t('app', 'User Balance'),
            'user_username' => Yii::t('app', 'User Username'),
            'user_password' => Yii::t('app', 'User Password'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblBs()
    {
        return $this->hasMany(TblBid::className(), ['fk_bid_user' => 'pk_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblChatBs()
    {
        return $this->hasMany(TblChatBid::className(), ['fk_bid_chat_user' => 'pk_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblChatWorkspaces()
    {
        return $this->hasMany(TblChatWorkspace::className(), ['fk_wksp_chat_user' => 'pk_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblProfiles()
    {
        return $this->hasMany(TblProfile::className(), ['fk_profile_user' => 'pk_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblUserCertifications()
    {
        return $this->hasMany(TblUserCertification::className(), ['fk_certification_user_id' => 'pk_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblUserSkills()
    {
        return $this->hasMany(TblUserSkill::className(), ['fk_skill_user_id' => 'pk_user_id']);
    }

    /**
     * {@inheritdoc}
     * @return TblUserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblUserQuery(get_called_class());
    }
}
