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
/* @var $searchModel common\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vollies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">

<div class="profile-index">

	<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<p>
		<?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
	</p>
<?php Pjax::begin(); ?>
	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			// 'givenName',
			// 'familyName',
			'vollieName',
			'preferredName',
			'phone1',
			'phone2',
			// 'lexicalName',
			'email',
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
			// 'bc',
			// 'fa',
			// 'vol',
			// 'mmfVol',
			// 'mmfAtt',
			// 'returned',
			// 'dnr',
			// 'discovery',
			// 'discoveryDetail',
			// 'timezone',
			// 'created_at',
			// 'updated_at',
			// 'name',
			// 'public_email:email',
			// 'gravatar_email:email',
			// 'gravatar_id',
			// 'location',
			// 'website',
			// 'bio:ntext',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>
<?php Pjax::end(); ?></div>

		</div>
	</div>
</div><!-- /#content-wrapper -->
