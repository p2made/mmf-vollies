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
use yii\widgets\DetailView;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\History */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

<div class="history-view">

	<p>
		<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Delete', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Are you sure you want to delete this item?',
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'id',
			'user_id',
			'givenName',
			'familyName',
			'preferredName',
			'email:email',
			'phone1',
			'phone2',
			'address1',
			'address2',
			'locality',
			'state',
			'postcode',
			'country',
			'emergencyContact',
			'emergencyPhone1',
			'emergencyPhone2',
			'rsa',
			'dl_c',
			'dl_h',
			'cse',
			'ohs',
			'vol',
			'mmfVol',
			'mmfAtt',
			'returned',
			'preferredJobs:ntext',
			'availability:ntext',
			'commentsInfo:ntext',
			'discovery:ntext',
			'id_orig',
			'ip',
			'key_orig',
			'created_orig',
			'updated_orig',
			'created_at',
			'created_by',
			'updated_at',
			'updated_by',
		],
	]) ?>

</div>

		</div>
	</div>
</div><!-- /#content-wrapper -->
