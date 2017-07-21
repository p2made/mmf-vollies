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
use kartik\grid\GridView;
use yii\widgets\Pjax;
use p2m\helpers\FA;

use yii\helpers\Url;
use yii\widgets\ActiveForm;

use yii\bootstrap\Modal;

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
							'vollieName',
							[
								'header' => 'Job Choice 1',
								'value' => function ($model) {
									return $model->jobPreference1;
								}
							],
							[
								'header' => 'Job Choice 2',
								'value' => function ($model) {
									return $model->jobPreference2;
								}
							],
							[
								'header' => 'Job Choice 3',
								'value' => function ($model) {
									return $model->jobPreference3;
								}
							],
							[
								'header' => 'Returned',
								'headerOptions' => ['class' => 'text-center'],
								'value' => function ($model) {
									$class = '';
									$text = '';
									if ($model->returned) {
										$class = 'success';
										$text = 'Yes';
									} else {
										$class = 'danger';
										$text = 'NO';
									}
									return '<div class="btn btn-xs btn-block btn-'
										. $class . '" disabled>' . $text . '</div>';
								},
								'contentOptions' => ['style' => 'width:120px;'],
								'format' => 'raw',
							],
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

				<p>
					<?= Html::a('Send Update', ['send'], ['class' => 'btn btn-danger']) ?>
				</p>

			</div>

		</div>
	</div>
</div>
