<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblDeduction */

$this->title = Yii::t('app', 'Update Tbl Deduction: {name}', [
    'name' => $model->pk_profile_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Deductions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_profile_id, 'url' => ['view', 'id' => $model->pk_profile_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbl-deduction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
