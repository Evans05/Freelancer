<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-deduction-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pk_profile_id') ?>

    <?= $form->field($model, 'fk_profile_user') ?>

    <?= $form->field($model, 'profile_photo') ?>

    <?= $form->field($model, 'profile_expertise_overview') ?>

    <?= $form->field($model, 'profile_featured_work') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
