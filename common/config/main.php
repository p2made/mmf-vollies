<?php
$_urlBase = 'mmf.yii.dev';
$_urlBaseFrontend = '//vollies.' . $_urlBase;
$_urlBaseBackend = '//volhq.'    . $_urlBase;
//$_urlBaseBackend = '//static.'   . $_urlBase;

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		// NOTE: in the yii2-advanced-app, the user component should be updated in
		// 'frontend/config/main.php' and/or 'backend/config/main.php' (OR you can add it
		// to 'common/config' if you remove it from frontend/backend)
		'user' => [
			'class' => 'amnah\yii2\user\components\User',
		],
		'assetManager' => [
			//'appendTimestamp' => true,
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
			],
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			//'enableStrictParsing' => true,
			'suffix' => '.mmf',
			'rules' => [
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
				'<view:[a-zA-Z0-9-]+>/'=>'site/page',
			]
		],
		'urlManagerFrontEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseFrontend,
		],
		'urlManagerBackEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseBackend,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
	'modules' => [
		'user' => [
			//'class' => 'common\modules\UserModule',
			'class' => 'amnah\yii2\user\Module',
			// set custom module properties here ...
		],
	],
];

// ----- ^ ----- ^ ----- ^ ----- ^ ----- ^ -----

/*
$_urlBase = 'mmf.yii.dev';
$_urlBaseFrontend = '//vollies.' . $_urlBase;
$_urlBaseBackend = '//volhq.'    . $_urlBase;
$_urlBaseBackend = '//static.'   . $_urlBase;

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		//'authManager' => [
		//	'class' => 'yii\rbac\DbManager',
		//],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];
*/
