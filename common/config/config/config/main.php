<?php
$_urlBase = 'mmf.yii.dev';
$_urlBaseFrontend = '//'     . $_urlBase;
$_urlBaseBackend = '//hq.'   . $_urlBase;

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'modules' => [
	],
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
				/*'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'js' => ['//code.jquery.com/jquery-1.11.2.min.js'],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null,
					'css' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null,
					'js' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null,
					'css' => ['//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'],
					'js' => ['//code.jquery.com/ui/1.11.2/jquery-ui.min.js'],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null,
					'css' => ['//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'],
				],*/
			],
		],
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
