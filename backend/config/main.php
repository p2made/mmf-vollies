<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'mff-backend',
	'name' => 'Maleny Music Festival VolHQ',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'backend\controllers',
	'bootstrap' => ['log'],
	'modules' => [
		'user' => require(__DIR__ . '/user.php'),
	],
	'components' => [
		'view' => [
			'theme' => [
				'pathMap' => [
					'@dektrium/user/views' => '@backend/views/user'
				],
			],
		],
		'request' => [
			'csrfParam' => '_csrf-backend',
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
		],
		'session' => [
			// this is the name of the session cookie used for login on the backend
			'name' => 'advanced-backend',
		],
		'assetManager' => [
			'basePath' => '@assets/web/backend/pub',
			'baseUrl' => '@assetsUrl/backend/pub',
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
