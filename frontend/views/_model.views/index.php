<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CommitmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Commitments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center"><?= Html::encode($this->title) ?></h2>
				<hr>
			</div>

<div class="commitment-index">

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Commitment', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'profile_id',
			'application_id',
			'team_id',
			'year',
			// 'job',
			// 'hours',
			// 'report:ntext',
			// 'reinvite',
			// 'created_at',
			// 'created_by',
			// 'updated_at',
			// 'updated_by',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>

		</div>
	</div>

</div>
