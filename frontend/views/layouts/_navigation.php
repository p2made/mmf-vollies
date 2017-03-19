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
	['label' => 'Info', 'url' =>['/site/page', 'view' => 'volunteer-info']],
	['label' => 'Apply', 'url' =>['/site/page', 'view' => 'volunteer-apply']],
	['label' => 'application', 'url' =>['/application/index']],
	['label' => 'commitment', 'url' =>['/commitment/index']],
	['label' => 'department', 'url' =>['/department/index']],
	['label' => 'history-item', 'url' =>['/history-item/index']],
	['label' => 'job', 'url' =>['/job/index']],
	['label' => 'profile', 'url' =>['/profile/index']],
	['label' => 'user', 'url' =>['/user/index']],
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
