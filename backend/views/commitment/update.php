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
/* @var $model backend\models\Commitment */

$this->title = 'Volunteer Commitment: ' . $model->vollieName . ' (preferred: ' . $model->preferredName . ')';
$this->params['breadcrumbs'][] = ['label' => 'Commitments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="content-wrapper">
	<div class="commitment-update">

		<?= $this->render('_update', [
			'model' => $model,
		]) ?>

		<?= $this->render('_vollie', [
			'model' => $model,
			'profile' => $profile,
			'application' => $application,
		]) ?>

	</div>
</div>
<?php
/* @var $model       backend\models\Commitment */
/* @var $application backend\models\Application */
/* @var $profile     backend\models\Profile */
?>
