<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ChatWorkSpaceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tbl Chat Work Spaces');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-chat-work-space-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tbl Chat Work Space'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pk_wksp_chat_id',
            'fk_wksp_chat_workspace',
            'fk_wksp_chat_employer',
            'fk_wksp_chat_user',
            'wksp_chat_message:ntext',
            //'wksp_chat_time_sent',
            //'wksp_chat_sender',
            //'wksp_chat_status',
            //'wksp_chat_time_read',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
