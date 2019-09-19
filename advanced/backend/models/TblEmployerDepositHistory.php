<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_employer_deposit_history}}".
 *
 * @property int $pk_deposit_id
 * @property int $fk_deposit_employer
 * @property string $deposit_description
 * @property string $deposit_amount
 * @property string $deposit_balance
 * @property string $deposit_date
 * @property string $deposit_deductions
 * @property string $final_deposit_amount
 *
 * @property TblDepositDeduction[] $tblDepositDeductions
 * @property TblEmployer $fkDepositEmployer
 */
class TblEmployerDepositHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_employer_deposit_history}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_deposit_employer', 'deposit_amount', 'deposit_balance', 'deposit_date', 'deposit_deductions', 'final_deposit_amount'], 'required'],
            [['fk_deposit_employer'], 'integer'],
            [['deposit_description'], 'string'],
            [['deposit_amount', 'deposit_balance', 'deposit_date', 'deposit_deductions', 'final_deposit_amount'], 'string', 'max' => 20],
            [['fk_deposit_employer'], 'exist', 'skipOnError' => true, 'targetClass' => TblEmployer::className(), 'targetAttribute' => ['fk_deposit_employer' => 'pk_emp_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_deposit_id' => Yii::t('app', 'Pk Deposit ID'),
            'fk_deposit_employer' => Yii::t('app', 'Fk Deposit Employer'),
            'deposit_description' => Yii::t('app', 'Deposit Description'),
            'deposit_amount' => Yii::t('app', 'Deposit Amount'),
            'deposit_balance' => Yii::t('app', 'Deposit Balance'),
            'deposit_date' => Yii::t('app', 'Deposit Date'),
            'deposit_deductions' => Yii::t('app', 'Deposit Deductions'),
            'final_deposit_amount' => Yii::t('app', 'Final Deposit Amount'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblDepositDeductions()
    {
        return $this->hasMany(TblDepositDeduction::className(), ['fk_deposit_deduction_history' => 'pk_deposit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDepositEmployer()
    {
        return $this->hasOne(TblEmployer::className(), ['pk_emp_id' => 'fk_deposit_employer']);
    }

    /**
     * {@inheritdoc}
     * @return TblEmployerDepositHistoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblEmployerDepositHistoryQuery(get_called_class());
    }
}
