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

$menuItems = [
	['label' => 'Home', 'url' => ['/site/index']],
	['label' => 'Dev', 'items' => [
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
		'<li role="presentation" class="divider"></li>',
		['label' => 'Mailout', 'url' => ['/site/page', 'view' => 'mailout']],
	]],
	['label' => 'Models', 'items' => [
		['label' => 'Invite', 'url' =>['/invite/index']],
		['label' => 'User', 'url' =>['/user/index']],
		['label' => 'Account', 'url' =>['/user/settings/account']],
		['label' => 'Profile', 'url' =>['/user/settings/profile']],
		['label' => 'Application', 'url' =>['/application/create']],
		'<li role="presentation" class="divider"></li>',
		['label' => 'Profile', 'url' =>['/site/page', 'view' => 'profile']],
		['label' => 'Application', 'url' =>['/site/page', 'view' => 'application']],
		['label' => 'Thank You', 'url' =>['/site/page', 'view' => 'thank-you']],
	]],
	['label' => 'Users', 'items' => [
		['label' => 'Index', 'url' => ['/user/admin/index']],
		['label' => 'Register', 'url' => ['/user/registration/register']],
		['label' => 'Resend', 'url' => ['/user/registration/resend']],
		['label' => 'Confirm (requires id and token)', 'url' => ['/user/registration/confirm']],
		['label' => 'Login', 'url' => ['/user/security/login']],
		['label' => 'Logout', 'url' => ['/user/security/logout']],
		['label' => 'Recovery Request', 'url' => ['/user/recovery/request']],
		['label' => 'Recovery Reset', 'url' => ['/user/recovery/reset']],
		['label' => 'Profile Settings', 'url' => ['/user/settings/profile']],
		['label' => 'Account Settings', 'url' => ['/user/settings/account']],
		['label' => 'Networks Settings', 'url' => ['/user/settings/networks']],
		['label' => 'Profile View (requires id)', 'url' => ['/user/profile/show']],
	]],
];
if (Yii::$app->user->isGuest) {
	$menuItems[] = ['label' => 'Login', 'url' => ['/user/security/login']];
	$menuItems[] = ['label' => 'Signup', 'url' => ['/user/registration/register']];
} else {
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
