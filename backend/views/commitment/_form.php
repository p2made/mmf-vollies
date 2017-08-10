<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Commitment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commitment-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'user_id')->textInput() ?>

	<?= $form->field($model, 'application_id')->textInput() ?>

	<?= $form->field($model, 'team_id')->textInput() ?>

	<?= $form->field($model, 'job_id')->textInput() ?>

	<?= $form->field($model, 'jobName')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'hours')->textInput() ?>

	<?= $form->field($model, 'report')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'reinvite')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
