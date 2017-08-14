<?php
/**
 * _application.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use p2m\helpers\FA;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property integer $job_id
 * @property string $jobName
 * @property string $year
 * @property integer $rostered
 * @property string $notes
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \backend\models\Application $application
 * @property \backend\models\Job $job
 * @property \backend\models\Profile $user
 * @property \backend\models\Team $team
 * @property string $aliasModel
 *
 * @property string $vollieName;
 * @property string $preferredName;
 * @property string $phone1;
 * @property string $phone2;
 * @property string $teamName;
 */

/* @var $this yii\web\View */
/* @var $model       backend\models\Commitment */
/* @var $profile     backend\models\Profile */
/* @var $application backend\models\Application */
/* @var $form yii\widgets\ActiveForm */

$boolIcon = [
	0 => '<div class="text-danger">' . FA::fw('close') . '</div>',
	1 => '<div class="text-success">' . FA::fw('check') . '</div>',
];
$emptyCol = ['label' => '', 'value' => ''];
?>
<div class="row">
	<div class="col-md-12">
		<?= DetailView::widget([
			'model' => $profile,
			'panel' => [
				'heading' => 'Vollie Info',
				'headingOptions' => ['template' => '{title}'],
				'type' => 'default',
			],
			'labelColOptions' => ['style' => 'width:10%', 'class' => 'text-right'],
			'attributes' => [
				[
					'columns' => [
						[
							'attribute' => 'vollieName',
							'valueColOptions' => ['style' => 'width:25%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'preferredName',
							'valueColOptions' => ['style' => 'width:15%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'phone1',
							'valueColOptions' => ['style' => 'width:10%'],
							'displayOnly' => true,
						],
						[
							'attribute' => 'phone2',
							'valueColOptions' => ['style' => 'width:10%'],
							'displayOnly' => true,
						],
					],
				],
				[
					'columns' => [
						[
							'attribute' => 'email',
							'labelColOptions' => ['style' => 'width:70%', 'class' => 'text-right'],
							'valueColOptions' => ['style' => 'width:30%'],
							'displayOnly' => true,
						],
					],
				],
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>
	</div>
</div><!-- / Application -->

<div class="row">
	<div class="col-md-6">
		<?= DetailView::widget([
			'model' => $profile,
			'panel' => [
				'heading' => 'Useful Attributes',
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
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>
	</div>
	<div class="col-md-6">
		<?= DetailView::widget([
			'model' => $profile,
			'panel' => [
				'heading' => 'Experience',
				'headingOptions' => ['template' => '{title}'],
				'type' => 'default',
			],
			'labelColOptions' => ['style' => 'width:40%', 'class' => 'text-right'],
			'valueColOptions' => ['style' => 'width:10%', 'class' => 'text-center'],
			'attributes' => [
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

<div class="row">
	<div class="col-md-3">
		<?= DetailView::widget([
			'model' => $application,
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
			'model' => $application,
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
							'value' => $application->double ? $boolIcon[1] : $boolIcon[0],
							'displayOnly' => true,
						],
					],
				],
			],
			'mode' => 'view',
			'condensed' => true,
		]) ?>
		<?= DetailView::widget([
			'model' => $application,
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
