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
			'role_id',
			'email:email',
			'username',
			'auth_key',
			'password_hash',
			'status',
			'banned_at',
			'logged_in_at',
			'password_reset_token',
			'banned_reason',
			'logged_in_ip',
			'created_ip',
			'updated_ip',
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



<?php $this->beginBlock('Applications'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Applications',
	['application/index'],
	['class'=>'btn text-muted btn-xs']
) ?>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Application',
	['application/create', 'Application' => ['user_id' => $model->id]],
	['class'=>'btn btn-success btn-xs']
); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Applications', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Applications ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?php echo
'<div class="table-responsive">'
	. \yii\grid\GridView::widget([
		'layout' => '{summary}{pager}<br/>{items}{pager}',
		'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getApplications(),
				'pagination' => [
					'pageSize' => 20,
					'pageParam'=>'page-applications',
				]
			]),
		'pager'        => [
			'class'          => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel'  => 'Last'
		],
		'columns' => [
			[
				'class'      => 'yii\grid\ActionColumn',
				'template'   => '{view} {update}',
				'contentOptions' => ['nowrap'=>'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'application' . '/' . $action;
					$params['Application'] = ['user_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons'    => [

				],
				'controller' => 'application'
			],
			'id',
			'availableFromDate',
			'availableFromTime:datetime',
			'availableToDate',
			'availableToTime:datetime',
			'earlyLate',
			'availabilityNotes:ntext',
			'double',
			'closed',
		]
	])
	. '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Commitments'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Commitments',
	['commitment/index'],
	['class'=>'btn text-muted btn-xs']
) ?>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Commitment',
	['commitment/create', 'Commitment' => ['user_id' => $model->id]],
	['class'=>'btn btn-success btn-xs']
); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Commitments', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Commitments ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?php echo
'<div class="table-responsive">'
	. \yii\grid\GridView::widget([
		'layout' => '{summary}{pager}<br/>{items}{pager}',
		'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getCommitments(),
				'pagination' => [
					'pageSize' => 20,
					'pageParam'=>'page-commitments',
				]
			]),
		'pager'        => [
			'class'          => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel'  => 'Last'
		],
		'columns' => [
			[
				'class'      => 'yii\grid\ActionColumn',
				'template'   => '{view} {update}',
				'contentOptions' => ['nowrap'=>'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'commitment' . '/' . $action;
					$params['Commitment'] = ['user_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons'    => [

				],
				'controller' => 'commitment'
			],
			'id',
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
				'class' => yii\grid\DataColumn::className(),
				'attribute' => 'appl_id',
				'value' => function ($model) {
					if ($rel = $model->getAppl()->one()) {
						return Html::a($rel->id, ['application/view', 'id' => $rel->id, ], ['data-pjax' => 0]);
					} else {
						return '';
					}
				},
				'format' => 'raw',
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
				'class' => yii\grid\DataColumn::className(),
				'attribute' => 'team_id',
				'value' => function ($model) {
					if ($rel = $model->getTeam()->one()) {
						return Html::a($rel->name, ['team/view', 'id' => $rel->id, ], ['data-pjax' => 0]);
					} else {
						return '';
					}
				},
				'format' => 'raw',
			],
			'year',
			'job',
			'hours',
			'report:ntext',
			'reinvite',
			'created_at',
		]
	])
	. '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Histories'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Histories',
	['history/index'],
	['class'=>'btn text-muted btn-xs']
) ?>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' History',
	['history/create', 'History' => ['user_id' => $model->id]],
	['class'=>'btn btn-success btn-xs']
); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Histories', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Histories ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?php echo
'<div class="table-responsive">'
	. \yii\grid\GridView::widget([
		'layout' => '{summary}{pager}<br/>{items}{pager}',
		'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getHistories(),
				'pagination' => [
					'pageSize' => 20,
					'pageParam'=>'page-histories',
				]
			]),
		'pager'        => [
			'class'          => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel'  => 'Last'
		],
		'columns' => [
			[
				'class'      => 'yii\grid\ActionColumn',
				'template'   => '{view} {update}',
				'contentOptions' => ['nowrap'=>'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'history' . '/' . $action;
					$params['History'] = ['user_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons'    => [

				],
				'controller' => 'history'
			],
			'id',
			'givenName',
			'familyName',
			'preferredName',
			'email:email',
			'phone1',
			'phone2',
			'address1',
			'address2',
		]
	])
	. '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Profiles'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Profiles',
	['profile/index'],
	['class'=>'btn text-muted btn-xs']
) ?>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Profile',
	['profile/create', 'Profile' => ['user_id' => $model->id]],
	['class'=>'btn btn-success btn-xs']
); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Profiles', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Profiles ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?php echo
'<div class="table-responsive">'
	. \yii\grid\GridView::widget([
		'layout' => '{summary}{pager}<br/>{items}{pager}',
		'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getProfiles(),
				'pagination' => [
					'pageSize' => 20,
					'pageParam'=>'page-profiles',
				]
			]),
		'pager'        => [
			'class'          => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel'  => 'Last'
		],
		'columns' => [
			[
				'class'      => 'yii\grid\ActionColumn',
				'template'   => '{view} {update}',
				'contentOptions' => ['nowrap'=>'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'profile' . '/' . $action;
					$params['Profile'] = ['user_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons'    => [

				],
				'controller' => 'profile'
			],
			'id',
			'givenName',
			'familyName',
			'preferredName',
			'phone1',
			'phone2',
			'address1',
			'address2',
			'locality',
		]
	])
	. '</div>'
?>
<?php Pjax::end() ?>
<?php $this->endBlock() ?>


<?php $this->beginBlock('Teams'); ?>
<div style='position: relative'>
<div style='position:absolute; right: 0px; top: 0px;'>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-list"></span> ' . 'List All' . ' Teams',
	['team/index'],
	['class'=>'btn text-muted btn-xs']
) ?>
  <?php echo Html::a(
	'<span class="glyphicon glyphicon-plus"></span> ' . 'New' . ' Team',
	['team/create', 'Team' => ['lead_id' => $model->id]],
	['class'=>'btn btn-success btn-xs']
); ?>
</div>
</div>
<?php Pjax::begin(['id'=>'pjax-Teams', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-Teams ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>
<?php echo
'<div class="table-responsive">'
	. \yii\grid\GridView::widget([
		'layout' => '{summary}{pager}<br/>{items}{pager}',
		'dataProvider' => new \yii\data\ActiveDataProvider([
				'query' => $model->getTeams(),
				'pagination' => [
					'pageSize' => 20,
					'pageParam'=>'page-teams',
				]
			]),
		'pager'        => [
			'class'          => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel'  => 'Last'
		],
		'columns' => [
			[
				'class'      => 'yii\grid\ActionColumn',
				'template'   => '{view} {update}',
				'contentOptions' => ['nowrap'=>'nowrap'],
				'urlCreator' => function ($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = 'team' . '/' . $action;
					$params['Team'] = ['lead_id' => $model->primaryKey()[0]];
					return $params;
				},
				'buttons'    => [

				],
				'controller' => 'team'
			],
			'id',
			'sequence',
			'name',
			'description:ntext',
			'created_at',
			'created_by',
			'updated_at',
			'updated_by',
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
				'content' => $this->blocks['Applications'],
				'label'   => '<small>Applications <span class="badge badge-default">'.count($model->getApplications()->asArray()->all()).'</span></small>',
				'active'  => false,
			],
			[
				'content' => $this->blocks['Commitments'],
				'label'   => '<small>Commitments <span class="badge badge-default">'.count($model->getCommitments()->asArray()->all()).'</span></small>',
				'active'  => false,
			],
			[
				'content' => $this->blocks['Histories'],
				'label'   => '<small>Histories <span class="badge badge-default">'.count($model->getHistories()->asArray()->all()).'</span></small>',
				'active'  => false,
			],
			[
				'content' => $this->blocks['Profiles'],
				'label'   => '<small>Profiles <span class="badge badge-default">'.count($model->getProfiles()->asArray()->all()).'</span></small>',
				'active'  => false,
			],
			[
				'content' => $this->blocks['Teams'],
				'label'   => '<small>Teams <span class="badge badge-default">'.count($model->getTeams()->asArray()->all()).'</span></small>',
				'active'  => false,
			],
		]
	]
);
?>
</div>
