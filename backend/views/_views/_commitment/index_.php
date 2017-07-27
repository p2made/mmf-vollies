<?php
/**
 * __blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel common\models\CommitmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Commitments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

			<div class="commitment-index">

				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<p>
					<?php //Html::a('Create Commitment', ['create'], ['class' => 'btn btn-success']) ?>
				</p>

				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						'filterModel' => $searchModel,
						'columns' => [
							['class' => 'yii\grid\SerialColumn'],

							// 'id',
							'vollieName',
							// 'application_id',
							// 'team_id',
							[
								'header' => 'Year',
								'headerOptions' => ['class' => 'text-center'],
								'value' => 'year',
								'contentOptions' => ['class' => 'text-center', 'style' => 'width:80px;'],
							],
							// 'year',
							'job',
							// 'hours',
							// 'report:ntext',
							[
								'header' => 'Reinvite',
								'headerOptions' => ['class' => 'text-center'],
								'value' => function ($model) {
									$class = '';
									$text = '';
									if ($model->reinvite) {
										$class = 'success';
										$text = 'Yes';
									} else {
										$class = 'danger';
										$text = 'NO';
									}
									//return '<div class="text-center"><span class="' . $class . '">' . $text . '</span></div>';
									return '<div class="btn btn-xs btn-block btn-'
										. $class . '" disabled>' . $text . '</div>';
								},
								'contentOptions' => ['style' => 'width:120px;'],
								'format' => 'raw',
							],
							// 'reinvite',
							// 'created_at',
							// 'created_by',
							// 'updated_at',
							// 'updated_by',

							// ['class' => 'yii\grid\ActionColumn'],
						],
					]); ?>
				<?php Pjax::end(); ?>

			</div>

		</div>
	</div>
</div><!-- /#content-wrapper -->
