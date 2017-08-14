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
					'heading' => 'Zerp Info',
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
		<!-- <div class="col-md-4 col-md-offset-8"> -->

			<div class="panel panel-primary">
				<div class="panel-body">
					<?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); ?>
					<div class="row">

						<div class="col-md-12">
							<?php echo FormGrid::widget([
								'model' => $model, 'form' => $form,
								'autoGenerateColumns' => true,
								'rows' => [
									[
										'columns' => 4,
										'attributes' => [
											'user_id' => ['type' => Form::INPUT_TEXT],
											'application_id' => ['type' => Form::INPUT_TEXT],
											'job_id' => ['type' => Form::INPUT_TEXT],
											'jobName' => ['type' => Form::INPUT_TEXT],
										],
									],
									[
										'columns' => 4,
										'attributes' => [
											'year' => ['type' => Form::INPUT_TEXT],
											'hours' => ['type' => Form::INPUT_TEXT],
											'report' => ['type' => Form::INPUT_TEXT],
											'reinvite' => ['type' => Form::INPUT_TEXT],
										],
									],
									[
										'columns' => 4,
										'attributes' => [
											'jobName' => ['type' => Form::INPUT_TEXT],
											'hours' => ['type' => Form::INPUT_TEXT],
											'report' => ['type' => Form::INPUT_TEXT],
											'reinvite' => ['type' => Form::INPUT_TEXT],
										],
									],
								],
							]) ?>

							<?= Html::submitButton('Assign', ['class' => 'btn btn-success']) ?>
						</div>

					</div>

					<?php ActiveForm::end(); ?>
				</div>
			</div>

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





<?php

use kartik\widgets\ActiveForm;
use kartik\builder\Form;
$form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL, 'formConfig' => ['labelSpan' => 4]]);
echo Form::widget([
	'model' => $model,
	'form' => $form,
	'columns' => 1,
	'attributes' => [
		'address_detail' => [  // complex nesting of attributes along with labelSpan and colspan
			'label' => 'Address',
			'labelSpan' => 2,
			'columns' => 6,
			'attributes' => [
				'address' => [
					'type' => Form::INPUT_HIDDEN_STATIC,
					'options' => ['placeholder' => 'Enter address...'],
					'columnOptions' => ['colspan' => 3],
				],
				'phone' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Phone...'],
					'columnOptions' => ['colspan' => 2],
				],
				'zip_code' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Zip...']
				],
			]
		]
	]
]);
echo Form::widget([ // fields with labels
	'model' => $model,
	'form' => $form,
	'columns' => 2,
	'attributes' => [
		'state_1' => ['label' => 'Province 1', 'options' => ['placeholder' => 'Province 1...']],
		'state_1a' => ['label' => 'Province 2', 'options' => ['placeholder' => 'Province 2...']],
	]
]);
echo Form::widget([ // continuation fields to row above without labels
	'model' => $model,
	'form' => $form,
	'columns' => 2,
	'attributes' => [
		'state_2' => ['label' => '', 'options' => ['placeholder' => 'Province 1 Description...']],
		'state_3' => ['label' => '', 'options' => ['placeholder' => 'Province 2 Description...']],
	]
]);
echo Form::widget([ // hide label and extend input to full width
	'model' => $model,
	'form' => $form,
	'columns' => 1,
	'attributes' => [
		'website' => ['label' => false, 'options' => ['placeholder' => 'Enter website (this input fills the width when label is set to false)...']],
	]
]);
echo '<div class="text-right">' . Html::resetButton('Reset', ['class' => 'btn btn-default']) . '</div>';
ActiveForm::end();
