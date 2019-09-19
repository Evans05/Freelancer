<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblEmployer */

$this->title = Yii::t('app', 'Update Tbl Employer: {name}', [
    'name' => $model->pk_emp_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Employers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_emp_id, 'url' => ['view', 'id' => $model->pk_emp_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbl-employer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
