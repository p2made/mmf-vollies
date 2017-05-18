<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
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
			<div class="form-group">
				<?= $form->field($model, 'givenName')->textInput(['maxlength' => true])->label('Given Name <span>*</span>')->hint('<strong>Legal</strong> given name.') ?>
			</div>
		</div><!-- / Given Name -->
		<div class="col-md-4">
			<div class="form-group">
				<?= $form->field($model, 'familyName')->textInput(['maxlength' => true])->label('Family Name <span>*</span>')->hint('<strong>Legal</strong> family name.') ?>
			</div>
		</div><!-- / Family Name -->
		<div class="col-md-4">
			<div class="form-group">
				<?= $form->field($model, 'preferredName')->textInput(['maxlength' => true])->label('Preferred Name/Nickname')->hint('What you prefer to be called (optional)') ?>
			</div>
		</div><!-- / Preferred Name -->
	</div><!-- / Name Fields -->

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="emailAddress">Email Address <span>*</span></label>
				<input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
			</div>
		</div><!-- / Email Address -->
		<div class="col-md-3">
			<div class="form-group">
				<?= $form->field($model, 'phone1')->textInput(['maxlength' => true])->label('Primary Phone <span>*</span>')->hint('Best if this is a mobile that you will have with you at the festival.') ?>
			</div>
		</div><!-- / Primary Phone -->
		<div class="col-md-3">
			<div class="form-group">
				<?= $form->field($model, 'phone2')->textInput(['maxlength' => true])->label('Secondary Phone')->hint('Optional - an alternate number that we can contact you on.') ?>
			</div>
		</div><!-- / Secondary Phone -->
	</div><!-- / Email & Phone Numbers -->

	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<?= $form->field($model, 'address1', [
					'inputOptions' => [
						'placeholder' => 'Address Line 1',
					],
				])->textInput(['maxlength' => true]) ?>
			</div>
		</div><!-- / Address Line 1 -->
		<div class="col-md-8">
			<div class="form-group">
				<?= $form->field($model, 'phone2')->textInput(['maxlength' => true])->label('Secondary Phone')->hint('Optional - an alternate number that we can contact you on.') ?>
			</div>

	<?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>
			<div class="form-group">
				<input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
			</div>
		</div><!-- / Address Line 2 -->
	</div><!-- / Address Fileds -->

	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="addressLocality">Suburb/Town/Locality <span>*</span></label>
				<input type="text" class="form-control" id="addressLocality" placeholder="Suburb/Town/Locality">
			</div>
		</div><!-- / Locality -->
		<div class="col-md-2">
			<div class="form-group">
				<label for="addressState">State <span>*</span></label>
				<select class="form-control" id="addressState">
					<option value="ACT">ACT</option>
					<option value="NSW">NSW</option>
					<option value="NT">NT</option>
					<option value="Qld" selected>Qld</option>
					<option value="SA">SA</option>
					<option value="Tas">Tas</option>
					<option value="Vic">Vic</option>
					<option value="WA">WA</option>
					<option data-divider="true"></option>
					<option value="International">International</option>
				</select>
			</div>
		</div><!-- / State -->
		<div class="col-md-2">
			<div class="form-group">
				<label for="addressPostcode">Postcode <span>*</span></label>
				<input type="text" class="form-control" id="addressPostcode" placeholder="Postcode">
			</div>
		</div><!-- / Postcode -->
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="emergencyContactName">Emergency Contact Name <span>*</span></label>
				<input type="text" class="form-control" id="emergencyContactName" placeholder="Emergency Contact Name">
			</div>
		</div><!-- / Emergency Contact Name -->
		<div class="col-md-3">
			<div class="form-group">
				<label for="emergencyContactPhone">Primary Phone <span>*</span></label>
				<input type="text" class="form-control" id="emergencyContactPhone" placeholder="EC Primary Phone">
			</div>
		</div><!-- / EC Primary Phone -->
		<div class="col-md-3">
			<div class="form-group">
				<label for="emergencyContactPhone">Secondary Phone</label>
				<input type="text" class="form-control" id="emergencyContactPhone" placeholder="EC Secondary Phone">
			</div>
		</div><!-- / EC Secondary Phone -->
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Useful Skills</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="RSA">
						Responsible Service of Alcohol
					</label>
				</div><!-- / RSA -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="DL/C">
						Driver's Licence (car)
					</label>
				</div><!-- / DL/C -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="DL/H">
						Driver's Licence (LR or above)
					</label>
				</div><!-- / DL/H -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="CSE">
						Customer Service Experience
					</label>
				</div><!-- / CSE -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="OHS">
						OHS qualifications
					</label>
				</div><!-- / OHS -->
			</div>
		</div><!-- / Useful Skills -->
		<div class="col-md-6">
			<div class="form-group">
				<label>Volunteer Experience</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="Volunteered">
						I have volunteered before
					</label>
				</div><!-- / Volunteered -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="Volunteered MMF">
						I have volunteered for this festival before
					</label>
				</div><!-- / Volunteered MMF -->
				<div class="checkbox">
					<label>
						<input type="checkbox" value="Attended MMF">
						I have been to this festival before
					</label>
				</div><!-- / Attended MMF -->
			</div>
		</div><!-- / Volunteer Experience -->
	</div>
	<div class="row">
		<div class="form-group">
			<div class="col-md-12">
				<label for="volDiscovery">How did you hear about volunteering for Maleny Music Festival?</label>
			</div>
			<div class="col-md-3">
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





			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="givenName">Given Name <span>*</span></label>
						<input type="text" class="form-control" id="givenName" placeholder="Given Name" aria-describedby="givenNameHelp">
						<span id="givenNameHelp" class="help-block"><strong>Legal</strong> given name.</span>
					</div>
				</div><!-- / Given Name -->
				<div class="col-md-4">
					<div class="form-group">
						<label for="familyName">Family Name <span>*</span></label>
						<input type="text" class="form-control" id="familyName" placeholder="Family Name" aria-describedby="familyNameHelp">
						<span id="familyNameHelp" class="help-block"><strong>Legal</strong> family name.</span>
					</div>
				</div><!-- / Family Name -->
				<div class="col-md-4">
					<div class="form-group">
						<label for="preferredName">Preferred Name/Nickname</label>
						<input type="text" class="form-control" id="preferredName" placeholder="Preferred Name/Nickname" aria-describedby="preferredNameHelp">
						<span id="preferredNameHelp" class="help-block">What you prefer to be called (optional)</span>
					</div>
				</div><!-- / Preferred Name -->
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="emailAddress">Email Address <span>*</span></label>
						<input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
					</div>
				</div><!-- / Email Address -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="phone1">Primary Phone</label>
						<input type="tel" class="form-control" id="phone1" placeholder="Primary Phone" aria-describedby="phone1Help">
						<span id="phone1Help" class="help-block">Best if this is a mobile that you will have with you at the festival.</span>
					</div>
				</div><!-- / Primary Phone -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="phone2">Secondary Phone</label>
						<input type="tel" class="form-control" id="phone2" placeholder="Secondary Phone" aria-describedby="phone2Help">
						<span id="phone2Help" class="help-block">Optional - an alternate number that we can contact you on.</span>
					</div>
				</div><!-- / Secondary Phone -->
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="addressLine1">Address <span>*</span></label>
						<input type="text" class="form-control" id="addressLine1" placeholder="Address Line 1">
					</div>
				</div><!-- / Address Line 1 -->
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2">
					</div>
				</div><!-- / Address Line 2 -->
			</div>



	<?= $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'emergencyContact')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'emergencyPhone1')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'emergencyPhone2')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'rsa')->textInput() ?>

	<?= $form->field($model, 'dl_c')->textInput() ?>

	<?= $form->field($model, 'dl_h')->textInput() ?>

	<?= $form->field($model, 'cse')->textInput() ?>

	<?= $form->field($model, 'ohs')->textInput() ?>

	<?= $form->field($model, 'bc')->textInput() ?>

	<?= $form->field($model, 'vol')->textInput() ?>

	<?= $form->field($model, 'mmfVol')->textInput() ?>

	<?= $form->field($model, 'mmfAtt')->textInput() ?>

	<?= $form->field($model, 'returned')->textInput() ?>

	<?= $form->field($model, 'dnr')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'discovery')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'discoveryDetail')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'timezone')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'created_at')->textInput() ?>

	<?= $form->field($model, 'created_by')->textInput() ?>

	<?= $form->field($model, 'updated_at')->textInput() ?>

	<?= $form->field($model, 'updated_by')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
