<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\History */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-view">

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
			'user_id',
			'givenName',
			'familyName',
			'preferredName',
			'email:email',
			'phone1',
			'phone2',
			'address1',
			'address2',
			'locality',
			'state',
			'postcode',
			'country',
			'emergencyContact',
			'emergencyPhone1',
			'emergencyPhone2',
			'rsa',
			'dl_c',
			'dl_h',
			'cse',
			'ohs',
			'vol',
			'mmfVol',
			'mmfAtt',
			'returned',
			'preferredJobs:ntext',
			'availability:ntext',
			'commentsInfo:ntext',
			'discovery:ntext',
			'id_orig',
			'ip',
			'key_orig',
			'created_orig',
			'updated_orig',
			'created_at',
			'created_by',
			'updated_at',
			'updated_by',
		],
	]) ?>

</div>
