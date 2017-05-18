<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */

$checkboxOptions = [
	'options' => ['tag' => false],
	'template' => '<div class=\'checkbox\'>{input}</div>'
];

?>

<div class="profile-form">

	<?php if ($flash = Yii::$app->session->getFlash("Profile-success")): ?>

		<div class="alert alert-success">
			<p><?= $flash ?></p>
		</div>

	<?php endif; ?>

	<?php $form = ActiveForm::begin([
		'id' => 'profile-form',
		'enableAjaxValidation' => true,
	]); ?>

	<div class="row">
		<div class="col-md-12">
			<h4>Personal Details</h4>
		</div>
	</div><!-- / Personal Details -->
	<div class="row">
		<div class="col-md-4">
			<?= $form->field($model, 'givenName')->textInput(['maxlength' => true])->hint('<strong>Legal</strong> given name.') ?>
		</div><!-- / Given Name -->
		<div class="col-md-4">
			<?= $form->field($model, 'familyName')->textInput(['maxlength' => true])->hint('<strong>Legal</strong> family name.') ?>
		</div><!-- / Family Name -->
		<div class="col-md-4">
			<?= $form->field($model, 'preferredName')->textInput(['maxlength' => true])->hint('What you prefer to be called (optional)') ?>
		</div><!-- / Preferred Name -->
	</div><!-- / Name Fields -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="emailAddress">Email Address</label>
				<input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
			</div>
		</div><!-- / Email Address -->
		<div class="col-md-3">
			<?= $form->field($model, 'phone1')->textInput(['maxlength' => true])->label('Primary Phone')->hint('Best if this is a mobile that you will have with you at the festival.') ?>
		</div><!-- / Primary Phone -->
		<div class="col-md-3">
			<?= $form->field($model, 'phone2')->textInput(['maxlength' => true])->label('Secondary Phone')->hint('An alternate number that we can contact you on (optional).') ?>
		</div><!-- / Secondary Phone -->
	</div><!-- / Email & Phone Numbers -->
	<div class="row">
		<div class="col-md-8">
			<?= $form->field($model, 'address1')->textInput(['maxlength' => true]) ?>
		</div><!-- / Address Line 1 -->
		<div class="col-md-8">
			<?= $form->field($model, 'address2')->textInput(['maxlength' => true])->label(false) ?>
		</div><!-- / Address Line 2 -->
	</div><!-- / Address Fields 0 -->
	<div class="row">
		<div class="col-md-4">
			<?= $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>
		</div><!-- / Locality -->
		<div class="col-md-2">
			<?= $form->field($model, 'state')->dropDownList([
				'ACT' => 'ACT',
				'NSW' => 'NSW',
				'NT' => 'NT',
				'Qld' => 'Qld',
				'SA' => 'SA',
				'Tas' => 'Tas',
				'Vic' => 'Vic',
				'WA' => 'WA',
				'International' => 'International',
			], ['Qld' => ['selected' => true]]) ?>
		</div><!-- / State -->
		<div class="col-md-2">
			<?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>
		</div><!-- / Postcode -->
		<div class="col-md-4">
			<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
		</div><!-- / Country -->
	</div><!-- / Address Fields 1 -->

	<div class="row">
		<div class="col-md-12">
			<h4>Emergency Contact</h4>
		</div>
	</div><!-- / Emergency Contact -->
	<div class="row">
		<div class="col-md-6">
			<?= $form->field($model, 'emergencyContact')->textInput(['maxlength' => true]) ?>
		</div><!-- / Emergency Contact Name -->
		<div class="col-md-3">
			<?= $form->field($model, 'emergencyPhone1')->textInput(['maxlength' => true]) ?>
		</div><!-- / EC Primary Phone -->
		<div class="col-md-3">
			<?= $form->field($model, 'emergencyPhone2')->textInput(['maxlength' => true]) ?>
		</div><!-- / EC Secondary Phone -->
	</div><!-- / Emergency Contact -->

	<div class="row">
		<div class="col-md-12">
			<h4>Skills &amp; Experience</h4>
		</div>
	</div><!-- / Skills & Experience -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Useful Skills</label>
				<?= $form->field($model, 'rsa', $checkboxOptions)->checkbox() ?>
				<?= $form->field($model, 'dl_c', $checkboxOptions)->checkbox() ?>
				<?= $form->field($model, 'dl_h', $checkboxOptions)->checkbox() ?>
				<?= $form->field($model, 'cse', $checkboxOptions)->checkbox() ?>
				<?= $form->field($model, 'ohs', $checkboxOptions)->checkbox() ?>
				<?= $form->field($model, 'bc', $checkboxOptions)->checkbox() ?>
			</div>
		</div><!-- / Useful Skills -->
		<div class="col-md-6">
			<div class="form-group">
				<label>Volunteer Experience</label>
				<?= $form->field($model, 'mmfAtt', $checkboxOptions)->checkbox() ?>
				<?= $form->field($model, 'vol', $checkboxOptions)->checkbox() ?>
				<?= $form->field($model, 'mmfVol', $checkboxOptions)->checkbox() ?>
			</div>
		</div><!-- / Volunteer Experience -->
	</div><!-- / Skills & Experience -->

	<div class="row">
		<div class="col-md-12">
			<h4>Discovery</h4>
		</div>
	</div><!-- / Discovery -->
	<div class="row">
		<div class="form-group">
			<div class="col-md-12">
				<label for="volDiscovery">How did you hear about volunteering for Maleny Music Festival?</label>
			</div>
			<div class="col-md-3">
			<?= $form->field($model, 'discovery')->dropDownList([
				'ACT' => 'ACT',
				'NSW' => 'NSW',
				'NT' => 'NT',
				'Qld' => 'Qld',
				'SA' => 'SA',
				'Tas' => 'Tas',
				'Vic' => 'Vic',
				'WA' => 'WA',
				'International' => 'International',
			], ['Qld' => ['selected' => true]])->label('How did you hear about volunteering for Maleny Music Festival?') ?>

				<select class="form-control" id="availableFromTime">
					<option selected disabled>Select...</option>
					<option value="Facebook">Facebook</option>
					<option value="Leaflet">Leaflet</option>
					<option value="Friend">Friend</option>
					<option value="Media">Media</option>
					<option value="Other">Other</option>
				</select>
			</div><!-- / Discovery -->
			<div class="col-md-9">
				<input type="text" class="form-control" placeholder="Details (optional)">
			</div><!-- / Discovery Details -->
		</div>
	</div>
	<div class="row">
		<div class="col-md-12"><br></div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<p>Check that everything above is correct, & then...</p>
		</div><!-- / Check -->
		<div class="col-md-4">
			<?= Html::submitButton(
				Yii::t('user', 'Continue'),
				['class' => 'btn btn-primary btn-lg btn-block']
			) ?>
		</div><!-- / Continue -->
	</div>



	<?= $form->field($model, 'discovery')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'discoveryDetail')->textInput(['maxlength' => true]) ?>


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
