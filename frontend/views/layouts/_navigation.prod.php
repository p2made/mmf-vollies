<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\ArrayHelper;

$menuItems = [
	'<li><a href="http://malenymusicfestival.com">MMF Main Site</a></li>',
	['label' => 'Home', 'url' => ['/site/index']],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Login', 'url' => ['/user/security/login']];
	$menuItems[] = ['label' => 'Signup', 'url' => ['/user/registration/register']];
} else {
	$menuItems[] = ['label' => 'Account', 'url' => ['/user/settings/account']];
	$menuItems[] = ['label' => 'Profile', 'url' => ['/user/settings/profile']];
	$menuItems[] = [
		'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
		'url' => ['/user/security/logout'],
		'linkOptions' => ['data-method' => 'POST']
	];
}
NavBar::begin([
	'brandLabel' => 'MMF Vollies',
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
