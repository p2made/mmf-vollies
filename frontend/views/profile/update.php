<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = 'Update Profile: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual'
);
?>
<div class="container">

	<div class="row">
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

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

			<div class="clearfix"></div>
		</div>
	</div>

</div>
