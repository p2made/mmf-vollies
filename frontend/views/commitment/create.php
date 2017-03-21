<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Commitment */

$this->title = 'Create Commitment';
$this->params['breadcrumbs'][] = ['label' => 'Commitments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="commitment-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
