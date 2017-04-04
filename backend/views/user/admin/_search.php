<?php
/**
 * _search.php
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
 * @var amnah\yii2\user\models\search\UserSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-search">

	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>

	<?= $form->field($model, 'id') ?>

	<?= $form->field($model, 'role_id') ?>

	<?= $form->field($model, 'status') ?>

	<?= $form->field($model, 'email') ?>

	<?php // echo $form->field($model, 'username') ?>

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
		<?= Html::submitButton(Yii::t('user', 'Search'), ['class' => 'btn btn-primary']) ?>
		<?= Html::resetButton(Yii::t('user', 'Reset'), ['class' => 'btn btn-default']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
