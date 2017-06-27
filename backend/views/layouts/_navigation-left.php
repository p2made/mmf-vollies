<?php
/**
 * navigation-left.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

use p2m\widgets\MetisNav;
use p2m\helpers\FA;

$arrowIcon = FA::i('arrow')->tag('span');
?>
<section class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<!--<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</li>-->
			<li><?= Html::a(
				FA::fw('dashboard') . ' Dashboard',
				Yii::$app->homeUrl
			) ?></li><!-- Dashboard -->
			<li><?= Html::a(
				FA::fw('group') . 'Users',
				Url::to(['/user/admin/index'])
			) ?></li><!-- Users -->
			<li><?= Html::a(
				FA::fw('group') . 'Profiles',
				Url::to(['/profile/index'])
			) ?></li><!-- Profiles -->
			<li><?= Html::a(
				FA::fw('group') . 'Teams',
				Url::to(['/team/index'])
			) ?></li><!-- Teams -->
			<li><?= Html::a(
				FA::fw('group') . 'Jobs',
				Url::to(['/job/index'])
			) ?></li><!-- Jobs -->
			<li><?= Html::a(
				FA::fw('group') . 'Applications',
				Url::to(['/application/index'])
			) ?></li><!-- Applications -->
			<li><?= Html::a(
				FA::fw('group') . 'Commitments',
				Url::to(['/commitment/index'])
			) ?></li><!-- Commitments -->
			<li><?= Html::a(
				FA::fw('group') . 'Histories',
				Url::to(['/history/index'])
			) ?></li><!-- Histories -->

			<li>
				<a href="#"><?= FA::fw('sitemap') ?> Multi-Level Dropdown<?= $arrowIcon ?></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Third Level <?= $arrowIcon ?></a>
						<ul class="nav nav-third-level">
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
						</ul>
					</li>
				</ul>
			</li><!-- Multi-Level Dropdown -->
			<li>
				<a href="#"><?= FA::fw('files-o') ?> Sample Pages<?= $arrowIcon ?></a>
				<?= MetisNav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
						[ // Signup Page for basic
							'label' => '<span class="glyphicon glyphicon-user fa-fw"></span> Signup Page',
							'url' => ['/site/signup'],
							'visible' =>Yii::$app->user->isGuest
						],
						[ // login Page for basic
							'label' => '<span class="fa fa-lock fa-fw"></span> Login Page',
							'url' => ['/site/login'],
							'visible' =>Yii::$app->user->isGuest
						],
					],
				]) ?>
			</li><!-- Sample Pages -->
			<li>
				<a href="#"><?= FA::fw('coffee') ?> Developer<?= $arrowIcon ?></a>
				<?= MetisNav::widget([
					'encodeLabels' => false,
					'options' => ['class' => 'nav nav-second-level'],
					'items' => [
						['label' => '<span class="fa fa-file-code-o fa-fw"></span> Gii', 'url' => ['/gii']],
						['label' => '<span class="fa fa-dashboard fa-fw"></span> Debug', 'url' => ['/debug']],
					],
				]) ?>
			</li><!-- Developer -->
		</ul>
	</div>
</section>

<!--
-->
