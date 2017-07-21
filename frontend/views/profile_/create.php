<?php
/**
 * create.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = 'Create Profile';
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
	<div class="box">
		<div class="row">

			<div class="col-lg-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
					</h2>
				<hr>
			</div>
			<div class="col-md-12">

				<div class="profile-create">

					<h1><?= Html::encode($this->title) ?></h1>

					<?= $this->render('_form', [
						'model' => $model,
					]) ?>

				</div>

			</div>

		</div>
	</div>
</div>
