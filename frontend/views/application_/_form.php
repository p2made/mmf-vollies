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
	</div>

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
				'job_choice_1' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
					]],
					'hint' => 'Date are you available from'
					'columnOptions' => ['colspan' => 3],
				],
				'job_choice_1' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
					]],
					'hint' => 'Time are you available from'
					'columnOptions' => ['colspan' => 2],
				],
				'job_choice_1' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
					]],
					'hint' => 'Date are you available to'
					'columnOptions' => ['colspan' => 3],
				],
				'job_choice_1' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
					]],
					'hint' => 'Time are you available to'
					'columnOptions' => ['colspan' => 2],
				],
				'job_choice_1' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
					]],
					'hint' => 'Your best time of day'
					'columnOptions' => ['colspan' => 2],
				],
			]
		]);
	?>

					<div class="col-md-3">
						<div class="form-group">
							<label for="availableFromDate">Date available from <span>*</span></label>
							<select class="form-control" id="availableFromDate">
								<option selected disabled>Select...</option>
								<option value="08-30">Wednesday August 30</option>
								<option value="08-31">Thursday August 31</option>
								<option value="09-01">Friday September 1</option>
								<option value="09-02">Saturday September 2</option>
								<option value="09-03">Sunday September 3</option>
								<option value="09-04">Monday September 4</option>
								<option value="09-05">Tuesday September 5</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="availableFromTime">From time <span>*</span></label>
							<select class="form-control" id="availableFromTime">
								<option selected disabled>Select...</option>
								<option value="Early">Early, 6:00 AM</option>
								<option value="Midday">Midday, 12:00 PM</option>
								<option value="Evening">Evening, 6:00 PM</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="availableToDate">Date available to <span>*</span></label>
							<select class="form-control" id="availableToDate">
								<option selected disabled>Select...</option>
								<option value="08-30">Wednesday August 30</option>
								<option value="08-31">Thursday August 31</option>
								<option value="09-01">Friday September 1</option>
								<option value="09-02">Saturday September 2</option>
								<option value="09-03">Sunday September 3</option>
								<option value="09-04">Monday September 4</option>
								<option value="09-05">Tuesday September 5</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="availableToTime">To time <span>*</span></label>
							<select class="form-control" id="availableToTime">
								<option selected disabled>Select...</option>
								<option value="Midday">Midday, 12:00 PM</option>
								<option value="Evening">Evening, 6:00 PM</option>
								<option value="Late">Late, 12:00 AM</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="availableFromTime">I am...</label>
							<select class="form-control" id="availableFromTime">
								<option selected disabled>Select...</option>
								<option value="earlybird">an earlybird</option>
								<option value="nightowl">a nightowl</option>
							</select>
						</div>
					</div>




	<?= $form->field($model, 'availableFromDate')->textInput() ?>
	<?= $form->field($model, 'availableFromTime')->textInput() ?>
	<?= $form->field($model, 'availableToDate')->textInput() ?>
	<?= $form->field($model, 'availableToTime')->textInput() ?>
	<?= $form->field($model, 'availabilityNotes')->textarea(['rows' => 6]) ?>
	<?= $form->field($model, 'double')->textInput() ?>
	<?= $form->field($model, 'otherNotes')->textarea(['rows' => 6]) ?>
	<?= $form->field($model, 'referee')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'refereeRelationship')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'refereePhone')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'created_at')->textInput() ?>
	<?= $form->field($model, 'created_by')->textInput() ?>
	<?= $form->field($model, 'updated_at')->textInput() ?>
	<?= $form->field($model, 'updated_by')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>

	<?php
	?>
	<?php
	?>
	<?php  ?>
	<?php  ?>
	<?php  ?>
