<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tblEmployerCompany */
/* @var $form ActiveForm */
?>
<div class="tblEmployerCompany">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'fk_company_employer') ?>
        <?= $form->field($model, 'company_name') ?>
        <?= $form->field($model, 'employer_industry') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tblEmployerCompany -->
