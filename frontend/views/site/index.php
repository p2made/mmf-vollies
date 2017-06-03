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
use yii\helpers\Url;

$this->title = 'Home';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@frontend/assets/lib'
);
?>

<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-md-12">
				<hr>
				<h2 class="intro-text text-center">Thanks for helping!</h2>
				<hr>
			</div>
			<div class="col-md-8">
				<p>Volunteering is a great way to support and get involved with the Maleny Music Festival.</p>
				<p>We  offer volunteers a 3 day Festival pass in return for working 8 hours during the event, or for helping set up/take down the Festival (hours as required during the week before the event).</p>
				<p>We also provide a dedicated volunteer tent where you can recharge and refresh before or after your shifts. All volunteers have to complete a brief Safety Induction before they start work.</p>
				<p>Your Volunteers Coordinator for Maleny Music Festival 2017 is Pedro. He's the chap pictured wearing the top hat. If you have any questions about volunteering, or have volunteered before but not recieved the email invitation to apply, contact him at <strong><a href="m&#x61;i&#108;&#x74;o&#58;&#x76;o&#x6c;&#x6c;i&#x65;s&#64;&#x6d;a&#108;&#x65;n&#x79;&#x6d;u&#x73;&#x69;c&#x66;e&#115;&#x74;i&#118;&#x61;l&#x2e;&#x63;o&#x6d;">&#118;o&#x6c;l&#x69;e&#x73;&#64;&#x6d;a&#x6c;e&#x6e;&#121;&#x6d;&#117;s&#105;c&#x66;e&#x73;t&#x69;v&#x61;l&#x2e;c&#x6f;&#109;</a></strong> or <strong>0400&nbsp;473&nbsp;376</strong>.</p>
				<p><strong>Important notes for volunteering</strong> &#8211; Volunteers need to:</p>
				<ul>
					<li>be over 18 years of age</li>
					<li>complete a brief safety induction before starting work</li>
					<li>provide a photo ID before starting work</li>
				</ul>
				<p>Thanks again for your help – we couldn’t do it without you!</p>
			</div>
			<div class="col-md-4">
				<img src="<?= $assetDir ?>/img/vollies+pedro.jpg" alt="Vollies" width="300" height="450">
			</div>
			<div class="col-md-12"><hr></div>
			<div class="col-md-4 col-md-offset-1">
				<?= Html::a('New Volunteers Start Here', ['/user/registration/register'], [
					'class' => 'btn btn-warning btn-lg btn-block',
					'role' => 'button',
				]) ?>
			</div>
			<div class="col-md-4 col-md-offset-2">
				<?= Html::a('Returning Volunteers Start Here', ['/user/security/login'], [
					'class' => 'btn btn-success btn-lg btn-block',
					'role' => 'button',
				]) ?>
			</div>
		</div>
	</div>

</div>
