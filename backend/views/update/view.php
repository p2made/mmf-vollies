<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Update */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Updates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="update-view">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'email:email',
			'name',
			'other0',
			'other1',
			'other2',
			'status0',
			'status1',
			'status2',
		],
	]) ?>

</div>
