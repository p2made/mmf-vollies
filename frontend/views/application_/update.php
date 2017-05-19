<?php

use yii\helpers\Html;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $model common\models\Application */

$this->title = 'Update Application: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center"><?= Html::encode($this->title) ?></h2>
				<hr>
			</div>

			<div class="application-update">

				<?= $this->render('_form', [
					'model' => $model,
				]) ?>

			</div>
		</div>
	</div>

</div>

