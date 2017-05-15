<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profile_id')->textInput() ?>

    <?= $form->field($model, 'availableFromDate')->textInput() ?>

    <?= $form->field($model, 'availableFromTime')->textInput() ?>

    <?= $form->field($model, 'availableToDate')->textInput() ?>

    <?= $form->field($model, 'availableToTime')->textInput() ?>

    <?= $form->field($model, 'availabilityNotes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'double')->textInput() ?>

    <?= $form->field($model, 'otherNotes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'referee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refereeRelationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refereePhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepted')->textInput() ?>

    <?= $form->field($model, 'team_id')->textInput() ?>

    <?= $form->field($model, 'rejected')->textInput() ?>

    <?= $form->field($model, 'rejectedReason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
