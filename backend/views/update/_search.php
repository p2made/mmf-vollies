<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UpdateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="update-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'id') ?>

	<?= $form->field($model, 'email') ?>

	<?= $form->field($model, 'name') ?>

	<?= $form->field($model, 'other0') ?>

	<?= $form->field($model, 'other1') ?>

	<?php // echo $form->field($model, 'other2') ?>

	<?php // echo $form->field($model, 'status0') ?>

	<?php // echo $form->field($model, 'status1') ?>

	<?php // echo $form->field($model, 'status2') ?>

	<div class="form-group">
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
