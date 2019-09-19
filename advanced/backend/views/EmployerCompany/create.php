<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblEmployerCompany */

$this->title = Yii::t('app', 'Create Tbl Employer Company');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Employer Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-employer-company-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
