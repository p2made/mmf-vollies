<?php
/**
 * profile.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package mmf-vollies
 * @license MIT
 */

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\models\Profile $profile
 */

use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;
use amnah\yii2\user\helpers\Timezone;

$this->title = Yii::t('user', 'Profile');
//$this->title = 'Blank';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"><?= Html::encode($this->title) ?>
				<small>Subheading</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<?php if ($flash = Yii::$app->session->getFlash("Profile-success")): ?>

		<div class="alert alert-success">
			<p><?= $flash ?></p>
		</div>

	<?php endif; ?>

	<?php $form = ActiveForm::begin([
		'id' => 'profile-form',
		'options' => ['class' => 'form-horizontal'],
		'fieldConfig' => [
			'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
			'labelOptions' => ['class' => 'col-lg-2 control-label'],
		],
		'enableAjaxValidation' => true,
	]); ?>

	<?= $form->field($profile, 'full_name') ?>

	<?php
	// by default, this contains the entire php timezone list of 400+ entries
	// so you may want to set up a fancy jquery select plugin for this, eg, select2 or chosen
	// alternatively, you could use your own filtered list
	// a good example is twitter's timezone choices, which contains ~143  entries
	// @link https://twitter.com/settings/account
	?>
	<?= $form->field($profile, 'timezone')->dropDownList(ArrayHelper::map(Timezone::getAll(), 'identifier', 'name')); ?>

	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<?= Html::submitButton(Yii::t('user', 'Update'), ['class' => 'btn btn-primary']) ?>
		</div>
	</div>

	<?php ActiveForm::end(); ?>

	<?= $this->render('../../site/_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
