<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/d4b4964a63cc95065fa0ae19074007ee
 *
 * @package default
 */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 *
 * @var yii\web\View $this
 * @var common\models\User $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud user-view">

	<!-- flash message -->
	<?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
		<span class="alert alert-info alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			<?php echo \Yii::$app->session->getFlash('deleteError') ?>
		</span>
	<?php endif; ?>

	<h1>
		<?php echo Yii::t('models', 'User') ?>
		<small>
			<?php echo $model->id ?>
		</small>
	</h1>


	<div class="clearfix crud-navigation">

		<!-- menu buttons -->
		<div class='pull-left'>
			<?php echo Html::a(
	'<span class="glyphicon glyphicon-pencil"></span> ' . 'Edit',
	[ 'update', 'id' => $model->id],
	['class' => 'btn btn-info']) ?>

			<?php echo Html::a(
	'<span class="glyphicon glyphicon-copy"></span> ' . 'Copy',
	['create', 'id' => $model->id, 'User'=>$copyParams],
	['class' => 'btn btn-success']) ?>

			<?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New',
	['create'],
	['class' => 'btn btn-success']) ?>
		</div>

		<div class="pull-right">
			<?php echo Html::a('<span class="glyphicon glyphicon-list"></span> '
	. 'Full list', ['index'], ['class'=>'btn btn-default']) ?>
		</div>

	</div>

	<hr />

	<?php $this->beginBlock('common\models\User'); ?>


	<?php echo DetailView::widget([
		'model' => $model,
		'attributes' => [
			'email:email',
			'password_hash',
			'auth_key',
			'username',
			'confirmed_at',
			'flags',
			'last_login_at',
			'blocked_at',
			'unconfirmed_email:email',
			'registration_ip',
		],
	]); ?>


	<hr/>

	<?php echo Html::a('<span class="glyphicon glyphicon-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
	[
		'class' => 'btn btn-danger',
		'data-confirm' => '' . 'Are you sure to delete this item?' . '',
		'data-method' => 'post',
	]); ?>
	<?php $this->endBlock(); ?>



<?php $this->beginBlock('SocialAccounts'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Social Accounts',
	['social-account/index'],
	['class'=>'btn text-muted btn-xs']
) ?>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Social Account',
	['social-account/create', 'SocialAccount' => ['user_id' => $model->id]],
	['class'=>'btn btn-success btn-xs']
); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-SocialAccounts', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-SocialAccounts ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?php echo
'<div class="table-responsive">'
	. \yii\grid\GridView::widget([
		'layout' => '{summary}{pager}<br/>{items}{pager}',
		'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getSocialAccounts(),
				'pagination' => [
					'pageSize' => 20,
					'pageParam'=>'page-socialaccounts',
				]
			]),
		'pager'		=> [
			'class'		  => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel'  => 'Last'
		],
		'columns' => [
			[
				'class'	  => 'yii\grid\ActionColumn',
				'template'   => '{view} {update}',
				'contentOptions' => ['nowrap'=>'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'social-account' . '/' . $action;
					$params['SocialAccount'] = ['user_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons'	=> [

				],
				'controller' => 'social-account'
			],
			'id',
			'email:email',
			'username',
			'provider',
			'client_id',
			'data:ntext',
			'code',
			'created_at',
		]
	])
	. '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Tokens'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Tokens',
	['token/index'],
	['class'=>'btn text-muted btn-xs']
) ?>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Token',
	['token/create', 'Token' => ['user_id' => $model->id]],
	['class'=>'btn btn-success btn-xs']
); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Tokens', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Tokens ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?php echo
'<div class="table-responsive">'
	. \yii\grid\GridView::widget([
		'layout' => '{summary}{pager}<br/>{items}{pager}',
		'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getTokens(),
				'pagination' => [
					'pageSize' => 20,
					'pageParam'=>'page-tokens',
				]
			]),
		'pager'		=> [
			'class'		  => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel'  => 'Last'
		],
		'columns' => [
			[
				'class'	  => 'yii\grid\ActionColumn',
				'template'   => '{view} {update}',
				'contentOptions' => ['nowrap'=>'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'token' . '/' . $action;
					$params['Token'] = ['user_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons'	=> [

				],
				'controller' => 'token'
			],
			'code',
			'created_at',
			'type',
		]
	])
	. '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


	<?php echo Tabs::widget(
	[
		'id' => 'relation-tabs',
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => '<b class=""># '.$model->id.'</b>',
				'content' => $this->blocks['common\models\User'],
				'active'  => true,
			],
			[
				'content' => $this->blocks['SocialAccounts'],
				'label'   => '<small>Social Accounts <span class="badge badge-default">'.count($model->getSocialAccounts()->asArray()->all()).'</span></small>',
				'active'  => false,
			],
			[
				'content' => $this->blocks['Tokens'],
				'label'   => '<small>Tokens <span class="badge badge-default">'.count($model->getTokens()->asArray()->all()).'</span></small>',
				'active'  => false,
			],
		]
	]
);
?>
</div>
