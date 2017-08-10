<?php
/**
 * view.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $model       common\models\Application */
/* @var $profile     common\models\Profile */
/* @var $commitments common\models\Commitment */

$this->title = $model->vollieName . ' (preferred: ' . $model->preferredName . ')';
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];

$attrModel = array();
$statusFlag = array();
?>
<div id="content-wrapper">
	<div class="application-view">

		<div class="row">
			<div class="col-md-12">
				<h3>
					Application
					<?= $model->status == 2 ?
						' <span class="' . $model->status == 2 ? 'text-warning' : 'text-danger' . '">(cancelled)</span>' : '' ?>
				</h3>
			</div>
		</div>

		<?= $this->render('_view', [
			'model' => $model,
			'profile' => $profile,
			'commitments' => $commitments,
		]) ?>

	</div>
</div>
