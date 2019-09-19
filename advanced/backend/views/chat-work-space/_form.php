<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tblChatWorkSpace */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-chat-work-space-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fk_wksp_chat_workspace')->textInput() ?>

    <?= $form->field($model, 'fk_wksp_chat_employer')->textInput() ?>

    <?= $form->field($model, 'fk_wksp_chat_user')->textInput() ?>

    <?= $form->field($model, 'wksp_chat_message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'wksp_chat_time_sent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wksp_chat_sender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wksp_chat_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wksp_chat_time_read')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
