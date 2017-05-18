<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center">Profile - <?= Html::encode($this->title) ?></h2>
				<hr>
			</div>

<div class="profile-view">

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
			'bc',
			'vol',
			'mmfVol',
			'mmfAtt',
			'returned',
			'dnr',
			'discovery',
			'discoveryDetail',
			'email:email',
			'timezone',
			'full_name',
			'created_at',
			'created_by',
			'updated_at',
			'updated_by',
		],
	]) ?>

</div>

		</div>
	</div>

</div>
