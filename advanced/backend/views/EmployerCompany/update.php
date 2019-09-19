<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblEmployerCompany */

$this->title = Yii::t('app', 'Update Tbl Employer Company: {name}', [
    'name' => $model->pk_company_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Employer Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_company_id, 'url' => ['view', 'id' => $model->pk_company_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbl-employer-company-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
