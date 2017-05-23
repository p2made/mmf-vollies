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

$user = \Yii::$app->user->identity;

$userProfile = $user->profile;
$rsa = [$userProfile->rsa, 'Responsible Service of Alcohol'];
$dl_c = [$userProfile->dl_c, 'Driver\'s Licence (car)'];
$dl_h = [$userProfile->dl_h, 'Driver\'s Licence (LR or above)'];
$cse = [$userProfile->cse, 'Customer Service Experience'];
$ohs = [$userProfile->ohs, 'OHS qualifications'];
$bc = [$userProfile->bc, 'Blue Card (working with children)'];
$skillsCheck = '<input type="checkbox" value="DL/C" disabled';

$pastJobs = $user->pastJobs();

?>
<div class="application-form">

	<?php $form = ActiveForm::begin([
		'type'=>ActiveForm::TYPE_VERTICAL
	]); ?>

	<div class="row">
		<div class="col-md-12">
			<label>You have entered these skills...</label>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<div class="checkbox">
					<label>
						<?= $skillsCheck . ($rsa[0] == 1 ? ' checked' : '') . '>' ?>
						<?= $rsa[1] ?>
					</label>
				</div>
				<div class="checkbox">
					<label>
						<?= $skillsCheck . ($dl_c[0] == 1 ? ' checked' : '') . '>' ?>
						<?= $dl_c[1] ?>
					</label>
				</div>
				<div class="checkbox">
					<label>
						<?= $skillsCheck . ($dl_h[0] == 1 ? ' checked' : '') . '>' ?>
						<?= $dl_h[1] ?>
					</label>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<div class="checkbox">
					<label>
						<?= $skillsCheck . ($cse[0] == 1 ? ' checked' : '') . '>' ?>
						<?= $cse[1] ?>
					</label>
				</div>
				<div class="checkbox">
					<label>
						<?= $skillsCheck . ($ohs[0] == 1 ? ' checked' : '') . '>' ?>
						<?= $ohs[1] ?>
					</label>
				</div>
				<div class="checkbox">
					<label>
						<?= $skillsCheck . ($bc[0] == 1 ? ' checked' : '') . '>' ?>
						<?= $bc[1] ?>
					</label>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<label><?= $user->pastJobs() ?></label>
		</div>
	</div><!-- / Skills entered -->

	<?php // $form->field($model, 'user_id')->textInput() ?>

	<div class="row">
		<div class="col-md-12">
			<h4>Job Choices</h4>
			<p>Nominate up to 3 job choices. We will do our best to fit you in to one of those.</p>
			<p>Choices are in six groupings...</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Setup &amp; Bump Out</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>General Setup</li>
						<li>Fencing</li>
						<li>Decor</li>
						<li>Bar Setup</li>
						<li>Children’s Festival Setup</li>
						<li>Bump Out</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Children’s Festival title</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>Presenter</li>
						<li>Helper</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Hospitality</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>Bar Doors</li>
						<li>Bar Service</li>
						<li>Vollies Tent</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Around the Site</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>Campground</li>
						<li>Cleaning</li>
						<li>Ticket Gates</li>
						<li>Traffic</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Stages</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>MC</li>
						<li>Stage Manager</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Other</h3>
				</div>
				<div class="panel-body">
					<ul>
						<li>Instrument Lockup</li>
						<li>Shop</li>
						<li>Treasury</li>
						<li>I will do anything</li>
						<li>Special (<strong>only</strong> select if you've been asked to apply for a specific job)</li>
					</ul>
				</div>
			</div>
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
			<p>Pre-festival is from Wednesday August 30 to Friday September 1. Post-festival is afternoon of Sunday September 3 &amp; all day Monday September 4. Festival volunteer shifts run from Friday morning to Sunday late afternoon, including late nights.</p>
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
			<p>If applying for Shop, Treasury, or Ticket Gates, please provide a referee. Otherwise optional.</p>
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
		<div class="col-md-9">
			<p>Once you're happy with everything above, go ahead and...</p>
		</div><!-- / Check -->
		<div class="col-md-3">
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
