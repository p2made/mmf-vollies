<?php
/**
 * _blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\helpers\Url;
use p2m\helpers\FA;

$this->title = 'Thank You';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>

<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center">Your application is complete.</h2>
				<hr>
			</div>
			<div class="col-md-8">
				<p>Thanks again! Your contribution will help make Maleny Music Festival <?= date("Y") ?> happen. You should hear from Pedro shortly.</p>
				<p>Your Volunteers Coordinator for Maleny Music Festival 2017 is Pedro. He's the chap pictured wearing the top hat. If you have any questions about volunteering, or have volunteered before but not recieved the email invitation to apply, contact him at <strong><a href="m&#x61;i&#108;&#x74;o&#58;&#x76;o&#x6c;&#x6c;i&#x65;s&#64;&#x6d;a&#108;&#x65;n&#x79;&#x6d;u&#x73;&#x69;c&#x66;e&#115;&#x74;i&#118;&#x61;l&#x2e;&#x63;o&#x6d;">&#118;o&#x6c;l&#x69;e&#x73;&#64;&#x6d;a&#x6c;e&#x6e;&#121;&#x6d;&#117;s&#105;c&#x66;e&#x73;t&#x69;v&#x61;l&#x2e;c&#x6f;&#109;</a></strong> or <strong>0400&nbsp;473&nbsp;376</strong>.</p>
				<p>Thanks again for your help – we couldn’t do it without you!</p>
			</div>
			<div class="col-md-4">
				<img src="<?= $assetDir ?>/img/vollies+pedro.jpg" alt="Vollies" width="300" height="450">
			</div>
		</div>
	</div>

</div>
