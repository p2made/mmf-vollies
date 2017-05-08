<?php
/**
 * reset.php
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
 * @var amnah\yii2\user\models\User $user
 * @var bool $success
 * @var bool $invalidToken
 */

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$this->title = Yii::t('user', 'Reset');
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

	<?php if (!empty($success)): ?>

		<div class="alert alert-success">

			<p><?= Yii::t("user", "Password has been reset") ?></p>
			<p><?= Html::a(Yii::t("user", "Log in here"), ["/user/login"]) ?></p>

		</div>

	<?php elseif (!empty($invalidToken)): ?>

		<div class="alert alert-danger">
			<p><?= Yii::t("user", "Invalid token") ?></p>
		</div>

	<?php else: ?>

		<div class="row">
			<div class="col-lg-5">

				<div class="alert alert-warning">
					<p><?= Yii::t("user", "Email") ?> [ <?= $user->email ?> ]</p>
				</div>

				<?php $form = ActiveForm::begin(['id' => 'reset-form']); ?>

					<?= $form->field($user, 'newPassword')->passwordInput() ?>
					<?= $form->field($user, 'newPasswordConfirm')->passwordInput() ?>
					<div class="form-group">
						<?= Html::submitButton(Yii::t("user", "Reset"), ['class' => 'btn btn-primary']) ?>
					</div>
				<?php ActiveForm::end(); ?>
			</div>
		</div>

	<?php endif; ?>

	<?= $this->render('../../site/_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
