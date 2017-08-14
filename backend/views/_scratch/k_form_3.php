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
