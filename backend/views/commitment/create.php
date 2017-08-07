<?php
/**
 * create.php
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

$this->title = 'Create Commitment';
$this->params['breadcrumbs'][] = ['label' => 'Commitments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<div class="commitment-create">
		<div class="row">
			<div class="col-md-12">

				<?= $this->render('_form', [
					'model' => $model,
				]) ?>

			</div>
		</div>
	</div>
</div>
