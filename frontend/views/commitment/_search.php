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

    <?= $form->field($model, 'profileId') ?>

    <?= $form->field($model, 'deptId') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'job') ?>

    <?php // echo $form->field($model, 'hours') ?>

    <?php // echo $form->field($model, 'report') ?>

    <?php // echo $form->field($model, 'reinvite') ?>

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
