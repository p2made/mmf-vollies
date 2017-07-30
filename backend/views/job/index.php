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
use kartik\grid\GridView;
use yii\widgets\Pjax;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

			<div class="job-index">

				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<p>
					<?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
				</p>

				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						'filterModel' => $searchModel,
						'columns' => [
							[
								'class' => '\kartik\grid\SerialColumn',
								'contentOptions' => ['style' => 'width:50px;'],
								'hAlign' => 'center',
							],

							// 'team_id',
							[
								'attribute'=>'teamName',
								'contentOptions' => ['style' => 'width:200px;'],
							],
							[
								'attribute'=>'name',
								'contentOptions' => ['style' => 'width:250px;'],
							],
							// 'shortName',
							'description:ntext',
							[
								'attribute'=>'required',
								'contentOptions' => ['style' => 'width:50px;'],
							],
							// 'created_at',
							// 'updated_at',

							[
								'class' => '\kartik\grid\ActionColumn',
								//'template' => '{update}',
								//'updateOptions' => ['label' => FA::fw('magic')],
								'contentOptions' => ['style' => 'width:80px;'],
								'hAlign' => 'center',
							],
						],
					]); ?>
				<?php Pjax::end(); ?>
			</div>

		</div>
	</div>
</div>
