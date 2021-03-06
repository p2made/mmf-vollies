<?php

use yii\bootstrap\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */

$userEmail = $model->user->email;
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
$userDiscovery = $model->discovery;
?>
<div class="profile-form">

	<?php $form = ActiveForm::begin([
		'id' => 'profile-form',
		'type'=>ActiveForm::TYPE_VERTICAL,
		'enableAjaxValidation' => true,
		'enableClientValidation' => false,
		'validateOnBlur' => true,
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
					'staticValue' => $userEmail,
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
					'options' => ['placeholder' => 'City/Suburb/Town/Locality'],
					'columnOptions' => ['colspan' => 2],
				],
				'state' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => [
						'data' => [
							'ACT' => 'ACT',
							'NSW' => 'NSW',
							'NT' => 'NT',
							'Qld' => 'Qld',
							'SA' => 'SA',
							'Tas' => 'Tas',
							'Vic' => 'Vic',
							'WA' => 'WA',
							'International' => 'International',
						],
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
			<h4>Useful Skills</h4>
		</div>
	</div><!-- / Skills & Experience -->
	<div class="row">
		<div class="col-md-12">
			<?php
				echo Form::widget([
					'model' => $model,
					'form' => $form,
					'columns' => 3,
					'attributes' => [
						'rsa' => ['type' => Form::INPUT_CHECKBOX],
						'dl_c' => ['type' => Form::INPUT_CHECKBOX],
						'dl_h' => ['type' => Form::INPUT_CHECKBOX],
						'cse' => ['type' => Form::INPUT_CHECKBOX],
						'ohs' => ['type' => Form::INPUT_CHECKBOX],
						'bc' => ['type' => Form::INPUT_CHECKBOX],
						'fa' => ['type' => Form::INPUT_CHECKBOX],
					]
				]);
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h4>Volunteer Experience</h4>
		</div>
	</div><!-- / Skills & Experience -->
	<div class="row">
		<div class="col-md-12">
			<?php
				echo Form::widget([
					'model' => $model,
					'form' => $form,
					'columns' => 3,
					'attributes' => [
						'vol' => ['type' => Form::INPUT_CHECKBOX],
						'mmfVol' => ['type' => Form::INPUT_CHECKBOX],
						'mmfAtt' => ['type' => Form::INPUT_CHECKBOX],
					]
				]);
			?>
		</div>
	</div>

	<?php
		$discoveryWidget;
		if ($userDiscovery) {
			$discoveryWidget = [
				'label' => false,
				'type' => Form::INPUT_STATIC,
				'staticValue' => $userDiscovery,
				'columnOptions' => ['colspan' => 1],
			];
		} else {
			$discoveryWidget = [
				'label' => false,
				'type' => Form::INPUT_WIDGET,
				'widgetClass' => '\kartik\widgets\Select2',
				'options' => [
					'data' => $discoveryData,
				],
				'columnOptions' => ['colspan' => 1],
			];
		}
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
						'discovery' => $discoveryWidget,
						'discoveryDetail' => [
							'label' => false,
							'type' => Form::INPUT_TEXT,
							'options' => ['placeholder' => 'Details (optional)'],
							'columnOptions' => ['colspan' => 3],
						],
					],
				],
			]
		]);
	?>

	<?php //$form->field($model, 'name') ?>
	<?php //$form->field($model, 'public_email') ?>
	<?php //$form->field($model, 'website') ?>
	<?php //$form->field($model, 'location') ?>
	<?php //$form->field($model, 'timezone')->dropDownList(ArrayHelper::map(Timezone::getAll(), 'timezone', 'name')) ?>
	<?php //$form->field($model, 'gravatar_email')->hint(Html::a(Yii::t('user', 'Change your avatar at Gravatar.com'), 'http://gravatar.com')) ?>
	<?php //$form->field($model, 'bio')->textarea() ?>

	<div class="row">
		<div class="col-md-9">
			<p>Check that everything above is correct, & then...</p>
		</div><!-- / Check -->
		<div class="col-md-3">
			<?= Html::submitButton('Continue', ['class' => 'btn btn-block btn-success btn-lg']) ?>
		</div><!-- / Continue -->
	</div>

	<?php ActiveForm::end(); ?>

</div>
