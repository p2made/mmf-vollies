<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApplicationJobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Application Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="application-job-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Application Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'appl_id',
            'job_id',
            'preference',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
