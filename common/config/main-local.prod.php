<?php
return [
	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=wezmckee_mmfvols',
			'username' => 'wezmckee_mmfvols',
			'password' => 'NHAvNjDE4vilJYrTetZa7D2i5b54SurKHmsd',
			'tablePrefix' => 'mmf_',
			'charset' => 'utf8',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
			'useFileTransport' => false,
			'messageConfig' => [
				'from' => ['no-reply@malenymusicfestival.com' => 'Maleny Music Festival Vollies'],
				'replyTo' => ['vollies@malenymusicfestival.com' => 'MMF Volunteers Coordinator'],
				'charset' => 'utf8',
			],
		],
	],
];
