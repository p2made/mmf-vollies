<?php
/**
 * _blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Application */

common\assets\VolliesFormsAsset::register($this);

$user = \Yii::$app->user->identity;
$profile = $user->profile;
$prefName = $profile->preferredName;


$this->title = 'Thank You ' . $prefName . '!';
//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-md-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
					</h2>
				<hr>
			</div>
			<div class="col-md-12">

				<p>Your volunteer application for Maleny Music Festival 2017 is complete.</p>

				<?= DetailView::widget([
					'model' => $model,
					'attributes' => [
						'id',
						'user_id',
						'job_choice_1',
						'job_choice_2',
						'job_choice_3',
						'year',
						'availableFromDate',
						'availableFromTime:datetime',
						'availableToDate',
						'availableToTime:datetime',
						'bestTIme:datetime',
						'availabilityNotes:ntext',
						'double',
						'otherNotes:ntext',
						'referee',
						'refereeRelationship',
						'refereePhone',
						'bestCallingTime',
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

			</div>
		</div>

	</div>
</div>
