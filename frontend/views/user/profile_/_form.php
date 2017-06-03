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
 * @var common\models\Profile $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="profile-form">

	<?php $form = ActiveForm::begin([
		'id' => 'Profile',
		'layout' => 'horizontal',
		'enableClientValidation' => true,
		'errorSummaryCssClass' => 'error-summary alert alert-danger'
	]
);
?>

	<div class="">
		<?php $this->beginBlock('main'); ?>

		<p>


<!-- attribute bio -->
			<?php echo $form->field($model, 'bio')->textarea(['rows' => 6]) ?>

<!-- attribute timezone -->
			<?php echo $form->field($model, 'timezone')->textInput(['maxlength' => true]) ?>

<!-- attribute public_email -->
			<?php echo $form->field($model, 'public_email')->textInput(['maxlength' => true]) ?>

<!-- attribute gravatar_email -->
			<?php echo $form->field($model, 'gravatar_email')->textInput(['maxlength' => true]) ?>

<!-- attribute website -->
			<?php echo $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

<!-- attribute name -->
			<?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute location -->
			<?php echo $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

<!-- attribute givenName -->
			<?php echo $form->field($model, 'givenName')->textInput(['maxlength' => true]) ?>

<!-- attribute familyName -->
			<?php echo $form->field($model, 'familyName')->textInput(['maxlength' => true]) ?>

<!-- attribute phone1 -->
			<?php echo $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

<!-- attribute address1 -->
			<?php echo $form->field($model, 'address1')->textInput(['maxlength' => true]) ?>

<!-- attribute locality -->
			<?php echo $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>

<!-- attribute emergencyContact -->
			<?php echo $form->field($model, 'emergencyContact')->textInput(['maxlength' => true]) ?>

<!-- attribute emergencyPhone1 -->
			<?php echo $form->field($model, 'emergencyPhone1')->textInput(['maxlength' => true]) ?>

<!-- attribute discovery -->
			<?php echo $form->field($model, 'discovery')->textInput(['maxlength' => true]) ?>

<!-- attribute rsa -->
			<?php echo $form->field($model, 'rsa')->textInput() ?>

<!-- attribute dl_c -->
			<?php echo $form->field($model, 'dl_c')->textInput() ?>

<!-- attribute dl_h -->
			<?php echo $form->field($model, 'dl_h')->textInput() ?>

<!-- attribute cse -->
			<?php echo $form->field($model, 'cse')->textInput() ?>

<!-- attribute ohs -->
			<?php echo $form->field($model, 'ohs')->textInput() ?>

<!-- attribute bc -->
			<?php echo $form->field($model, 'bc')->textInput() ?>

<!-- attribute vol -->
			<?php echo $form->field($model, 'vol')->textInput() ?>

<!-- attribute mmfVol -->
			<?php echo $form->field($model, 'mmfVol')->textInput() ?>

<!-- attribute mmfAtt -->
			<?php echo $form->field($model, 'mmfAtt')->textInput() ?>

<!-- attribute returned -->
			<?php echo $form->field($model, 'returned')->textInput() ?>

<!-- attribute dnr -->
			<?php echo $form->field($model, 'dnr')->textInput(['maxlength' => true]) ?>

<!-- attribute preferredName -->
			<?php echo $form->field($model, 'preferredName')->textInput(['maxlength' => true]) ?>

<!-- attribute phone2 -->
			<?php echo $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

<!-- attribute state -->
			<?php echo $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

<!-- attribute postcode -->
			<?php echo $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>

<!-- attribute country -->
			<?php echo $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

<!-- attribute emergencyPhone2 -->
			<?php echo $form->field($model, 'emergencyPhone2')->textInput(['maxlength' => true]) ?>

<!-- attribute gravatar_id -->
			<?php echo $form->field($model, 'gravatar_id')->textInput(['maxlength' => true]) ?>

<!-- attribute address2 -->
			<?php echo $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>

<!-- attribute discoveryDetail -->
			<?php echo $form->field($model, 'discoveryDetail')->textInput(['maxlength' => true]) ?>

<!-- attribute user_id -->
			<?php echo $form->field($model, 'user_id')->textInput() ?>
		</p>
		<?php $this->endBlock(); ?>

		<?php echo
Tabs::widget(
	[
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => Yii::t('models', 'Profile'),
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
