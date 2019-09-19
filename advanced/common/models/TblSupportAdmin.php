<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_support_admin}}".
 *
 * @property int $pk_support_admin_id
 * @property string $support_admin_fname
 * @property string $support_admin_email
 * @property string $support_admin_phone
 * @property string $support_admin_username
 * @property string $support_admin_password
 *
 * @property TblChatBid[] $tblChatBs
 * @property TblChatDirect[] $tblChatDirects
 */
class TblSupportAdmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_support_admin}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['support_admin_fname', 'support_admin_email', 'support_admin_phone', 'support_admin_username', 'support_admin_password'], 'required'],
            [['support_admin_fname', 'support_admin_email'], 'string', 'max' => 100],
            [['support_admin_phone'], 'string', 'max' => 20],
            [['support_admin_username'], 'string', 'max' => 30],
            [['support_admin_password'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_support_admin_id' => Yii::t('app', 'Pk Support Admin ID'),
            'support_admin_fname' => Yii::t('app', 'Support Admin Fname'),
            'support_admin_email' => Yii::t('app', 'Support Admin Email'),
            'support_admin_phone' => Yii::t('app', 'Support Admin Phone'),
            'support_admin_username' => Yii::t('app', 'Support Admin Username'),
            'support_admin_password' => Yii::t('app', 'Support Admin Password'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblChatBs()
    {
        return $this->hasMany(TblChatBid::className(), ['fk_bid_chat_admin' => 'pk_support_admin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblChatDirects()
    {
        return $this->hasMany(TblChatDirect::className(), ['fk_direct_chat_admin' => 'pk_support_admin_id']);
    }

    /**
     * {@inheritdoc}
     * @return TblSupportAdminQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblSupportAdminQuery(get_called_class());
    }
}
