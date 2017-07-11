<?php
/**
 * __blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">

			<div class="application-index">

				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<p>
					<?= Html::a('Create Application', ['create'], ['class' => 'btn btn-success']) ?>
				</p>

				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						'filterModel' => $searchModel,
						'columns' => [
							['class' => 'yii\grid\SerialColumn'],

							// 'id',
							// 'user.givenName',
							// 'user.familyName',
							'volunteerName',
							[
								'header' => 'Job Choice 1',
								'value' => function ($model) {
									return $model->jobChoices[0];
								}
							],
							[
								'header' => 'Job Choice 2',
								'value' => function ($model) {
									return count($model->jobChoices) > 1 ? $model->jobChoices[1] : '';
								}
							],
							[
								'header' => 'Job Choice 3',
								'value' => function ($model) {
									return count($model->jobChoices) > 2 ? $model->jobChoices[2] : '';
								}
							],
							// 'user.fullName',
							// 'jobChoice1.name',
							// 'jobChoice2.name',
							// 'jobChoice3.name',
							// 'year',
							// 'availableFromDate',
							// 'availableFromTime:datetime',
							// 'availableToDate',
							// 'availableToTime:datetime',
							// 'bestTime:datetime',
							// 'availabilityNotes:ntext',
							// 'double',
							// 'otherNotes:ntext',
							// 'referee',
							// 'refereeRelationship',
							// 'refereePhone',
							// 'bestCallingTime',
							// 'status',
							// 'team_id',
							// 'rejectedReason:ntext',
							// 'created_at',
							// 'created_by',
							// 'updated_at',
							// 'updated_by',

							['class' => 'yii\grid\ActionColumn'],
						],
					]); ?>
				<?php Pjax::end(); ?>

			</div>

		</div>
	</div>
</div>
