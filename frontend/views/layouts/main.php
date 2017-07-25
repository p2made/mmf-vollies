<?php
/**
 * primary.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Html;
use common\widgets\Alert;
use p2m\helpers\FA;

frontend\assets\VolliesAsset::register($this);

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?> | MMF Volunteers</title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	<?= Alert::widget() ?>

	<div class="brand">
		<a href="/"><img src="<?= $assetDir ?>/img/2017-header-900.png" width="900" alt="Maleny Music Festival"></a>
	</div>

	<?= $this->render('_navigation.php') ?>

	<?= $content ?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright <?= FA::i('copyright') ?> Maleny Music Festival <?= date("Y") ?>
					<br><?= Yii::powered() ?></p>
				</div>
			</div>
		</div>
	</footer>

	<?php $this->endBody() ?>

	<!-- Script to Activate the Carousel -->
	<script>
		$(document).ready(function(){
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		});
	</script>
</body>
</html>
<?php $this->endPage() ?>
