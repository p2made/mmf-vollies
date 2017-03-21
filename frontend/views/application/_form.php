<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'profileId')->textInput() ?>

	<?= $form->field($model, 'preferredJobId1')->textInput() ?>

	<?= $form->field($model, 'preferredJobId2')->textInput() ?>

	<?= $form->field($model, 'preferredJobId3')->textInput() ?>

	<?= $form->field($model, 'availableFromDate')->textInput() ?>

	<?= $form->field($model, 'availableFromTime')->textInput() ?>

	<?= $form->field($model, 'availableToDate')->textInput() ?>

	<?= $form->field($model, 'availableToTime')->textInput() ?>

	<?= $form->field($model, 'availabilityNotes')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'otherNotes')->textarea(['rows' => 6]) ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
