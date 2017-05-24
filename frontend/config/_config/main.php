<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'frontend\controllers',
	'bootstrap' => ['log'],
	'modules' => [],
	'components' => [
		'request' => [
			'csrfParam' => '_csrf-frontend',
		],
		'view' => [
			'theme' => [
				'pathMap' => [
					'@vendor/amnah/yii2-user/views/default' => '@frontend/views/user'
				],
			],
		],
		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'assetManager' => [
			'basePath' => '@assets/web/frontend/pub',
			'baseUrl' => '@assetsUrl/frontend/pub',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],
	'modules' => [
		'user' => [
			'controllerMap' => [
				'default' => 'frontend\controllers\UserProfileController',
			],
		],
	],
	'params' => $params,
];
