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
	['label' => 'Profile', 'url' =>['/site/page', 'view' => 'profile']],
	['label' => 'Application', 'url' =>['/site/page', 'view' => 'application']],
	['label' => 'Models', 'items' => [
		['label' => 'Application', 'url' =>['/application/index']],
		['label' => 'Commitment', 'url' =>['/commitment/index']],
		['label' => 'History', 'url' =>['/history/index']],
		['label' => 'Job', 'url' =>['/job/index']],
		['label' => 'Profile', 'url' =>['/profile/index']],
		['label' => 'Team', 'url' =>['/team/index']],
		['label' => 'User', 'url' =>['/user/index']],
	]],
	['label' => 'Dev', 'items' => [
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
	]],
];
if (Yii::$app->user->isGuest) {
	//$menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	//$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
} else {
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/site/logout'],
		'linkOptions' => ['data-method' => 'post']
	];
}

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

/*
	['label' => 'Dev', 'items' => [
		['label' => 'Info', 'url' =>['/site/page', 'view' => 'volunteer-info']],
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
	]],
*/


