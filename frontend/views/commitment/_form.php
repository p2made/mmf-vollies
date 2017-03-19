<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Commitment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commitment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profileId')->textInput() ?>

    <?= $form->field($model, 'deptId')->textInput() ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hours')->textInput() ?>

    <?= $form->field($model, 'report')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reinvite')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
