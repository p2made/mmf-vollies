<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/eeda5c365686c9888dbc13dbc58f89a1
 *
 * @package default
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 *
 * @var yii\web\View $this
 * @var common\models\ApplicationSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

    		<?php echo $form->field($model, 'id') ?>

		<?php echo $form->field($model, 'user_id') ?>

		<?php echo $form->field($model, 'job_choice_1') ?>

		<?php echo $form->field($model, 'job_choice_2') ?>

		<?php echo $form->field($model, 'job_choice_3') ?>

		<?php // echo $form->field($model, 'year') ?>

		<?php // echo $form->field($model, 'availableFromDate') ?>

		<?php // echo $form->field($model, 'availableFromTime') ?>

		<?php // echo $form->field($model, 'availableToDate') ?>

		<?php // echo $form->field($model, 'availableToTime') ?>

		<?php // echo $form->field($model, 'bestTIme') ?>

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
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
