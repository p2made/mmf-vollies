<?php
/**
 * search.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CommitmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="commitment-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'id') ?>

	<?= $form->field($model, 'user_id') ?>

	<?= $form->field($model, 'application_id') ?>

	<?= $form->field($model, 'team_id') ?>

	<?= $form->field($model, 'job_id') ?>

	<?php // echo $form->field($model, 'job_name') ?>

	<?php // echo $form->field($model, 'year') ?>

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
