<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

			<div class="application-index">

				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<!-- <p>
					<?php // Html::a('Create Application', ['create'], ['class' => 'btn btn-success']) ?>
				</p> -->

				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						//'filterModel' => $searchModel,
						'columns' => [
							['class' => 'yii\grid\SerialColumn'],

							'vollieName',
							[
								'header' => 'Job Choice 1',
								'value' => 'jobPreference1',
								'contentOptions' => ['style' => 'width:210px;'],
							],
							[
								'header' => 'Job Choice 2',
								'value' => 'jobPreference2',
								'contentOptions' => ['style' => 'width:210px;'],
							],
							[
								'header' => 'Job Choice 3',
								'value' => 'jobPreference3',
								'contentOptions' => ['style' => 'width:210px;'],
							],
							[
								'class'=>'kartik\grid\BooleanColumn',
								'attribute'=>'returned',
								'contentOptions' => ['style' => 'width:100px;'],
							],
							[
								'header' => 'Status',
								'value' => function ($model) {
									$class = ''; $text = '';
									switch ($model->status) {
										case 1:
											$class = 'success'; $text = 'Accepted'; break;
										case 2:
											$class = 'warning'; $text = 'Cancelled'; break;
										case 3:
											$class = 'danger'; $text = 'Rejected'; break;
										default:
											$class = 'info'; $text = 'Pending';
									}
									return '<strong><div class="text-'
										. $class . '">' . $text . '</div></strong>';
								},
								'contentOptions' => ['style' => 'width:100px;'],
								'hAlign' => 'center',
								'format' => 'raw',
							],

							[
								'class' => '\kartik\grid\ActionColumn',
								'template' => '{update}',
								'updateOptions' => ['label' => FA::fw('magic')],
								'contentOptions' => ['style' => 'width:50px;'],
								'hAlign' => 'center',
							],
						],
					]); ?>
				<?php Pjax::end(); ?>

			</div>

		</div>
	</div>
</div>
