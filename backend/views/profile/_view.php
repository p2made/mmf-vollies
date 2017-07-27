<?php
/**
 * _view.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use kartik\detail\DetailView;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Profile */

$booLabelOpts = ['style' => 'width:28%', 'class' => 'text-right'];
$booValueOpts = ['style' => 'width:5%', 'class' => 'text-center'];
?>
<div class="profile-view">

	<?= DetailView::widget([
		'model' => $model,
		'panel' => [
			'heading' => 'Volunteer Information',
			'type' => 'primary',
		],
		'labelColOptions' => ['class' => 'text-right'],
		'attributes' => [
			[
				'columns' => [
					[
						'attribute' => 'givenName',
						'labelColOptions' => ['style' => 'width:15%'],
						'valueColOptions' => ['style' => 'width:15%'],
					],
					[
						'attribute' => 'familyName',
						'labelColOptions' => ['style' => 'width:15%'],
						'valueColOptions' => ['style' => 'width:15%'],
					],
					[
						'attribute' => 'preferredName',
						'labelColOptions' => ['style' => 'width:15%'],
					],
				],
			],
			[
				'columns' => [
					[
						'attribute' => 'phone1',
						'labelColOptions' => ['style' => 'width:15%'],
						'valueColOptions' => ['style' => 'width:15%'],
					],
					[
						'attribute' => 'phone2',
						'labelColOptions' => ['style' => 'width:15%'],
						'valueColOptions' => ['style' => 'width:15%'],
					],
					[
						'attribute' => 'email',
						'labelColOptions' => ['style' => 'width:15%'],
						'displayOnly' => true,
					],
				],
			],
			[
				'attribute' => 'address1',
				'labelColOptions' => ['style' => 'width:15%'],
			],
			[
				'attribute' => 'address2',
				'labelColOptions' => ['style' => 'width:15%'],
			],
			[
				'columns' => [
					[
						'attribute' => 'locality',
						'labelColOptions' => ['style' => 'width:15%'],
						'valueColOptions' => ['style' => 'width:25%'],
					],
					[
						'attribute' => 'state',
						'labelColOptions' => ['style' => 'width:5%'],
						'valueColOptions' => ['style' => 'width:5%'],
					],
					[
						'attribute' => 'postcode',
						'labelColOptions' => ['style' => 'width:5%'],
						'valueColOptions' => ['style' => 'width:5%'],
					],
					[
						'attribute' => 'country',
						'labelColOptions' => ['style' => 'width:15%'],
					],
				],
			],
			[
				'columns' => [
					[
						'attribute' => 'emergencyContact',
						'labelColOptions' => ['style' => 'width:15%'],
						'valueColOptions' => ['style' => 'width:25%'],
					],
					[
						'attribute' => 'emergencyPhone1',
						'labelColOptions' => ['style' => 'width:15%'],
						'valueColOptions' => ['style' => 'width:15%'],
					],
					[
						'attribute' => 'emergencyPhone2',
						'labelColOptions' => ['style' => 'width:15%'],
					],
				],
			],
			[
				'group'=>true,
				'label'=>'Useful Skills',
				'rowOptions'=>['class'=>'info']
			],
			[
				'columns' => [
					[
						'attribute' => 'rsa', 'format' => 'raw',
						'value' => $model->rsa
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'attribute' => 'dl_c', 'format' => 'raw',
						'value' => $model->dl_c
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'attribute' => 'dl_h', 'format' => 'raw',
						'value' => $model->dl_h
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
				],
			],
			[
				'columns' => [
					[
						'attribute' => 'cse', 'format' => 'raw',
						'displayOnly' => true,
						'value' => $model->cse
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'attribute' => 'ohs', 'format' => 'raw',
						'value' => $model->ohs
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'attribute' => 'bc', 'format' => 'raw',
						'value' => $model->bc
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
				],
			],
			[
				'columns' => [
					[
						'attribute' => 'fa', 'format' => 'raw',
						'value' => $model->fa
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'label' => '', 'value' => '',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'label' => '', 'value' => '',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
				],
			],
			[
				'group'=>true,
				'label'=>'Experience',
				'rowOptions'=>['class'=>'info']
			],
			[
				'columns' => [
					[
						'attribute' => 'vol', 'format' => 'raw',
						'displayOnly' => true,
						'value' => $model->vol
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'attribute' => 'mmfVol', 'format' => 'raw',
						'value' => $model->mmfVol
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
					[
						'attribute' => 'mmfAtt', 'format' => 'raw',
						'value' => $model->mmfAtt
							? '<span class="label label-success">Yes</span>'
							: '<span class="label label-danger">No</span>',
						'labelColOptions' => $booLabelOpts, 'valueColOptions' => $booValueOpts,
					],
				],
			],
		],


		'hAlign' => 'right',
		'vAlign' => 'middle',
		'mode' => 'view',
		//'condensed' => true,
	]) ?>

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
		<?php /* Html::a('Delete', ['delete', 'id' => $model->user_id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) */ ?>
	</p>

</div>
