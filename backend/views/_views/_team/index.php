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

/* @var $this yii\web\View */
/* @var $searchModel common\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

<div class="team-index">

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
<?php Pjax::begin(); ?>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'head_id',
			'head_id',
			'headName',
			'name',
			'description:ntext',
			// 'created_at',
			// 'updated_at',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
<?php Pjax::end(); ?></div>

		</div>
	</div>
</div><!-- /#content-wrapper -->
