<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'givenName') ?>

    <?= $form->field($model, 'familyName') ?>

    <?= $form->field($model, 'preferredName') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone1') ?>

    <?php // echo $form->field($model, 'phone2') ?>

    <?php // echo $form->field($model, 'address1') ?>

    <?php // echo $form->field($model, 'address2') ?>

    <?php // echo $form->field($model, 'locality') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'postcode') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'emergencyContact') ?>

    <?php // echo $form->field($model, 'emergencyPhone1') ?>

    <?php // echo $form->field($model, 'emergencyPhone2') ?>

    <?php // echo $form->field($model, 'rsa') ?>

    <?php // echo $form->field($model, 'dl_c') ?>

    <?php // echo $form->field($model, 'dl_h') ?>

    <?php // echo $form->field($model, 'cse') ?>

    <?php // echo $form->field($model, 'ohs') ?>

    <?php // echo $form->field($model, 'vol') ?>

    <?php // echo $form->field($model, 'mmfVol') ?>

    <?php // echo $form->field($model, 'mmfAtt') ?>

    <?php // echo $form->field($model, 'returned') ?>

    <?php // echo $form->field($model, 'preferredJobs') ?>

    <?php // echo $form->field($model, 'availability') ?>

    <?php // echo $form->field($model, 'commentsInformation') ?>

    <?php // echo $form->field($model, 'discovery') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'original_id') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'key_orig') ?>

    <?php // echo $form->field($model, 'created_orig') ?>

    <?php // echo $form->field($model, 'updated_orig') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
