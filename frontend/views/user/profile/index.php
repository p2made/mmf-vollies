<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
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

<div class="profile-index">

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'user_id',
			'givenName',
			'familyName',
			'preferredName',
			// 'phone1',
			// 'phone2',
			// 'address1',
			// 'address2',
			// 'locality',
			// 'state',
			// 'postcode',
			// 'country',
			// 'emergencyContact',
			// 'emergencyPhone1',
			// 'emergencyPhone2',
			// 'rsa',
			// 'dl_c',
			// 'dl_h',
			// 'cse',
			// 'ohs',
			// 'bc',
			// 'vol',
			// 'mmfVol',
			// 'mmfAtt',
			// 'returned',
			// 'dnr',
			// 'discovery',
			// 'discoveryDetail',
			// 'email:email',
			// 'timezone',
			// 'full_name',
			// 'created_at',
			// 'created_by',
			// 'updated_at',
			// 'updated_by',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
</div>

		</div>
	</div>

</div>