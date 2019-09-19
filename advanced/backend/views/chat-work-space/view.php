<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tblChatWorkSpace */

$this->title = $model->pk_wksp_chat_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tbl Chat Work Spaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-chat-work-space-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->pk_wksp_chat_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->pk_wksp_chat_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pk_wksp_chat_id',
            'fk_wksp_chat_workspace',
            'fk_wksp_chat_employer',
            'fk_wksp_chat_user',
            'wksp_chat_message:ntext',
            'wksp_chat_time_sent',
            'wksp_chat_sender',
            'wksp_chat_status',
            'wksp_chat_time_read',
        ],
    ]) ?>

</div>
