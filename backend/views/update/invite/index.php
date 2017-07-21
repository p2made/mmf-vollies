<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\InviteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-lg-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
						<strong>business casual</strong>
					</h2>
				<hr>
			</div>
			<div class="col-md-12">
<div class="invite-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Invite', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Send Invite', ['send'], ['class' => 'btn btn-success']) ?>
	</p>
<?php Pjax::begin(); ?>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'email:email',
			'name',
			'password',
			'role',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
<?php Pjax::end(); ?>
</div>
			</div>
		</div>

	</div>
</div>
