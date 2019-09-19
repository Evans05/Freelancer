<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tblSupportAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-support-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'support_admin_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'support_admin_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'support_admin_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'support_admin_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'support_admin_password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
