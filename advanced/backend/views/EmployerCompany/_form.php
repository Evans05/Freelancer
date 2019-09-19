<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tblEmployerCompany */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-employer-company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_company_employer')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employer_industry')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
