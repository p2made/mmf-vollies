<?php
/**
 * _blank.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Application */

common\assets\VolliesFormsAsset::register($this);

$user = \Yii::$app->user->identity;
$profile = $user->profile;
$prefName = $profile->preferredName;


$this->title = 'Thank You ' . $prefName . '!';
//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-md-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
					</h2>
				<hr>
			</div>
			<div class="col-md-12">

				<p>Your volunteer application for Maleny Music Festival <?= date("Y") ?> is complete.</p>

				<p>Check email at <?= $user->email ?> for an acknowlegement.</p>

			</div>
		</div>

	</div>
</div>
