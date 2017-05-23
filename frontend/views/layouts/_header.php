<?php
/**
 * _header.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>
<div class="brand"><img src="<?= $assetDir ?>/img/2017-header-900.png" width="900" alt="Maleny Music Festival"></div>
