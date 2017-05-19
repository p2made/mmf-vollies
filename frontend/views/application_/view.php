<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $model common\models\Application */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center">Application - <?= Html::encode($this->title) ?></h2>
				<hr>
			</div>

			<div class="application-view">

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
						'user_id',
						'job_choice_1',
						'job_choice_2',
						'job_choice_3',
						'availableFromDate',
						'availableFromTime:datetime',
						'availableToDate',
						'availableToTime:datetime',
						'availabilityNotes:ntext',
						'double',
						'otherNotes:ntext',
						'referee',
						'refereeRelationship',
						'refereePhone',
						'accepted',
						'team_id',
						'rejected',
						'rejectedReason:ntext',
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
