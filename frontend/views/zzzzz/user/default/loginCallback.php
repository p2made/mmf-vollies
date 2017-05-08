<?php
/**
 * loginCallback.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package mmf-vollies
 * @license MIT
 */

/**
 * @var yii\web\View $this
 * @var amnah\yii2\user\Module $module
 * @var amnah\yii2\user\models\User $user
 * @var amnah\yii2\user\models\Profile $profile
 * @var amnah\yii2\user\models\UserToken $userToken
 */

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$module = $this->context->module;

$this->title = Yii::t('user', 'Register');
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

	<?php if (!$userToken): ?>

		<div class="alert alert-danger">
			<p><?= Yii::t("user", "Invalid Token") ?></p>
		</div>

	<?php else: ?>

		<?php $form = ActiveForm::begin([
			'id' => 'login-form',
			'options' => ['class' => 'form-horizontal'],
			'fieldConfig' => [
				'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
				'labelOptions' => ['class' => 'col-lg-2 control-label'],
			],
		]); ?>

		<?= $form->field($user, 'email')->textInput(['disabled' => true]) ?>
		<?php if ($module->useUsername): ?>
			<?= $form->field($user, 'username') ?>
		<?php endif; ?>
		<?= $form->field($profile, 'full_name') ?>

		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">
				<?= Html::submitButton(Yii::t('user', 'Register'), ['class' => 'btn btn-primary']) ?>
			</div>
		</div>

		<?php ActiveForm::end(); ?>

	<?php endif; ?>

	<?= $this->render('../../site/_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
