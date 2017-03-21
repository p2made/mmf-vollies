<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HistoryItem */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'History Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-item-view">

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
			'profileId',
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
			'commentsInformation:ntext',
			'discovery:ntext',
			'created',
			'createdBy',
			'updated',
			'updatedBy',
		],
	]) ?>

</div>
