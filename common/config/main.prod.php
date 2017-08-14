<?php
$_urlBase = 'malenymusicfestival.com';
$_urlBaseFrontend = 'http://vollies'  . $_urlBase;
$_urlBaseBackend  = 'http://volhq.'   . $_urlBase;
$_urlBaseAssets   = 'http://static.'  . $_urlBase;

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'modules' => [
		'user' => require(__DIR__ . '/user.php'),
	],
	'components' => [
		'assetManager' => [
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
		'urlManagerAssets' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseAssets,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];
