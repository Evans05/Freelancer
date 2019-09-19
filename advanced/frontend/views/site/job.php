<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Job */
/* @var $form ActiveForm */
?>
<div class="site-job">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fk_job_company') ?>
        <?= $form->field($model, 'job_title') ?>
        <?= $form->field($model, 'job_budget') ?>
        <?= $form->field($model, 'job_category') ?>
        <?= $form->field($model, 'job_duration') ?>
        <?= $form->field($model, 'job_description') ?>
        <?= $form->field($model, 'job_status') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-job -->
