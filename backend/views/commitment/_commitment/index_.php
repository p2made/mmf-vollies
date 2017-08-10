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
/* @var $searchModel backend\models\CommitmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Commitments';
$this->params['breadcrumbs'][] = $this->title;

$columns = array(
	[
		'class' => 'yii\grid\SerialColumn',
		'contentOptions' => ['style' => 'width:50px;', 'class' => 'text-right'],
	],

	// 'id',
	// 'application_id',
	// 'team_id',
	// 'job_id',
	'vollieName',
	'teamName',
	'jobName',
	[
		'attribute' => 'year',
		'contentOptions' => ['style' => 'width:80px;'],
		'hAlign' => 'center',
	],
	// 'hours',
	// 'report:ntext',

	[
		'class' => '\kartik\grid\ActionColumn',
		'template' => '{view}',
		'updateOptions' => ['label' => FA::fw('magic')],
		'contentOptions' => ['style' => 'width:50px;'],
		'hAlign' => 'center',
	],
);
?>
<div id="content-wrapper">
	<div class="commitment-index">
		<div class="row">
			<div class="col-md-12">

				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<p>
					<?php //Html::a('Create Commitment', ['create'], ['class' => 'btn btn-success']) ?>
				</p>

				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						'filterModel' => $searchModel,
						'columns' => $columns,
					]); ?>
				<?php Pjax::end(); ?>

			</div>
		</div>
	</div>
</div>
