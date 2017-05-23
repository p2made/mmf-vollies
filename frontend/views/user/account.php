<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use p2m\helpers\FA;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\Module $module
 * @var amnah\yii2\user\models\User $user
 * @var amnah\yii2\user\models\UserToken $userToken
 */

$module = $this->context->module;

$this->title = Yii::t('user', 'Account');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="box">
		<div class="row">
			<div class="col-md-12">
				<hr>
					<h2 class="intro-text text-center">
						<?php // Html::encode($this->title) ?>
						First Review Your Login
					</h2>
				<hr>
			</div>
		</div>

		<div class="col-lg-6 col-lg-offset-3">

			<?php if ($flash = Yii::$app->session->getFlash("Account-success")): ?>

				<div class="alert alert-success">
					<p><?= $flash ?></p>
				</div>

			<?php elseif ($flash = Yii::$app->session->getFlash("Resend-success")): ?>

				<div class="alert alert-success">
					<p><?= $flash ?></p>
				</div>

			<?php elseif ($flash = Yii::$app->session->getFlash("Cancel-success")): ?>

				<div class="alert alert-success">
					<p><?= $flash ?></p>
				</div>

			<?php endif; ?>

			<?php $form = ActiveForm::begin([
				'type'=>ActiveForm::TYPE_VERTICAL,
				'id' => 'account-form',
				'enableAjaxValidation' => true,
			]); ?>

			<?php if ($user->password): ?>
				<?= $form->field($user, 'currentPassword')->passwordInput()->hint('Only enter if making changes') ?>
			<?php endif ?>

			<hr>

			<?php if ($module->useEmail): ?>
				<?= $form->field($user, 'email')->hint('This email is also used for your application') ?>
			<?php endif; ?>

			<div class="form-group">

				<?php if (!empty($userToken->data)): ?>

					<p class="small"><?= Yii::t('user', "Pending email confirmation: [ {newEmail} ]", ["newEmail" => $userToken->data]) ?></p>
					<p class="small">
						<?= Html::a(Yii::t("user", "Resend"), ["/user/resend-change"]) ?> / <?= Html::a(Yii::t("user", "Cancel"), ["/user/cancel"]) ?>
					</p>

				<?php elseif ($module->emailConfirmation): ?>

					<p><?= Yii::t('user', 'Changing your email requires email confirmation.') ?></p>

				<?php endif; ?>

			</div>

			<?php if ($module->useUsername): ?>
				<?= $form->field($user, 'username') ?>
			<?php endif; ?>

			<?= $form->field($user, 'newPassword')->passwordInput() ?>

		</div>

		<div class="col-lg-3 col-lg-offset-2">
			<p>Making changes...</p>
			<?= Html::submitButton(Yii::t('user', 'Update'),
				['class' => 'btn btn-danger btn-lg btn-block'
			]) ?>
		</div>
		<div class="col-lg-3 col-lg-offset-2">
			<p>No changes...</p>
			<?= Html::a('Continue', ['/user/profile'], [
				'class' => 'btn btn-success btn-lg btn-block',
				'role' => 'button',
			]) ?>
		</div>


			<?php ActiveForm::end(); ?>

			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<?php foreach ($user->userAuths as $userAuth): ?>
						<p>Linked Social Account: <?= ucfirst($userAuth->provider) ?> / <?= $userAuth->provider_id ?></p>
					<?php endforeach; ?>
				</div>
			</div>

	</div>

</div>
<!-- /.container -->
			<?php
			?>
