<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;

/* @var $this yii\web\View */
/* @var $model common\models\Application */
/* @var $form yii\widgets\ActiveForm */

$jobsMenu = [
	null => '',
	10 => 'Setup & Bump Out - General Setup',
	9 => 'Setup & Bump Out - Fencing',
	8 => 'Setup & Bump Out - Decor',
	3 => 'Setup & Bump Out - Bar Setup',
	6 => 'Setup & Bump Out - Children’s Festival Setup',
	4 => 'Setup & Bump Out - Bump Out',
	14 => 'Children’s Festival - Presenter',
	11 => 'Children’s Festival - Helper',
	1 => 'Hospitality - Bar Doors',
	2 => 'Hospitality - Bar Service',
	20 => 'Hospitality - Vollies Tent',
	5 => 'Around the Site - Campground',
	7 => 'Around the Site - Cleaning',
	17 => 'Around the Site - Ticket Gates',
	18 => 'Around the Site - Traffic',
	13 => 'Stages - MC',
	16 => 'Stages - Stage Manager',
	12 => 'Other - Instrument Lockup',
	15 => 'Other - Shop',
	19 => 'Other - Treasury',
	21 => 'Other - I will do anything',
	22 => 'Other - Special',
];

?>
<div class="application-form">

	<?php $form = ActiveForm::begin([
		'type'=>ActiveForm::TYPE_VERTICAL
	]); ?>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>You have entered these skills...</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="RSA" disabled>
						Responsible Service of Alcohol
					</label>
				</div><!-- / RSA -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="DL/C" checked disabled>
						Driver's Licence (car)
					</label>
				</div><!-- / DL/C -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="DL/H" checked disabled>
						Driver's Licence (LR or above)
					</label>
				</div><!-- / DL/H -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="CSE" disabled>
						Customer Service Experience
					</label>
				</div><!-- / CSE -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="OHS" checked disabled>
						OHS qualifications
					</label>
				</div><!-- / OHS -->
			</div>
		</div><!-- / Skills entered -->
	</div><!-- / Skills -->

	<?php // $form->field($model, 'user_id')->textInput() ?>

	<div class="row">
		<div class="col-md-12">
			<h4>Job Choices</h4>
			<p>Nominate up to 3 job choices. We will do our best to fit you in to one of those.</p>
		</div>
	</div><!-- / Job Choices -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 3,
			'attributes' => [
				'job_choice_1' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => $jobsMenu],
					'hint' => 'Type and select job'
				],
				'job_choice_2' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => $jobsMenu],
					'hint' => 'Type and select job'
				],
				'job_choice_3' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => $jobsMenu],
					'hint' => 'Type and select job'
				],
			]
		]);
	?>

	<div class="row">
		<div class="col-md-12">
			<h4>Volunteer Availability</h4>
			<p>Pre and post-festival shift times are listed above. Festival volunteer shifts run from Friday morning to Sunday late afternoon, including late nights.</p>
		</div>
	</div><!-- / Availability -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 12,
			'attributes' => [
				'availableFromDate' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Date available from',
						'08-30' => 'Wednesday August 30',
						'08-31' => 'Thursday August 31',
						'09-01' => 'Friday September 1',
						'09-02' => 'Saturday September 2',
						'09-03' => 'Sunday September 3',
					]],
					'columnOptions' => ['colspan' => 3],
				],
				'availableFromTime' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Time available from',
						1 => 'Early, 6:00 AM',
						2 => 'Midday, 12:00 PM',
						3 => 'Evening, 6:00 PM',
					]],
					'columnOptions' => ['colspan' => 2],
				],
				'availableToDate' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Date available to',
						'09-01' => 'Friday September 1',
						'09-02' => 'Saturday September 2',
						'09-03' => 'Sunday September 3',
						'09-04' => 'Monday September 4',
					]],
					'columnOptions' => ['colspan' => 3],
				],
				'availableToTime' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Time available to',
						2 => 'Midday, 12:00 PM',
						3 => 'Evening, 6:00 PM',
						4 => 'Late, Midnight',
					]],
					'columnOptions' => ['colspan' => 2],
				],
				'bestTIme' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => '(optional)',
						1 => 'an earlybird',
						2 => 'a nightowl',
					]],
					'columnOptions' => ['colspan' => 2],
				],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'availabilityNotes' => [
					'type' => Form::INPUT_TEXTAREA,
					'options' => ['placeholder' => 'Please tell us any times you are NOT available to work, along with anything else pertinant to your availability (optional).'
				]],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'attributes' => [
				'double' => [
					'type' => Form::INPUT_CHECKBOX,
					'label' => 'I am available to double shifts if required.',
				],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'otherNotes' => [
					'type' => Form::INPUT_TEXTAREA,
					'options' => ['placeholder' => 'Here\'s where you give other comments or information that you think helpful to your application (optional).'
				]],
			]
		]);
	?>

	<div class="row">
		<div class="col-md-12">
			<h4>Referee (optional)</h4>
			<p>For some job giving a referee can be helpful.</p>
		</div>
	</div><!-- / Referee -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 12,
			'attributes' => [
				'referee' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Referee Name'],
					'columnOptions' => ['colspan' => 4],
				],
				'refereeRelationship' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Referee Relationship'],
					'columnOptions' => ['colspan' => 5],
				],
				'refereePhone' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => '04xx xxx xxx or 0x xxxx xxxx'],
					'columnOptions' => ['colspan' => 3],
				],
			]
		]);
	?>

	<div class="row">
		<div class="col-md-12"><br></div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<p>Once you're happy with everything above, go ahead and...</p>
		</div><!-- / Check -->
		<div class="col-md-4">
			<div class="form-group">
				<?= Html::submitButton(
					$model->isNewRecord ? 'Submit Your Application' : 'Update Your Application',
					['class' => $model->isNewRecord ? 'btn btn-success btn-lg btn-block' : 'btn btn-primary btn-lg btn-block']
				) ?>
			</div>
		</div><!-- / Submit -->
	</div>

	<?php ActiveForm::end(); ?>

</div>
