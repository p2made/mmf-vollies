<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HistoryItem */

$this->title = 'Create History Item';
$this->params['breadcrumbs'][] = ['label' => 'History Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-item-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
