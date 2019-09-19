<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_deposit_deduction}}".
 *
 * @property int $pk_deposit_deduction_id
 * @property int $fk_deposit_deduction_history
 * @property string $deposit_deduction_description
 * @property string $deposit_deduction_amount
 *
 * @property TblEmployerDepositHistory $fkDepositDeductionHistory
 */
class TblDepositDeduction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_deposit_deduction}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_deposit_deduction_history', 'deposit_deduction_amount'], 'required'],
            [['fk_deposit_deduction_history'], 'integer'],
            [['deposit_deduction_description'], 'string'],
            [['deposit_deduction_amount'], 'string', 'max' => 20],
            [['fk_deposit_deduction_history'], 'exist', 'skipOnError' => true, 'targetClass' => TblEmployerDepositHistory::className(), 'targetAttribute' => ['fk_deposit_deduction_history' => 'pk_deposit_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_deposit_deduction_id' => Yii::t('app', 'Pk Deposit Deduction ID'),
            'fk_deposit_deduction_history' => Yii::t('app', 'Fk Deposit Deduction History'),
            'deposit_deduction_description' => Yii::t('app', 'Deposit Deduction Description'),
            'deposit_deduction_amount' => Yii::t('app', 'Deposit Deduction Amount'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkDepositDeductionHistory()
    {
        return $this->hasOne(TblEmployerDepositHistory::className(), ['pk_deposit_id' => 'fk_deposit_deduction_history']);
    }

    /**
     * {@inheritdoc}
     * @return TblDepositDeductionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblDepositDeductionQuery(get_called_class());
    }
}
