<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
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
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];

/*
$_urlBase = 'mmf.yii.dev';
$_urlBaseFrontend = '//'     . $_urlBase;
$_urlBaseBackend = '//hq.'   . $_urlBase;

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'modules' => [
	],
	'components' => [
		//'authManager' => [
		//	'class' => 'yii\rbac\DbManager',
		//],
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
];
*/
