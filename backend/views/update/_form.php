<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Update */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="update-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'other0')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'other1')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'other2')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'status0')->textInput() ?>

	<?= $form->field($model, 'status1')->textInput() ?>

	<?= $form->field($model, 'status2')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
