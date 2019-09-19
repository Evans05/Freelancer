<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tbluser */

$this->title = Yii::t('app', 'Update Tbluser: {name}', [
    'name' => $model->pk_user_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tblusers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_user_id, 'url' => ['view', 'id' => $model->pk_user_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbluser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
