<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tblChatWorkSpace */

$this->title = Yii::t('app', 'Update Tbl Chat Work Space: {name}', [
    'name' => $model->pk_wksp_chat_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Chat Work Spaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pk_wksp_chat_id, 'url' => ['view', 'id' => $model->pk_wksp_chat_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tbl-chat-work-space-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
