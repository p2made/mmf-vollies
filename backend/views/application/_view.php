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
use kartik\grid\GridView;
use p2m\helpers\FA;

$attrModel = array();
$boolIcon = [
	0 => '<div class="text-danger">' . FA::fw('close') . '</div>',
	1 => '<div class="text-success">' . FA::fw('check') . '</div>',
];
$emptyCol = ['label' => '', 'value' => ''];
?>
<div class="row">
	<div class="col-md-3">
		<?= DetailView::widget([
			'model' => $model,
			'panel' => [
				'heading' => 'Preferred Jobs',
				'headingOptions' => ['template' => '{title}'],
				'type' => 'default',
			],
			'labelColOptions' => ['style' => 'width:10%', 'class' => 'text-right'],
			'attributes' => [
				[
					'attribute' => 'jobPreference1',
					'label' => '1',
					'displayOnly' => true,
				],
				[
					'attribute' => 'jobPreference2',
					'label' => '2',
					'displayOnly' => true,
				],
				[
					'attribute' => 'jobPreference3',
					'label' => '3',
					'displayOnly' => true,
				],
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>
	</div>
	<div class="col-md-9">
		<?= DetailView::widget([
			'model' => $model,
			'panel' => [
				'heading' => 'Availability',
				'headingOptions' => ['template' => '{title}'],
				'type' => 'default',
			],
			'labelColOptions' => ['style' => 'width:15%', 'class' => 'text-right'],
			'attributes' => [
				[
					'columns' => [
						[
							'attribute' => 'availableFrom',
							'valueColOptions' => ['style' => 'width:25%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'availableTo',
							'valueColOptions' => ['style' => 'width:25%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'earlyLate',
							'valueColOptions' => ['style' => 'width:5%'],
							'displayOnly' => true,
						],
					],
				],
				[
					'columns' => [
						[
							'attribute' => 'availabilityNotes',
							'valueColOptions' => ['style' => 'width:65%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'double',
							'format' => 'raw',
							'valueColOptions' => ['style' => 'width:5%', 'class' => 'text-center'],
							'label' => 'Double Shift',
							'value' => $model->double ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
					],
				],
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>
		<?= DetailView::widget([
			'model' => $model,
			'panel' => [
				'heading' => 'Other Info',
				'headingOptions' => ['template' => '{title}'],
				'type' => 'default',
			],
			'labelColOptions' => ['style' => 'width:10%', 'class' => 'text-right'],
			'attributes' => [
				[
					'columns' => [
						[
							'attribute' => 'referee',
							'valueColOptions' => ['style' => 'width:23%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'refereeRelationship',
							'label' => 'Relationship',
							'valueColOptions' => ['style' => 'width:24%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'refereePhone',
							'label' => 'Phone',
							'valueColOptions' => ['style' => 'width:23%'],
							'displayOnly' => true,
						],
					],
				],
				[
					'attribute' => 'otherNotes',
					'valueColOptions' => ['style' => 'width:90%'],
					'displayOnly' => true,
				],
				[
					'attribute' => 'bestCallingTime',
					'labelColOptions' => ['style' => 'width:15%', 'class' => 'text-right'],
					'valueColOptions' => ['style' => 'width:85%'],
					'displayOnly' => true,
				],
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>
	</div>
</div><!-- / Application -->

<div class="row">
	<div class="col-md-12">
		<h3>Volunteer Info</h3>
	</div>
	<div class="col-md-5">
		<?= DetailView::widget([
			'model' => $profile,
			'panel' => [
				'heading' => 'Contact Details',
				'headingOptions' => ['template' => '{title}'],
				'type' => 'default',
			],
			'labelColOptions' => ['style' => 'width:35%', 'class' => 'text-right'],
			'attributes' => [
				[
					'attribute' => 'phone1',
					'displayOnly' => true,
				],
				[
					'attribute' => 'phone2',
					'displayOnly' => true,
				],
				[
					'attribute' => 'email',
					'displayOnly' => true,
				],
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>

		<?php if ($commitments): ?>
		<?php endif ?>

	</div>
	<div class="col-md-7">
		<?= DetailView::widget([
			'model' => $profile,
			'panel' => [
				'heading' => 'Experience & Useful Attributes',
				'headingOptions' => ['template' => '{title}'],
				'type' => 'default',
			],
			'labelColOptions' => ['style' => 'width:40%', 'class' => 'text-right'],
			'valueColOptions' => ['style' => 'width:10%', 'class' => 'text-center'],
			'attributes' => [
				[
					'columns' => [
						[
							'attribute' => 'rsa',
							'format' => 'raw',
							'value' => $profile->rsa ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
						[
							'attribute' => 'dl_c',
							'format' => 'raw',
							'value' => $profile->dl_c ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
					],
				],
				[
					'columns' => [
						[
							'attribute' => 'dl_h',
							'format' => 'raw',
							'value' => $profile->dl_h ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
						[
							'attribute' => 'cse',
							'format' => 'raw',
							'value' => $profile->cse ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
					],
				],
				[
					'columns' => [
						[
							'attribute' => 'ohs',
							'format' => 'raw',
							'value' => $profile->ohs ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
						[
							'attribute' => 'bc',
							'format' => 'raw',
							'value' => $profile->bc ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
					],
				],
				[
					'columns' => [
						[
							'attribute' => 'fa',
							'format' => 'raw',
							'value' => $profile->fa ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
						$emptyCol,
					],
				],
				[
					'columns' => [
						[
							'attribute' => 'vol',
							'format' => 'raw',
							'label' => 'Has volunteered before',
							'value' => $profile->vol ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
						[
							'attribute' => 'mmfVol',
							'format' => 'raw',
							'label' => 'Has volunteered at MMF',
							'value' => $profile->mmfVol ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
					],
				],
				[
					'columns' => [
						[
							'attribute' => 'mmfAtt',
							'format' => 'raw',
							'label' => 'Has attended MMF',
							'value' => $profile->mmfAtt ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
						$emptyCol,
					],
				],
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>
	</div>
</div><!-- / Volunteer Info -->
