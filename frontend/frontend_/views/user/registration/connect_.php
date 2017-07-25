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
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\User $model
 * @var dektrium\user\models\Account $account
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-md-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
					</h2>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="alert alert-info">
							<p>
								<?= Yii::t(
									'user',
									'In order to finish your registration, we need you to enter following fields'
								) ?>:
							</p>
						</div>
						<?php $form = ActiveForm::begin([
							'id' => 'connect-account-form',
						]); ?>

						<?= $form->field($model, 'email') ?>

						<?= $form->field($model, 'username') ?>

						<?= Html::submitButton(Yii::t('user', 'Continue'), ['class' => 'btn btn-success btn-block']) ?>

						<?php ActiveForm::end(); ?>
					</div>
				</div>
				<p class="text-center">
					<?= Html::a(
						Yii::t(
							'user',
							'If you already registered, sign in and connect this account on settings page'
						),
						['/user/settings/networks']
					) ?>.
				</p>
			</div>
		</div>

	</div>
</div>
