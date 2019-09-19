<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tbluser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbluser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_date_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_balance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
