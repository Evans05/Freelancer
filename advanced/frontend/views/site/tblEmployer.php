<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tblEmployer */
/* @var $form ActiveForm */
?>
<div class="tblEmployer">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'emp_name') ?>
        <?= $form->field($model, 'emp_email') ?>
        <?= $form->field($model, 'emp_balance') ?>
        <?= $form->field($model, 'emp_phone') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tblEmployer -->
