<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use p2m\helpers\FA;

$this->title = 'Home';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/landing-page'
);
?>

<?= $this->render('_header.php') ?>
<?= $this->render('_services.php', ['assetDir' => $assetDir]) ?>
<?= $this->render('_contact.php') ?>
<?= $this->render('_footer.php') ?>
