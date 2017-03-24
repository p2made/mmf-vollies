<?php
/**
 * /WWW/yii.mmf-vollies/backend/runtime/giiant/eeda5c365686c9888dbc13dbc58f89a1
 *
 * @package default
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 *
 * @var yii\web\View $this
 * @var common\models\CommitmentSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="commitment-search">

    <?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

    		<?php echo $form->field($model, 'id') ?>

		<?php echo $form->field($model, 'user_id') ?>

		<?php echo $form->field($model, 'appl_id') ?>

		<?php echo $form->field($model, 'dept_id') ?>

		<?php echo $form->field($model, 'year') ?>

		<?php // echo $form->field($model, 'job') ?>

		<?php // echo $form->field($model, 'hours') ?>

		<?php // echo $form->field($model, 'report') ?>

		<?php // echo $form->field($model, 'reinvite') ?>

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
