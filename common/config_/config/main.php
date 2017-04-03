<?php
/*
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * #####                                                           #####
 * #####   Customise these lines to suit your host configuration   #####
 * #####                                                           #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */
$_urlBase = 'mmf.yii.dev';
$_urlBaseFrontend = 'http://vollies'  . $_urlBase;
$_urlBaseBackend  = 'http://volhq.'   . $_urlBase;
$_urlBaseAssets   = 'http://static.'  . $_urlBase;

/*
	vollies.mmf.yii.dev
	volhq.mmf.yii.dev
	static.mmf.yii.dev
*/

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		// NOTE: in the yii2-advanced-app, the user component should be updated in
		// 'frontend/config/main.php' and/or 'backend/config/main.php' (OR you can add it
		// to 'common/config' if you remove it from frontend/backend)
		/*
		'user' => [],
		'user' => [
			'class' => 'amnah\yii2\user\components\User',
		],
		*/
		'authManager' => [
			'class' => 'yii\rbac\DbManager',
		],
		'assetManager' => [
			//'basePath' => '@assets/web/pub',
			//'baseUrl' => '@assetsUrl/pub',
			//'appendTimestamp' => true, // useful while developing custom assets
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
	/*
	'modules' => [
		'user' => [
			'class' => 'amnah\yii2\user\Module',
			// set custom module properties here ...
		],
	],
	*/
];
