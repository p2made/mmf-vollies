<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'givenName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'familyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preferredName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergencyContact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergencyPhone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergencyPhone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rsa')->textInput() ?>

    <?= $form->field($model, 'dl_c')->textInput() ?>

    <?= $form->field($model, 'dl_h')->textInput() ?>

    <?= $form->field($model, 'cse')->textInput() ?>

    <?= $form->field($model, 'ohs')->textInput() ?>

    <?= $form->field($model, 'bc')->textInput() ?>

    <?= $form->field($model, 'vol')->textInput() ?>

    <?= $form->field($model, 'mmfVol')->textInput() ?>

    <?= $form->field($model, 'mmfAtt')->textInput() ?>

    <?= $form->field($model, 'returned')->textInput() ?>

    <?= $form->field($model, 'dnr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discovery')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discoveryDetail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timezone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
