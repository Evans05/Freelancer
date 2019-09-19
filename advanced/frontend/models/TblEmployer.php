<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_employer}}".
 *
 * @property int $pk_emp_id
 * @property string $emp_name
 * @property string $emp_email
 * @property string $emp_phone
 * @property string $emp_balance
 *
 * @property TblChatDirect[] $tblChatDirects
 * @property TblChatWorkspace[] $tblChatWorkspaces
 * @property TblChatWorkspace[] $tblChatWorkspaces0
 * @property TblEmployerCompany[] $tblEmployerCompanies
 * @property TblEmployerDepositHistory[] $tblEmployerDepositHistories
 */
class TblEmployer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_employer}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_name', 'emp_email', 'emp_balance'], 'required'],
            [['emp_name', 'emp_email'], 'string', 'max' => 100],
            [['emp_phone'], 'string', 'max' => 50],
            [['emp_balance'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_emp_id' => Yii::t('app', 'ID'),
            'emp_name' => Yii::t('app', 'Employee Name'),
            'emp_email' => Yii::t('app', 'Employee Email'),
            'emp_phone' => Yii::t('app', 'Employee Phone'),
            'emp_balance' => Yii::t('app', 'Employee Balance'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblChatDirects()
    {
        return $this->hasMany(TblChatDirect::className(), ['fk_direct_chat_employer' => 'pk_emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblChatWorkspaces()
    {
        return $this->hasMany(TblChatWorkspace::className(), ['fk_wksp_chat_employer' => 'pk_emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblChatWorkspaces0()
    {
        return $this->hasMany(TblChatWorkspace::className(), ['fk_wksp_chat_employer' => 'pk_emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblEmployerCompanies()
    {
        return $this->hasMany(TblEmployerCompany::className(), ['fk_company_employer' => 'pk_emp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblEmployerDepositHistories()
    {
        return $this->hasMany(TblEmployerDepositHistory::className(), ['fk_deposit_employer' => 'pk_emp_id']);
    }

    /**
     * {@inheritdoc}
     * @return TblEmployerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblEmployerQuery(get_called_class());
    }
}
