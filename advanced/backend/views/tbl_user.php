<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tbluser */
/* @var $form ActiveForm */
?>
<div class="tbl_user">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_full_name') ?>
        <?= $form->field($model, 'user_email') ?>
        <?= $form->field($model, 'user_county') ?>
        <?= $form->field($model, 'user_gender') ?>
        <?= $form->field($model, 'user_date_of_birth') ?>
        <?= $form->field($model, 'user_balance') ?>
        <?= $form->field($model, 'user_username') ?>
        <?= $form->field($model, 'user_password') ?>
        <?= $form->field($model, 'user_id_number') ?>
        <?= $form->field($model, 'user_phone') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tbl_user -->
