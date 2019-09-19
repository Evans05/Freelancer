<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblEmployer */

$this->title = Yii::t('app', 'Create Tbl Employer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Employers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-employer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
