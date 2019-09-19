<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_user_payment_history}}".
 *
 * @property int $pk_pay_id
 * @property int $fk_workspace_pay
 * @property string $pay_description
 * @property string $pay_amount
 * @property string $pay_balance
 * @property string $pay_date
 * @property string $pay_deductions
 * @property string $final_pay
 *
 * @property TblPaymentDeduction[] $tblPaymentDeductions
 * @property TblWorkspace $fkWorkspacePay
 */
class TblUserPaymentHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_user_payment_history}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_workspace_pay', 'pay_amount', 'pay_balance', 'pay_date', 'pay_deductions', 'final_pay'], 'required'],
            [['fk_workspace_pay'], 'integer'],
            [['pay_description'], 'string'],
            [['pay_amount', 'pay_balance', 'pay_date', 'pay_deductions', 'final_pay'], 'string', 'max' => 20],
            [['fk_workspace_pay'], 'exist', 'skipOnError' => true, 'targetClass' => TblWorkspace::className(), 'targetAttribute' => ['fk_workspace_pay' => 'pk_wkspc_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_pay_id' => Yii::t('app', 'Pk Pay ID'),
            'fk_workspace_pay' => Yii::t('app', 'Fk Workspace Pay'),
            'pay_description' => Yii::t('app', 'Pay Description'),
            'pay_amount' => Yii::t('app', 'Pay Amount'),
            'pay_balance' => Yii::t('app', 'Pay Balance'),
            'pay_date' => Yii::t('app', 'Pay Date'),
            'pay_deductions' => Yii::t('app', 'Pay Deductions'),
            'final_pay' => Yii::t('app', 'Final Pay'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblPaymentDeductions()
    {
        return $this->hasMany(TblPaymentDeduction::className(), ['fk_pay_deduction_history' => 'pk_pay_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkWorkspacePay()
    {
        return $this->hasOne(TblWorkspace::className(), ['pk_wkspc_id' => 'fk_workspace_pay']);
    }

    /**
     * {@inheritdoc}
     * @return TblUserPaymentHistoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblUserPaymentHistoryQuery(get_called_class());
    }
}
