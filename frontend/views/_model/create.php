<?php

use yii\helpers\Html;
use yii\helpers\Url;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $model common\models\Commitment */

$this->title = 'Create Commitment';
$this->params['breadcrumbs'][] = ['label' => 'Commitments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center"><?= Html::encode($this->title) ?></h2>
				<hr>
			</div>

<div class="commitment-create">

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>

		</div>
	</div>

</div>
