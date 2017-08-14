<?php
/**
 * _update.php
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
use kartik\builder\FormGrid;
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
<div class="commitment-form">

	<div class="row">
		<div class="col-md-12">
			<?= DetailView::widget([
				'model' => $model,
				'panel' => [
					'heading' => 'Commitment Info',
					'headingOptions' => ['template' => '{title}'],
					'type' => 'default',
				],
				'labelColOptions' => ['style' => 'width:10%', 'class' => 'text-right'],
				'attributes' => [
					[
						'columns' => [
							[
								'attribute' => 'year',
								'labelColOptions' => ['style' => 'width:5%', 'class' => 'text-right'],
								'valueColOptions' => ['style' => 'width:5%'],
								'displayOnly' => true,
							],
							[
								'attribute' => 'teamName',
								'valueColOptions' => ['style' => 'width:35%'],
								'displayOnly' => true,
							],
							[
								'attribute' => 'jobName',
								'valueColOptions' => ['style' => 'width:35%'],
								'displayOnly' => true,
							],
						],
					],
				],
				'mode' => 'view',
				'condensed' => true,
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]); ?>
			<?= Form::widget([
				'model' => $model, 'form' => $form,
				'attributes' => [
					'notes' => [
						'type' => Form::INPUT_TEXTAREA,
					],
				],
			]) ?>
			<?= Form::widget([
				'model' => $model, 'form' => $form,
				'columns' => 12,
				'attributes' => [
					'rostered' => [
						'type' => Form::INPUT_RADIO_LIST,
						'items' => [0 => 'No', 1 => 'Yes'],
						 'options' => ['inline' =>true],
						 'columnOptions' => ['colspan' => 2],
					],
					'job_id' => [
						'type' => Form::INPUT_WIDGET,
						'widgetClass' => '\kartik\widgets\Select2',
						'label' => 'Change Assignment',
						'options' => ['data' => $model->responseMenu],
						 'columnOptions' => ['colspan' => 3],
					],
				],
			]) ?>
			<?= Form::widget([
				'model' => $model, 'form' => $form,
				'attributes' => [
					'report' => [
						'type' => Form::INPUT_TEXTAREA,
					],
				],
			]) ?>
			<?= Form::widget([
				'model' => $model, 'form' => $form,
				'columns' => 12,
				'attributes' => [
					'hours' => [
						'type' => Form::INPUT_TEXT,
						 'columnOptions' => ['colspan' => 1],
					],
					'reinvite' => [
						'type' => Form::INPUT_RADIO_LIST,
						'items' => [0 => 'No', 1 => 'Yes'],
						 'options' => ['inline' =>true],
						 'columnOptions' => ['colspan' => 2],
					],
				],
			]) ?>
			<?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
<?php

/**
 */

/* @var $this yii\web\View */
/* @var $model       backend\models\Commitment */
/* @var $profile     backend\models\Profile */
/* @var $application backend\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

