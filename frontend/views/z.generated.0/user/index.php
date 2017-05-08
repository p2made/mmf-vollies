<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/a0a12d1bd32eaeeb8b2cff56d511aa22
 *
 * @package default
 */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
 *
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\UserSearch $searchModel
 */
$this->title = Yii::t('models', 'Users');
$this->params['breadcrumbs'][] = $this->title;


/**
 * create action column template depending acces rights
 */
$actionColumnTemplates = [];

if (\Yii::$app->user->can('frontend_user_view', ['route' => true])) {
	$actionColumnTemplates[] = '{view}';
}

if (\Yii::$app->user->can('frontend_user_update', ['route' => true])) {
	$actionColumnTemplates[] = '{update}';
}

if (\Yii::$app->user->can('frontend_user_delete', ['route' => true])) {
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
<div class="giiant-crud user-index">

    <?php
//             echo $this->render('_search', ['model' =>$searchModel]);
?>


    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <h1>
        <?php echo Yii::t('models', 'Users') ?>
        <small>
            List
        </small>
    </h1>
    <div class="clearfix crud-navigation">
<?php
if (\Yii::$app->user->can('frontend_user_create', ['route' => true])) {
?>
        <div class="pull-left">
            <?php echo Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
<?php
}
?>
        <div class="pull-right">


            <?php echo
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
					'url' => ['application/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'Application'),
				],
				[
					'url' => ['commitment/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'Commitment'),
				],
				[
					'url' => ['history/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'History'),
				],
				[
					'url' => ['profile/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'Profile'),
				],
				[
					'url' => ['team/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'Team'),
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
        <?php echo GridView::widget([
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
			'role_id',
			'email:email',
			'username',
			'auth_key',
			'password_hash',
			'status',
			'banned_at',
			/*'logged_in_at',*/
			/*'password_reset_token',*/
			/*'banned_reason',*/
			/*'logged_in_ip',*/
			/*'created_ip',*/
			/*'updated_ip',*/
		],
	]); ?>
    </div>

</div>


<?php \yii\widgets\Pjax::end() ?>
