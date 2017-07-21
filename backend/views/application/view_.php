<?php
/**
 * __blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;
use yii\widgets\DetailView;
use kartik\detail\DetailView

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $model	  common\models\Application */
/* @var $profile	common\models\Profile */
/* @var $commitment common\models\Commitment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">

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
			'year',
			'availableFromDate',
			'availableFromTime:datetime',
			'availableToDate',
			'availableToTime:datetime',
			'bestTime:datetime',
			'availabilityNotes:ntext',
			'double',
			'otherNotes:ntext',
			'referee',
			'refereeRelationship',
			'refereePhone',
			'bestCallingTime',
			'status',
			'team_id',
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
</div><!-- /#content-wrapper -->
