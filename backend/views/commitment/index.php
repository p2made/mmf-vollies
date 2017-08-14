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
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use p2m\helpers\FA;
use p2m\helpers\GI;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property integer $job_id
 * @property string $jobName
 * @property string $year
 * @property integer $rostered
 * @property string $notes
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \backend\models\Application $application
 * @property \backend\models\Job $job
 * @property \backend\models\Profile $user
 * @property \backend\models\Team $team
 * @property string $aliasModel
 *
 * @property string $vollieName;
 * @property string $preferredName;
 * @property string $phone1;
 * @property string $phone2;
 * @property string $teamName;
 */

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CommitmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Commitments';
$this->params['breadcrumbs'][] = $this->title;

$exportConfig = array(
	GridView::CSV => [
		'label' => 'CSV',
		'icon' => 'file-code-o',
		'iconOptions' => ['class' => 'text-primary'],
		'showHeader' => true,
		'filename' => 'MMF Vollie Commitments ' . date('Y-m-d H.i.s'),
		'alertMsg' => 'The CSV export file will be generated for download.',
		'options' => ['title' => 'Comma Separated Values'],
		'mime' => 'application/csv',
		'config' => [
			'colDelimiter' => ",",
			'rowDelimiter' => "\r\n",
		]
	],
);
$columns = array(
	['class' => 'yii\grid\SerialColumn'],

	[
		'attribute' => 'id',
		//'contentOptions' => ['style' => 'width:60px;'],
		'hAlign' => 'right',
	],
	[
		'attribute' => 'application_id',
		'label' => 'App\' ID',
		//'contentOptions' => ['style' => 'width:60px;'],
		'hAlign' => 'right',
	],
	[
		'attribute' => 'teamName',
		'group' => true,
	],
	[
		'attribute' => 'jobName',
		//'group' => true,
	],
	[
		'attribute' => 'vollieName',
		'label' => 'Legal Name',
		//'contentOptions' => ['style' => 'width:210px;'],
	],
	[
		'attribute' => 'preferredName',
		'label' => 'Preferred',
	],
	[
		'attribute' => 'phone1',
		'contentOptions' => ['style' => 'width:120px;'],
	],
	[
		'attribute' => 'phone2',
		'contentOptions' => ['style' => 'width:120px;'],
	],
	[
		'class' => 'kartik\grid\BooleanColumn',
		'attribute' => 'rostered',
		'contentOptions' => ['style' => 'width:100px;'],
		'hiddenFromExport' => true,
	],

	[
		'class' => '\kartik\grid\ActionColumn',
		'template' => '{update}',
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

				<!-- <p>
					<?php // Html::a('Create Application', ['create'], ['class' => 'btn btn-success']) ?>
				</p> -->

				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						//'filterModel' => $searchModel,
						'pjax' => true, // pjax is set to always true for this demo
						'panel' => ['heading' => '<b>Commitments</b>'],
						'toolbar' => ['{toggleData}', '{export}'],
						'exportConfig' => $exportConfig,
						'columns' => $columns,
					]); ?>
				<?php Pjax::end(); ?>

			</div>
		</div>

	</div>
</div>
