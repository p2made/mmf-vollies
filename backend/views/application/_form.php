<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'user_id')->textInput() ?>

	<?= $form->field($model, 'job_choice_1')->textInput() ?>

	<?= $form->field($model, 'job_choice_2')->textInput() ?>

	<?= $form->field($model, 'job_choice_3')->textInput() ?>

	<?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'availableFromDate')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'availableFromTime')->textInput() ?>

	<?= $form->field($model, 'availableToDate')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'availableToTime')->textInput() ?>

	<?= $form->field($model, 'bestTime')->textInput() ?>

	<?= $form->field($model, 'availabilityNotes')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'double')->textInput() ?>

	<?= $form->field($model, 'otherNotes')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'referee')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'refereeRelationship')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'refereePhone')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'bestCallingTime')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'status')->textInput() ?>

	<?= $form->field($model, 'team_id')->textInput() ?>

	<?= $form->field($model, 'rejectedReason')->textarea(['rows' => 6]) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
