<?php
/**
 * content.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use yii\widgets\Breadcrumbs;
use p2m\widgets\Alert;
?>
<div id="page-wrapper">
	<div class="container-fluid">

		<header class="row">
			<div class="col-md-12">
				<h1 class="page-header"><?php echo $this->title; ?></h1>
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
				]) ?>
				<?= Alert::widget() ?>
			</div>
		</header>

		<?= $content ?>

	</div>

</div>
