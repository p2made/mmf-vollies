<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var amnah\yii2\user\Module $module
 * @var array $actions
 */

$module = $this->context->module;

$this->title = Yii::t('user', 'Yii 2 User');
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>
<div class="container user-default-index">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h1 class="intro-text text-center">
					Yii 2 User Module - <?= $module->getVersion(); ?>
				</h1>
				<hr>
			</div>
			<div class="col-md-12">


	<h3>Actions in this module</h3>

	<p>
		<em><strong>Note:</strong> Some actions may be unavailable depending on if you are logged in/out, or as an admin/regular user</em>
	</p>

	<table class="table table-bordered">
		<tr>
			<th>URL</th>
			<th>Description</th>
		</tr>

		<?php foreach ($actions as $url => $description): ?>

			<tr>
				<td>
					<strong><?= Html::a($url, [$url]) ?></strong>
				</td>
				<td>
					<?= $description ?>
				</td>
			</tr>

		<?php endforeach; ?>

	</table>


			</div>
		</div>
	</div>

</div>
