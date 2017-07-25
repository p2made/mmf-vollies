<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/4b7e79a8340461fe629a6ac612644d03
 *
 * @package default
 */


use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
 *
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

	<?php $form = ActiveForm::begin([
		'id' => 'User',
		'layout' => 'horizontal',
		'enableClientValidation' => true,
		'errorSummaryCssClass' => 'error-summary alert alert-danger'
	]
);
?>

	<div class="">
		<?php $this->beginBlock('main'); ?>

		<p>


<!-- attribute email -->
			<?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<!-- attribute password_hash -->
			<?php echo $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

<!-- attribute auth_key -->
			<?php echo $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

<!-- attribute username -->
			<?php echo $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

<!-- attribute confirmed_at -->
			<?php echo $form->field($model, 'confirmed_at')->textInput() ?>

<!-- attribute flags -->
			<?php echo $form->field($model, 'flags')->textInput() ?>

<!-- attribute last_login_at -->
			<?php echo $form->field($model, 'last_login_at')->textInput() ?>

<!-- attribute blocked_at -->
			<?php echo $form->field($model, 'blocked_at')->textInput() ?>

<!-- attribute unconfirmed_email -->
			<?php echo $form->field($model, 'unconfirmed_email')->textInput(['maxlength' => true]) ?>

<!-- attribute registration_ip -->
			<?php echo $form->field($model, 'registration_ip')->textInput(['maxlength' => true]) ?>
		</p>
		<?php $this->endBlock(); ?>

		<?php echo
Tabs::widget(
	[
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => Yii::t('models', 'User'),
				'content' => $this->blocks['main'],
				'active'  => true,
			],
		]
	]
);
?>
		<hr/>

		<?php echo $form->errorSummary($model); ?>

		<?php echo Html::submitButton(
	'<span class="glyphicon glyphicon-check"></span> ' .
	($model->isNewRecord ? 'Create' : 'Save'),
	[
		'id' => 'save-' . $model->formName(),
		'class' => 'btn btn-success'
	]
);
?>

		<?php ActiveForm::end(); ?>

	</div>

</div>
