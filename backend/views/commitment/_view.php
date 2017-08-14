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
	<div class="col-md-12">
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
