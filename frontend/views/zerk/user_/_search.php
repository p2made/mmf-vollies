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
 * @var common\models\UserSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

			<?php echo $form->field($model, 'id') ?>

		<?php echo $form->field($model, 'role_id') ?>

		<?php echo $form->field($model, 'status') ?>

		<?php echo $form->field($model, 'email') ?>

		<?php echo $form->field($model, 'username') ?>

		<?php // echo $form->field($model, 'password') ?>

		<?php // echo $form->field($model, 'auth_key') ?>

		<?php // echo $form->field($model, 'access_token') ?>

		<?php // echo $form->field($model, 'logged_in_ip') ?>

		<?php // echo $form->field($model, 'logged_in_at') ?>

		<?php // echo $form->field($model, 'created_ip') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

		<?php // echo $form->field($model, 'banned_at') ?>

		<?php // echo $form->field($model, 'banned_reason') ?>

	<div class="form-group">
		<?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
