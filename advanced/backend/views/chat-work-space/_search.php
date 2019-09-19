<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChatWorkSpaceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-chat-work-space-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pk_wksp_chat_id') ?>

    <?= $form->field($model, 'fk_wksp_chat_workspace') ?>

    <?= $form->field($model, 'fk_wksp_chat_employer') ?>

    <?= $form->field($model, 'fk_wksp_chat_user') ?>

    <?= $form->field($model, 'wksp_chat_message') ?>

    <?php // echo $form->field($model, 'wksp_chat_time_sent') ?>

    <?php // echo $form->field($model, 'wksp_chat_sender') ?>

    <?php // echo $form->field($model, 'wksp_chat_status') ?>

    <?php // echo $form->field($model, 'wksp_chat_time_read') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
