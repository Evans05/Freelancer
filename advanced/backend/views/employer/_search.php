<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-employer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pk_emp_id') ?>

    <?= $form->field($model, 'emp_name') ?>

    <?= $form->field($model, 'emp_email') ?>

    <?= $form->field($model, 'emp_phone') ?>

    <?= $form->field($model, 'emp_balance') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
