<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApplicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="application-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'id') ?>
	<?= $form->field($model, 'user_id') ?>
	<?= $form->field($model, 'job_choice_1') ?>
	<?= $form->field($model, 'job_choice_2') ?>
	<?= $form->field($model, 'job_choice_3') ?>

	<?php // echo $form->field($model, 'availableFromDate') ?>
	<?php // echo $form->field($model, 'availableFromTime') ?>
	<?php // echo $form->field($model, 'availableToDate') ?>
	<?php // echo $form->field($model, 'availableToTime') ?>
	<?php // echo $form->field($model, 'availabilityNotes') ?>
	<?php // echo $form->field($model, 'double') ?>
	<?php // echo $form->field($model, 'otherNotes') ?>
	<?php // echo $form->field($model, 'referee') ?>
	<?php // echo $form->field($model, 'refereeRelationship') ?>
	<?php // echo $form->field($model, 'refereePhone') ?>
	<?php // echo $form->field($model, 'accepted') ?>
	<?php // echo $form->field($model, 'team_id') ?>
	<?php // echo $form->field($model, 'rejected') ?>
	<?php // echo $form->field($model, 'rejectedReason') ?>
	<?php // echo $form->field($model, 'created_at') ?>
	<?php // echo $form->field($model, 'created_by') ?>
	<?php // echo $form->field($model, 'updated_at') ?>
	<?php // echo $form->field($model, 'updated_by') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
