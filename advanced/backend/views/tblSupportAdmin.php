<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tblSupportAdmin */
/* @var $form ActiveForm */
?>
<div class="tblSupportAdmin">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'support_admin_fname') ?>
        <?= $form->field($model, 'support_admin_email') ?>
        <?= $form->field($model, 'support_admin_phone') ?>
        <?= $form->field($model, 'support_admin_username') ?>
        <?= $form->field($model, 'support_admin_password') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tblSupportAdmin -->
