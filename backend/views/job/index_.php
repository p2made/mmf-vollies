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
use p2m\helpers\FA;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\JobSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */

$this->title = 'Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

<div class="job-index">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Job', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
<?php Pjax::begin(); ?>	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			// 'id',
			// 'team_id',
			'teamName',
			// 'group_id',
			// 'sequence',
			'name',
			'shortName',
			'description:ntext',
			// 'created_at',
			// 'updated_at',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
<?php Pjax::end(); ?>
</div>

		</div>
	</div>
</div><!-- /#content-wrapper -->
