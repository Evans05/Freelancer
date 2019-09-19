<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblSupportAdmin */

$this->title = Yii::t('app', 'Create Tbl Support Admin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Support Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-support-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
