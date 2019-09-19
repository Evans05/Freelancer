<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblDeduction */

$this->title = Yii::t('app', 'Create Tbl Deduction');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Deductions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-deduction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
