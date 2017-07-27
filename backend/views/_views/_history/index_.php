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
use yii\grid\GridView;
use yii\widgets\Pjax;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel common\models\HistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

<div class="history-index">

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create History', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
<?php Pjax::begin(); ?>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'user_id',
			'givenName',
			'familyName',
			'preferredName',
			// 'email:email',
			// 'phone1',
			// 'phone2',
			// 'address1',
			// 'address2',
			// 'locality',
			// 'state',
			// 'postcode',
			// 'country',
			// 'emergencyContact',
			// 'emergencyPhone1',
			// 'emergencyPhone2',
			// 'rsa',
			// 'dl_c',
			// 'dl_h',
			// 'cse',
			// 'ohs',
			// 'vol',
			// 'mmfVol',
			// 'mmfAtt',
			// 'returned',
			// 'preferredJobs:ntext',
			// 'availability:ntext',
			// 'commentsInfo:ntext',
			// 'discovery:ntext',
			// 'id_orig',
			// 'ip',
			// 'key_orig',
			// 'created_orig',
			// 'updated_orig',
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
