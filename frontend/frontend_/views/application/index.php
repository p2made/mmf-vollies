<?php
/**
 * _blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ApplicationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

common\assets\VolliesFormsAsset::register($this);

$this->title = 'Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-lg-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
					</h2>
				<hr>
			</div>
			<div class="col-md-12">
				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				<p>
					<?= Html::a('Create Application', ['create'], ['class' => 'btn btn-success']) ?>
				</p>
				<?php Pjax::begin(); ?>	<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel' => $searchModel,
					'columns' => [
						['class' => 'yii\grid\SerialColumn'],

						'id',
						'user_id',
						'job_choice_1',
						'job_choice_2',
						'job_choice_3',
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
						// 'accepted',
						// 'team_id',
						// 'rejected',
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
