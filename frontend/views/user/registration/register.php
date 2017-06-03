<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-md-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
						<strong>to volunteer</strong>
					</h2>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php $form = ActiveForm::begin([
							'id' => 'registration-form',
							'enableAjaxValidation' => true,
							'enableClientValidation' => false,
						]); ?>

						<?= $form->field($model, 'email') ?>

						<?= $form->field($model, 'username') ?>

						<?php if ($module->enableGeneratingPassword == false): ?>
							<?= $form->field($model, 'password')->passwordInput() ?>
						<?php endif ?>

						<?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-success btn-block']) ?>

						<?php ActiveForm::end(); ?>
					</div>
				</div>
				<p class="text-center">
					<?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
				</p>
			</div>

			<div class="clearfix"></div>
		</div>

	</div>
</div>
