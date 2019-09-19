<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbluser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pk_user_id') ?>

    <?= $form->field($model, 'user_id_number') ?>

    <?= $form->field($model, 'user_full_name') ?>

    <?= $form->field($model, 'user_email') ?>

    <?= $form->field($model, 'user_phone') ?>

    <?php // echo $form->field($model, 'user_county') ?>

    <?php // echo $form->field($model, 'user_gender') ?>

    <?php // echo $form->field($model, 'user_date_of_birth') ?>

    <?php // echo $form->field($model, 'user_balance') ?>

    <?php // echo $form->field($model, 'user_username') ?>

    <?php // echo $form->field($model, 'user_password') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
