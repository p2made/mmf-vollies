<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
    * @var common\models\ApplicationSearch $searchModel
*/

$this->title = Yii::t('models', 'Applications');
$this->params['breadcrumbs'][] = $this->title;


/**
* create action column template depending acces rights
*/
$actionColumnTemplates = [];

if (\Yii::$app->user->can('frontend_application_view', ['route' => true])) {
    $actionColumnTemplates[] = '{view}';
}

if (\Yii::$app->user->can('frontend_application_update', ['route' => true])) {
    $actionColumnTemplates[] = '{update}';
}

if (\Yii::$app->user->can('frontend_application_delete', ['route' => true])) {
    $actionColumnTemplates[] = '{delete}';
}
if (isset($actionColumnTemplates)) {
$actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">'.$actionColumnTemplateString.'</div>';
?>
<div class="giiant-crud application-index">

    <?php
//             echo $this->render('_search', ['model' =>$searchModel]);
        ?>

    
    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <h1>
        <?= Yii::t('models', 'Applications') ?>
        <small>
            List
        </small>
    </h1>
    <div class="clearfix crud-navigation">
<?php
if(\Yii::$app->user->can('frontend_application_create', ['route' => true])){
?>
        <div class="pull-left">
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
<?php
}
?>
        <div class="pull-right">

                                                                                                                                        
            <?= 
            \yii\bootstrap\ButtonDropdown::widget(
            [
            'id' => 'giiant-relations',
            'encodeLabel' => false,
            'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
            'dropdown' => [
            'options' => [
            'class' => 'dropdown-menu-right'
            ],
            'encodeLabels' => false,
            'items' => [
            [
                'url' => ['job/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Job'),
            ],
                                [
                'url' => ['job/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Job'),
            ],
                                [
                'url' => ['job/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Job'),
            ],
                                [
                'url' => ['profile/index'],
                'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Profile'),
            ],
                    
]
            ],
            'options' => [
            'class' => 'btn-default'
            ]
            ]
            );
            ?>
        </div>
    </div>

    <hr />

    <div class="table-responsive">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
        'class' => yii\widgets\LinkPager::className(),
        'firstPageLabel' => 'First',
        'lastPageLabel' => 'Last',
        ],
                    'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'headerRowOptions' => ['class'=>'x'],
        'columns' => [
                [
            'class' => 'yii\grid\ActionColumn',
            'template' => $actionColumnTemplateString,
            'buttons' => [
                'view' => function ($url, $model, $key) {
                    $options = [
                        'title' => Yii::t('yii', 'View'),
                        'aria-label' => Yii::t('yii', 'View'),
                        'data-pjax' => '0',
                    ];
                    return Html::a('<span class="glyphicon glyphicon-file"></span>', $url, $options);
                }
            ],
            'urlCreator' => function($action, $model, $key, $index) {
                // using the column name as key, not mapping to 'id' like the standard generator
                $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
                $params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
                return Url::toRoute($params);
            },
            'contentOptions' => ['nowrap'=>'nowrap']
        ],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'user_id',
			    'value' => function ($model) {
			        if ($rel = $model->getUser()->one()) {
			            return Html::a($rel->name, ['profile/view', 'user_id' => $rel->user_id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'job_choice_1',
			    'value' => function ($model) {
			        if ($rel = $model->getJobChoice1()->one()) {
			            return Html::a($rel->name, ['job/view', 'id' => $rel->id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],
			'year',
			'availableFromDate',
			'availableFromTime:datetime',
			'availableToDate',
			'availableToTime:datetime',
			/*// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'job_choice_2',
			    'value' => function ($model) {
			        if ($rel = $model->getJobChoice2()->one()) {
			            return Html::a($rel->name, ['job/view', 'id' => $rel->id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],*/
			/*// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
			    'class' => yii\grid\DataColumn::className(),
			    'attribute' => 'job_choice_3',
			    'value' => function ($model) {
			        if ($rel = $model->getJobChoice3()->one()) {
			            return Html::a($rel->name, ['job/view', 'id' => $rel->id,], ['data-pjax' => 0]);
			        } else {
			            return '';
			        }
			    },
			    'format' => 'raw',
			],*/
			/*'bestTime:datetime',*/
			/*'double',*/
			/*'status',*/
			/*'team_id',*/
			/*'availabilityNotes:ntext',*/
			/*'otherNotes:ntext',*/
			/*'rejectedReason:ntext',*/
			/*'referee',*/
			/*'refereeRelationship',*/
			/*'refereePhone',*/
			/*'bestCallingTime',*/
        ],
        ]); ?>
    </div>

</div>


<?php \yii\widgets\Pjax::end() ?>


