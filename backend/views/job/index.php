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

				<?php Pjax::begin(); ?>
					<?= GridView::widget([
						'dataProvider' => $dataProvider,
						//'filterModel' => $searchModel,
						'columns' => [
							[
								'class' => '\kartik\grid\SerialColumn',
								'hAlign' => 'center',
								'width' => '50px',
							],

							// 'team_id',
							[
								'attribute' => 'teamName',
								'width' => '200px',
								'group' => true,
							],
							[
								'attribute' => 'name',
								'width' => '250px',
							],
							// 'shortName',
							'description:ntext',
							[
								'class' => 'kartik\grid\EditableColumn',
								'attribute' => 'required',
								'editableOptions' => [
									'formOptions' => ['action' => ['/job/editjob']],
									'inputType' => \kartik\editable\Editable::INPUT_SPIN,
									'options' => ['pluginOptions' => ['min' => 0, 'max' => 200]]
								],
								'format' => ['decimal', 0],
								'hAlign' => 'right',
								'width' => '50px',
								//'pageSummary' => true,
							],


							// 'created_at',
							// 'updated_at',

							[
								'class' => '\kartik\grid\ActionColumn',
								//'template' => '{update}',
								//'updateOptions' => ['label' => FA::fw('magic')],
								'hAlign' => 'center',
								'width' => '80px',
							],
						],
					]); ?>
				<?php Pjax::end(); ?>

				<p>
					<?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
				</p>

			</div>

		</div>
	</div>
</div>
