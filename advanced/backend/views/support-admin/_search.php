<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupportAdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-support-admin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pk_support_admin_id') ?>

    <?= $form->field($model, 'support_admin_fname') ?>

    <?= $form->field($model, 'support_admin_email') ?>

    <?= $form->field($model, 'support_admin_phone') ?>

    <?= $form->field($model, 'support_admin_username') ?>

    <?php // echo $form->field($model, 'support_admin_password') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
