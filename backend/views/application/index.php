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
			// 'bestTIme:datetime',
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
<?php Pjax::end(); ?></div>

		</div>
	</div>
</div><!-- /#content-wrapper -->
