<?php
/**
 * _form.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package mmf-vollies
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Blank Page';
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">
		<div class="col-lg-12">


		</div>
	</div>

	<!-- /### NOTE ### -->

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>

</div><!-- /#content-wrapper -->


<!-- ##### ^ ##### ^ MARKER / SEPARATOR ^ ##### ^ ##### -->


<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var amnah\yii2\user\Module $module
 * @var amnah\yii2\user\models\User $user
 * @var amnah\yii2\user\models\Profile $profile
 * @var amnah\yii2\user\models\Role $role
 * @var yii\widgets\ActiveForm $form
 */

$module = $this->context->module;
$role = $module->model("Role");
?>

<div class="user-form">

	<?php $form = ActiveForm::begin([
		'enableAjaxValidation' => true,
	]); ?>

	<?= $form->field($user, 'email')->textInput(['maxlength' => 255]) ?>

	<?= $form->field($user, 'username')->textInput(['maxlength' => 255]) ?>

	<?= $form->field($user, 'newPassword')->passwordInput() ?>

	<?= $form->field($profile, 'full_name'); ?>

	<?= $form->field($user, 'role_id')->dropDownList($role::dropdown()); ?>

	<?= $form->field($user, 'status')->dropDownList($user::statusDropdown()); ?>

	<?php // use checkbox for banned_at ?>
	<?php // convert `banned_at` to int so that the checkbox gets set properly ?>
	<?php $user->banned_at = $user->banned_at ? 1 : 0 ?>
	<?= Html::activeLabel($user, 'banned_at', ['label' => Yii::t('user', 'Banned')]); ?>
	<?= Html::activeCheckbox($user, 'banned_at'); ?>
	<?= Html::error($user, 'banned_at'); ?>

	<?= $form->field($user, 'banned_reason'); ?>

	<div class="form-group">
		<?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
