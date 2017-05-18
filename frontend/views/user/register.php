<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use p2m\helpers\FA;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\Module $module
 * @var amnah\yii2\user\models\User $user
 * @var amnah\yii2\user\models\User $profile
 * @var string $userDisplayName
 */

$module = $this->context->module;

$this->title = Yii::t('user', 'Register');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">
					<?= Html::encode($this->title) ?>
					<strong>to use this awesome site</strong>
				</h2>
				<hr>
			</div>
			<div class="col-lg-6 col-lg-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">

						<?php if ($flash = Yii::$app->session->getFlash("Register-success")): ?>

							<div class="alert alert-success">
								<p><?= $flash ?></p>
							</div>

						<?php else: ?>

							<?php $form = ActiveForm::begin([
								'id' => 'register-form',
								'enableAjaxValidation' => true,
							]); ?>

							<?php if ($module->requireEmail): ?>
								<?= $form->field($user, 'email') ?>
							<?php endif; ?>

							<?php if ($module->requireUsername): ?>
								<?= $form->field($user, 'username') ?>
							<?php endif; ?>

							<?= $form->field($user, 'newPassword')->passwordInput() ?>

							<?php /* uncomment if you want to add profile fields here
							<?= $form->field($profile, 'full_name') ?>
							*/ ?>

							<div class="form-group">
								<?= Html::submitButton(Yii::t('user', 'Register'), ['class' => 'btn btn-primary']) ?>
							</div>

							<?php ActiveForm::end(); ?>

							<?php if (Yii::$app->get("authClientCollection", false)): ?>
								<div class="col-lg-offset-2 col-lg-10">
									<?= yii\authclient\widgets\AuthChoice::widget([
										'baseAuthUrl' => ['/user/auth/login']
									]) ?>
								</div>
							<?php endif; ?>

						<?php endif; ?>

					</div>
				</div>

			</div>

			<div class="clearfix"></div>
		</div>
	</div>

</div>
