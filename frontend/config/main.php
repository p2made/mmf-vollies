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
	'modules' => [
		'user' => [
			// following line will restrict access to admin controller from frontend application
			'as frontend' => 'dektrium\user\filters\FrontendFilter',
		],
	],
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@dektrium/user/views' => '@frontend/views/user'
				],
			],
		],
		'request' => [
			'csrfParam' => '_csrf-frontend',
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
	'params' => $params,
];
