<?php
/**
 * update.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Job */

$this->title = 'Update Job: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

			<div class="job-update">

				<?= $this->render('_form', [
					'model' => $model,
				]) ?>

			</div>

		</div>
	</div>
</div>
