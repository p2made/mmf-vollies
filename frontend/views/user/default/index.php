<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package mmf-vollies
 * @license MIT
 */

/**
 * @var yii\web\View $this
 * @var amnah\yii2\user\Module $module
 * @var array $actions
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;

$module = $this->context->module;

$this->title = Yii::t('user', 'Yii 2 User');
//$this->title = 'Blank';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

	<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Yii 2 User Module - <?= $module->getVersion(); ?>
				<small>Actions in this module</small>
			</h1>
<?= Breadcrumbs::widget([
	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
		</div>
	</div>
	<!-- /.row -->

	<p>
		<em><strong>Note:</strong> Some actions may be unavailable depending on if you are logged in/out, or as an
			admin/regular user</em>
	</p>

	<table class="table table-bordered">
		<tr>
			<th>URL</th>
			<th>Description</th>
		</tr>

		<?php foreach ($actions as $url => $description): ?>

			<tr>
				<td>
					<strong><?= Html::a($url, [$url]) ?></strong>
				</td>
				<td>
					<?= $description ?>
				</td>
			</tr>

		<?php endforeach; ?>

	</table>

	<?= $this->render('../../site/_footer.php') ?>

	<!-- Page Code Location - remove in production -->
	<div class="row">
		<div class="col-lg-12">
			<code><?= __FILE__ ?></code>
		</div>
	</div>

</div>
