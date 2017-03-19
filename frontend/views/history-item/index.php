<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\HistoryItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'History Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create History Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'profileId',
            'givenName',
            'familyName',
            'preferredName',
            // 'email:email',
            // 'phone1',
            // 'phone2',
            // 'address1',
            // 'address2',
            // 'locality',
            // 'state',
            // 'postcode',
            // 'country',
            // 'emergencyContact',
            // 'emergencyPhone1',
            // 'emergencyPhone2',
            // 'rsa',
            // 'dl_c',
            // 'dl_h',
            // 'cse',
            // 'ohs',
            // 'vol',
            // 'mmfVol',
            // 'mmfAtt',
            // 'returned',
            // 'preferredJobs:ntext',
            // 'availability:ntext',
            // 'commentsInformation:ntext',
            // 'discovery:ntext',
            // 'created',
            // 'createdBy',
            // 'updated',
            // 'updatedBy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
