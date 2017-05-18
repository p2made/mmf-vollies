<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use p2m\helpers\FA;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var amnah\yii2\user\models\forms\LoginForm $model
 */

$this->title = Yii::t('user', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">
					<?= Html::encode($this->title) ?>
					<strong>to start your session</strong>
				</h2>
				<hr>
			</div>
			<div class="col-lg-6 col-lg-offset-3">
				<div class="panel panel-info">
					<div class="panel-body">
						<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

							<?= $form->field($model, 'email') ?>
							<?= $form->field($model, 'password')->passwordInput() ?>
							<?= $form->field($model, 'rememberMe')->checkbox() ?>

						<div style="color:#999;margin:1em 0">
							If you forgot your password you can
							<?= Html::a('reset it', ['/user/forgot']) ?>.
						</div>

						<div class="form-group">
							<?= Html::submitButton(Yii::t('user', 'Login'), [
								'class' => 'btn btn-primary'
							]) ?>
						</div>

						<?php ActiveForm::end(); ?>

						<?php if (Yii::$app->get('authClientCollection', false)): ?>
							<?= yii\authclient\widgets\AuthChoice::widget([
								'baseAuthUrl' => ['/user/auth/login']
							]) ?>
						<?php endif; ?>

					</div>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>

</div>
