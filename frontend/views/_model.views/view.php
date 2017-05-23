<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $model common\models\Commitment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Commitments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center">Commitment - <?= Html::encode($this->title) ?></h2>
				<hr>
			</div>

<div class="commitment-view">

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'profile_id',
			'application_id',
			'team_id',
			'year',
			'job',
			'hours',
			'report:ntext',
			'reinvite',
			'created_at',
			'created_by',
			'updated_at',
			'updated_by',
		],
	]) ?>

</div>

		</div>
	</div>

</div>
