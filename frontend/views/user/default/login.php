<?php
/**
 * login.php
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
 * @var amnah\yii2\user\models\forms\LoginForm $model
 */

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$this->title = Yii::t('user', 'Login');
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

	<?php $form = ActiveForm::begin([
		'id' => 'login-form',
		'options' => ['class' => 'form-horizontal'],
		'fieldConfig' => [
			'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
			'labelOptions' => ['class' => 'col-lg-2 control-label'],
		],

	]); ?>

	<?= $form->field($model, 'email') ?>
	<?= $form->field($model, 'password')->passwordInput() ?>
	<?= $form->field($model, 'rememberMe', [
		'template' => "{label}<div class=\"col-lg-offset-2 col-lg-3\">{input}</div>\n<div class=\"col-lg-7\">{error}</div>",
	])->checkbox() ?>

	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<?= Html::submitButton(Yii::t('user', 'Login'), ['class' => 'btn btn-primary']) ?>

			<br/><br/>
			<?= Html::a(Yii::t("user", "Register"), ["/user/register"]) ?> /
			<?= Html::a(Yii::t("user", "Forgot password") . "?", ["/user/forgot"]) ?> /
			<?= Html::a(Yii::t("user", "Resend confirmation email"), ["/user/resend"]) ?>
		</div>
	</div>

	<?php ActiveForm::end(); ?>

	<?php if (Yii::$app->get("authClientCollection", false)): ?>
		<div class="col-lg-offset-2 col-lg-10">
			<?= yii\authclient\widgets\AuthChoice::widget([
				'baseAuthUrl' => ['/user/auth/login']
			]) ?>
		</div>
	<?php endif; ?>

	<div class="col-lg-offset-2" style="color:#999;">
		You may login with <strong>neo/neo</strong>.<br>
		To modify the username/password, log in first and then <?= HTML::a("update your account", ["/user/account"]) ?>.
	</div>

	<?= $this->render('../../site/_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
