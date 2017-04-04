<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package mmf-vollies
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Blank Page';
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">


		</div>
	</div>

	<!-- /### NOTE ### -->

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>

</div><!-- /#content-wrapper -->


<!-- ##### ^ ##### ^ MARKER / SEPARATOR ^ ##### ^ ##### -->


<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var amnah\yii2\user\Module $module
 * @var amnah\yii2\user\models\search\UserSearch $searchModel
 * @var amnah\yii2\user\models\User $user
 * @var amnah\yii2\user\models\Role $role
 */

$module = $this->context->module;
$user = $module->model("User");
$role = $module->model("Role");

$this->title = Yii::t('user', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a(Yii::t('user', 'Create {modelClass}', [
		  'modelClass' => 'User',
		]), ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php \yii\widgets\Pjax::begin(); ?>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			[
				'attribute' => 'role_id',
				'label' => Yii::t('user', 'Role'),
				'filter' => $role::dropdown(),
				'value' => function($model, $index, $dataColumn) use ($role) {
					$roleDropdown = $role::dropdown();
					return $roleDropdown[$model->role_id];
				},
			],
			[
				'attribute' => 'status',
				'label' => Yii::t('user', 'Status'),
				'filter' => $user::statusDropdown(),
				'value' => function($model, $index, $dataColumn) use ($user) {
					$statusDropdown = $user::statusDropdown();
					return $statusDropdown[$model->status];
				},
			],
			'email:email',
			'profile.full_name',
			'profile.timezone',
			'created_at',
			// 'username',
			// 'password',
			// 'auth_key',
			// 'access_token',
			// 'logged_in_ip',
			// 'logged_in_at',
			// 'created_ip',
			// 'updated_at',
			// 'banned_at',
			// 'banned_reason',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
	<?php \yii\widgets\Pjax::end(); ?>

</div>
