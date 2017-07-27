<?php
/**
 * view.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use kartik\detail\DetailView;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Profile */

$this->title = $model->name;
$this->title = $model->vollieName;
$this->params['breadcrumbs'][] = ['label' => 'Vollies', 'url' => ['index']];
?>
<div id="content-wrapper">
	<div class="row">
		<div class="col-md-12">

			<?= $this->render('_view', ['model' => $model]) ?>

		</div>
	</div>
</div>
