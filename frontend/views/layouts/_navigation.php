<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;
use p2m\helpers\FA;

$menuItems = [
	['label' => 'Home', 'url' => ['/site/index']],
	['label' => 'Models', 'items' => [
		['label' => 'User', 'url' =>['/user/index']],
		['label' => 'Account', 'url' =>['/user/account']],
		['label' => 'Profile', 'url' =>['/user/profile']],
		['label' => 'Application', 'url' =>['/application/create']],
		'<li role="presentation" class="divider"></li>',
		['label' => 'Profile', 'url' =>['/site/page', 'view' => 'profile']],
		['label' => 'Application', 'url' =>['/site/page', 'view' => 'application']],
		['label' => 'Thank You', 'url' =>['/site/page', 'view' => 'thank-you']],
	]],
	['label' => 'Dev', 'items' => [
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
		'<li role="presentation" class="divider"></li>',
		['label' => 'User Actions', 'url' =>['/site/page', 'view' => 'user-actions']],
	]],
];
/*
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Login', 'url' => ['/user/login']];
	$menuItems[] = ['label' => 'Signup', 'url' => ['/user/register']];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/user/logout'],
		'linkOptions' => ['data-method' => 'POST']
	];
}
*/
NavBar::begin([
	'brandLabel' => 'P2 Business Casual',
	'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-default',
	],
]);
echo Nav::widget([
	'options' => ['class' => 'nav navbar-nav'],
	'items' => $menuItems,
]);
NavBar::end();
