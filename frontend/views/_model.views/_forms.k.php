<?php


use kartik\widgets\ActiveForm;
use kartik\builder\Form;

		$form = ActiveForm::begin(['type' => ActiveForm::TYPE_VERTICAL]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 2,
			'attributes' => [	 // 2 column layout
				'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter username...']],
				'password' => ['type' => Form::INPUT_PASSWORD, 'options' => ['placeholder' => 'Enter password...']]
			]
		]);

		echo Form::widget([	 // 1 column layout
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'notes' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter notes...']],
			]
		]);

		echo Form::widget([	 // nesting attributes together (without labels for children)
			'model' => $model,
			'form' => $form,
			'columns' => 2,
			'attributes' => [
				'date_range' => [
					'label' => 'Date Range',
					'attributes' => [
						'begin_date' => [
							'type' => Form::INPUT_WIDGET,
							'widgetClass' => '\kartik\datecontrol\DateControl',
							'options' => [
								'options' => [
									'options' => ['placeholder' => 'Date from...']
								]
							],
						],
						'end_date' => [
							'type' => Form::INPUT_WIDGET,
							'widgetClass' => '\kartik\datecontrol\DateControl',
							'options' => [
								'options' => [
									'options' => ['placeholder' => 'Date to...', 'class' => 'col-md-9']
								]
							]
						],
					]
				],
				'time_range' => [
					'label' => 'Time Range',
					'attributes' => [
						'begin_time' => [
							'type' => Form::INPUT_WIDGET,
							'widgetClass' => '\kartik\widgets\TimePicker',
							'options' => ['options' => ['placeholder' => 'Time from...']],
						],
						'end_time' => [
							'type' => Form::INPUT_WIDGET,
							'widgetClass' => '\kartik\widgets\TimePicker',
							'options' => ['options' => ['placeholder' => 'Time to...', 'class' => 'col-md-9']]
						],
					]
				],
			]
		]);

		echo Form::widget([	 // 3 column layout
			'model' => $model,
			'form' => $form,
			'columns' => 3,
			'attributes' => [
				'birthday' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\DatePicker',
					'hint' => 'Enter birthday (mm/dd/yyyy)'
				],
				'state_1' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => $model->typeahead_data],
					'hint' => 'Type and select state'
				],
				'color' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\ColorInput',
					'hint' => 'Choose your color'
				],
				'status' => [
					'type' => Form::INPUT_RADIO_LIST,
					'items' => [true => 'Active', false => 'Inactive'],
					'options' => ['inline' => true]
				],
				'brightness' => [
					'type' => Form::INPUT_WIDGET,
					'label' => Html::label('Brightness (%)'),
					'widgetClass' => '\kartik\widgets\RangeInput',
					'options' => ['width' => '80%']
				],
				'actions' => [
					'type' => Form::INPUT_RAW,
					'value' => '<div style="text-align: right; margin-top: 20px">' .
						Html::resetButton('Reset', ['class' => 'btn btn-default']) . ' ' .
						Html::button('Submit', ['type' => 'button', 'class' => 'btn btn-primary']) .
						'</div>'
				],
			]
		]);
		ActiveForm::end();


use kartik\widgets\ActiveForm;
use kartik\builder\Form;

		$form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL, 'formConfig' => ['labelSpan' => 4]]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'address_detail' => [ // complex nesting of attributes along with labelSpan and colspan
					'label' => 'Address',
					'labelSpan' => 2,
					'columns' => 6,
					'attributes' => [
						'address' => [
							'type' => Form::INPUT_TEXT,
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

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 2,
			'attributes' => [
				'status' => ['label' => 'Severity', 'items' => [0 => 'Low', 1 => 'Medium', 2 => 'High'], 'type' => Form::INPUT_RADIO_BUTTON_GROUP],
				'status_1' => ['label' => 'Categories', 'items' => [0 => 'Group 1', 1 => 'Group 2', 2 => 'Group 3'], 'type' => Form::INPUT_CHECKBOX_BUTTON_GROUP]
			]
		]);

		echo Form::widget([ // hide label and extend input to full width
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'website' => [
					'label' => false,
					'options' => [
						'placeholder' => 'Enter website (this input fills the width when label is set to false)...'
					]
				],
			]
		]);

		echo '<div class="text-right">' . Html::resetButton('Reset', ['class' => 'btn btn-default']) . '</div>';
		ActiveForm::end();




			'givenName' => 'Given Name',
			'familyName' => 'Family Name',
			'preferredName' => 'Preferred Name / Nickname',
			'phone1' => 'Primary Phone',
			'phone2' => 'Secondary Phone',
			'address1' => 'Address',
			'address2' => 'Address Line 2',
			'locality' => 'Suburb/Town/Locality',
			'state' => 'State',
			'postcode' => 'Postcode',
			'country' => 'Country',
			'emergencyContact' => 'Emergency Contact Name',
			'emergencyPhone1' => 'Primary Phone',
			'emergencyPhone2' => 'Secondary Phone',
			'rsa' => 'Responsible Service of Alcohol',
			'dl_c' => 'Driver\'s Licence (car)',
			'dl_h' => 'Driver\'s Licence (LR or above)',
			'cse' => 'Customer Service Experience',
			'ohs' => 'OHS qualifications',
			'bc' => 'Blue Card (working with children)',
			'vol' => 'I have volunteered before',
			'mmfVol' => 'I have volunteered for this festival before',
			'mmfAtt' => 'I have been to this festival before',
			'returned' => 'Returned',
			'dnr' => 'DNR',
			'discovery' => 'Discovery',
			'discoveryDetail' => 'Detail',
