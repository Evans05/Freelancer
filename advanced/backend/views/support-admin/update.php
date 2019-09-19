<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblSupportAdmin */

$this->title = Yii::t('app', 'Update Tbl Support Admin: {name}', [
    'name' => $model->pk_support_admin_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Support Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_support_admin_id, 'url' => ['view', 'id' => $model->pk_support_admin_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbl-support-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
