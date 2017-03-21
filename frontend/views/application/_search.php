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

	<?= $form->field($model, 'profileId') ?>

	<?= $form->field($model, 'preferredJobId1') ?>

	<?= $form->field($model, 'preferredJobId2') ?>

	<?= $form->field($model, 'preferredJobId3') ?>

	<?php // echo $form->field($model, 'availableFromDate') ?>

	<?php // echo $form->field($model, 'availableFromTime') ?>

	<?php // echo $form->field($model, 'availableToDate') ?>

	<?php // echo $form->field($model, 'availableToTime') ?>

	<?php // echo $form->field($model, 'availabilityNotes') ?>

	<?php // echo $form->field($model, 'otherNotes') ?>

	<?php // echo $form->field($model, 'created') ?>

	<?php // echo $form->field($model, 'createdBy') ?>

	<?php // echo $form->field($model, 'updated') ?>

	<?php // echo $form->field($model, 'updatedBy') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
