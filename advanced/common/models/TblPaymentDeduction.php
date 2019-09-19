<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_payment_deduction}}".
 *
 * @property int $pk_pay_deduction_id
 * @property int $fk_pay_deduction_history
 * @property string $pay_deduction_description
 * @property string $pay_deduction_amount
 *
 * @property TblUserPaymentHistory $fkPayDeductionHistory
 */
class TblPaymentDeduction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_payment_deduction}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_pay_deduction_history', 'pay_deduction_amount'], 'required'],
            [['fk_pay_deduction_history'], 'integer'],
            [['pay_deduction_description'], 'string'],
            [['pay_deduction_amount'], 'string', 'max' => 20],
            [['fk_pay_deduction_history'], 'exist', 'skipOnError' => true, 'targetClass' => TblUserPaymentHistory::className(), 'targetAttribute' => ['fk_pay_deduction_history' => 'pk_pay_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_pay_deduction_id' => Yii::t('app', 'Pk Pay Deduction ID'),
            'fk_pay_deduction_history' => Yii::t('app', 'Fk Pay Deduction History'),
            'pay_deduction_description' => Yii::t('app', 'Pay Deduction Description'),
            'pay_deduction_amount' => Yii::t('app', 'Pay Deduction Amount'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkPayDeductionHistory()
    {
        return $this->hasOne(TblUserPaymentHistory::className(), ['pk_pay_id' => 'fk_pay_deduction_history']);
    }

    /**
     * {@inheritdoc}
     * @return TblPaymentDeductionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblPaymentDeductionQuery(get_called_class());
    }
}
