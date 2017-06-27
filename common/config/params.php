<?php
return [
	'adminEmail' => 'admin@example.com',
	'supportEmail' => 'support@example.com',
	'user.passwordResetTokenExpire' => 3600,

	'p2m' => [
		'assets' => [
			'useStatic' => true,
			'staticEnd' => [
				'basePath' => '@assets',
				'baseUrl' => '@assetsUrl',
			],
		],
		'reverseDomain' => 'dev.yii.mmf',
	],
];
