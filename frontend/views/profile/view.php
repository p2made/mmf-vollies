<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>
<div class="container profile-view">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center">
					<?= Html::encode($this->title) ?>
				</h2>
				<hr>
			</div>
			<div class="col-md-12">


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
			'discovery',
			'discoveryDetail',
			'created',
			'createdBy',
			'updated',
			'updatedBy',
		],
	]) ?>


			</div>
		</div>
	</div>

</div>
