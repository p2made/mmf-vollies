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
 * @var dektrium\user\models\SettingsForm $model
 */

common\assets\VolliesFormsAsset::register($this);

$this->title = Yii::t('user', 'Volunteer Account');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

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
				<p class="text-center"><?= $this->render('_menu') ?></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

				<?php $form = ActiveForm::begin([
					'id' => 'account-form',
					'options' => ['class' => 'form-horizontal'],
					'fieldConfig' => [
						'template' => "{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class=\"col-sm-offset-5 col-lg-7\">{error}\n{hint}</div>",
						'labelOptions' => ['class' => 'col-lg-5 control-label'],
					],
					'enableAjaxValidation' => true,
					'enableClientValidation' => false,
				]); ?>

				<?= $form->field($model, 'email') ?>

				<?= $form->field($model, 'username') ?>

				<?= $form->field($model, 'new_password')->passwordInput() ?>

				<hr/>

				<?= $form->field($model, 'current_password')->passwordInput() ?>

				<div class="form-group">
					<div class="col-md-offset-5 col-lg-7">
						<?= Html::submitButton(Yii::t('user', 'Save'), ['class' => 'btn btn-block btn-success']) ?><br>
					</div>
				</div>

				<?php ActiveForm::end(); ?>

			</div>

			<div class="clearfix"></div>
		</div>

	</div>
</div>
