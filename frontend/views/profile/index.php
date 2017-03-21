<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>
<div class="container profile-index">

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
				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<p>
					<?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
				</p>
				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						'filterModel' => $searchModel,
						'columns' => [
							['class' => 'yii\grid\SerialColumn'],

							'id',
							'givenName',
							'familyName',
							'preferredName',
							// 'email:email',
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
							// 'vol',
							// 'mmfVol',
							// 'mmfAtt',
							// 'discovery',
							// 'discoveryDetail',
							// 'created',
							// 'createdBy',
							// 'updated',
							// 'updatedBy',

							['class' => 'yii\grid\ActionColumn'],
						],
					]); ?>
				<?php Pjax::end(); ?></div>
			</div>
		</div>

</div>
