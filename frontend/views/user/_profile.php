<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */

$userEmail = $model->user->email;

$statesData = [
	'ACT' => 'ACT',
	'NSW' => 'NSW',
	'NT' => 'NT',
	'Qld' => 'Qld',
	'SA' => 'SA',
	'Tas' => 'Tas',
	'Vic' => 'Vic',
	'WA' => 'WA',
	'International' => 'International',
];

$checkboxOptions = [
	'options' => ['tag' => false],
	'template' => '<div class=\'checkbox\'>{input}</div>'
];

$discoveryData = [
	null => '',
	'Facebook' => 'Facebook',
	'Leaflet' => 'Leaflet',
	'Friend' => 'Friend',
	'Media' => 'Media',
	'Other' => 'Other',
];

?>
<div class="profile-form">

	<?php if ($flash = Yii::$app->session->getFlash("Profile-success")): ?>

		<div class="alert alert-success">
			<p><?= $flash ?></p>
		</div>

	<?php endif; ?>

	<?php $form = ActiveForm::begin([
		'type'=>ActiveForm::TYPE_VERTICAL
	]); ?>

	<div class="row">
		<div class="col-md-12">
			<h4>Personal Details</h4>
		</div>
	</div><!-- / Personal Details -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 3,
			'attributes' => [
				'givenName' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Given Name'],
					'hint' => '<strong>Legal</strong> given name.',
				],
				'familyName' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Family Name'],
					'hint' => '<strong>Legal</strong> family name.',
				],
				'preferredName' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Preferred Name / Nickname'],
					'hint' => 'What you prefer to be called (optional)',
				],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 4,
			'attributes' => [
				'email' => [
					'type' => Form::INPUT_STATIC,
					'options' => ['placeholder' => 'Email Address'],
					'columnOptions' => ['colspan' => 2],
				],
				'phone1' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => '04xx xxx xxx or 0x xxxx xxxx'],
					'hint' => 'Best if this is a mobile that you will have with you at the festival.',
				],
				'phone2' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => '04xx xxx xxx or 0x xxxx xxxx'],
					'hint' => 'An alternate number that we can contact you on (optional).',
				],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'address_detail' => [
					'label' => 'Address',
					'columns' => 3,
					'attributes' => [
						'address1' => [
							'type' => Form::INPUT_TEXT,
							'options' => ['placeholder' => 'Address Line 1'],
							'columnOptions' => ['colspan' => 2],
						],
						'address2' => [
							'type' => Form::INPUT_TEXT,
							'options' => ['placeholder' => 'Address Line 2 (optional)'],
							'columnOptions' => ['colspan' => 2],
						],
					]
				]
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 6,
			'attributes' => [
				'locality' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Suburb/Town/Locality'],
					'columnOptions' => ['colspan' => 2],
				],
				'state' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => [
						'data' => $statesData,
					],
					'columnOptions' => ['colspan' => 1],
				],
				'postcode' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Postcode'],
					'columnOptions' => ['colspan' => 1],
				],
				'country' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Country'],
					'columnOptions' => ['colspan' => 2],
				],
			]
		]);
	?>

	<div class="row">
		<div class="col-md-12">
			<h4>Emergency Contact</h4>
		</div>
	</div><!-- / Emergency Contact -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 4,
			'attributes' => [
				'emergencyContact' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Emergency Contact Name'],
					'columnOptions' => ['colspan' => 2],
				],
				'emergencyPhone1' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => '04xx xxx xxx or 0x xxxx xxxx'],
				],
				'emergencyPhone2' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => '04xx xxx xxx or 0x xxxx xxxx'],
				],
			]
		]);
	?>

	<div class="row">
		<div class="col-md-12">
			<h4>Skills &amp; Experience</h4>
		</div>
	</div><!-- / Skills & Experience -->
	<div class="row">
		<div class="col-md-6">
			<label>Useful Skills</label>
			<?php
				echo Form::widget([
					'model' => $model,
					'form' => $form,
					'attributes' => [
						'rsa' => ['type' => Form::INPUT_CHECKBOX],
						'dl_c' => ['type' => Form::INPUT_CHECKBOX],
						'dl_h' => ['type' => Form::INPUT_CHECKBOX],
						'cse' => ['type' => Form::INPUT_CHECKBOX],
						'ohs' => ['type' => Form::INPUT_CHECKBOX],
						'bc' => ['type' => Form::INPUT_CHECKBOX],
					]
				]);
			?>
		</div>
		<div class="col-md-6">
			<label>Volunteer Experience</label>
			<?php
				echo Form::widget([
					'model' => $model,
					'form' => $form,
					'attributes' => [
						'mmfAtt' => ['type' => Form::INPUT_CHECKBOX],
						'vol' => ['type' => Form::INPUT_CHECKBOX],
						'mmfVol' => ['type' => Form::INPUT_CHECKBOX],
					]
				]);
			?>
		</div>
	</div>

	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'discovery_' => [
					'columns' => 4,
					'labelSpan' => 4,
					'label' => 'How did you hear about volunteering for Maleny Music Festival?',
					'attributes' => [
						'discovery' => [
							'label' => false,
							'type' => Form::INPUT_WIDGET,
							'widgetClass' => '\kartik\widgets\Select2',
							'options' => [
								'data' => $discoveryData,
							],
							'columnOptions' => ['colspan' => 1],
						],
						'discoveryDetail' => [
							'label' => false,
							'type' => Form::INPUT_TEXT,
							'options' => ['placeholder' => 'Details (optional)'],
							'columnOptions' => ['colspan' => 3],
						],
					]
				]
			]
		]);
	?>

	<div class="row">
		<div class="col-md-8">
			<p>Check that everything above is correct, & then...</p>
		</div><!-- / Check -->
		<div class="col-md-4">
			<?= Html::submitButton('Continue', ['class' => 'btn btn-primary btn-lg btn-block']) ?>
		</div><!-- / Continue -->
	</div>

	<?php ActiveForm::end(); ?>

</div>
