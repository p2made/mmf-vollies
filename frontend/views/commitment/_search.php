<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CommitmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commitment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'profile_id') ?>

    <?= $form->field($model, 'application_id') ?>

    <?= $form->field($model, 'team_id') ?>

    <?= $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'job') ?>

    <?php // echo $form->field($model, 'hours') ?>

    <?php // echo $form->field($model, 'report') ?>

    <?php // echo $form->field($model, 'reinvite') ?>

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
