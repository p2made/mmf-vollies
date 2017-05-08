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
use p2m\helpers\FA;

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
				<p><strong>Important notes for volunteering</strong> &#8211; Volunteers need to:</p>
				<ul>
					<li>be over 18 years of age</li>
					<li>complete a brief safety induction before starting work</li>
					<li>provide a photo/ID before starting work</li>
				</ul>
				<p>Thanks again for your help – we couldn’t do it without you!</p>
			</div>
			<div class="col-md-4">
				<img src="<?= $assetDir ?>/img/vollies-300x225.jpg" alt="Vollies" width="300" height="225">
			</div>
			<div class="col-md-4 col-md-offset-1">
				<a class="btn btn-primary btn-lg btn-block" href="<?= Url::to(['/site/signup']) ?>" role="button">New Volunteers Start Here</a>
			</div>
			<div class="col-md-4 col-md-offset-2">
				<a class="btn btn-primary btn-lg btn-block" href="<?= Url::to(['/site/login']) ?>" role="button">Returning Volunteers Start Here</a>
			</div>
		</div>
	</div>

</div>
<!-- /.container -->

<!--
				<p>Just complete the form below to register your interest.</p>
				<h3><span style="color: #ff0000;"><strong>* <a style="color: #ff0000;" href="http://www.malenymusicfestival.com/returning-volunteers/">Returning vollies click here for super fast re-registration!</a></strong></span></h3>
-->
