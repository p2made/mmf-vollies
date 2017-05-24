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
			//'viewPath' => '@common/mail',
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				'host' => 'smtp.gmail.com',
				'username' => 'mmf.vollies@gmail.com',
				'password' => 'ePG-zr3-6Lq-xRf',
				'port' => '465',
				'encryption' => 'ssl',
			],
			'messageConfig' => [
				'from' => ['mmf.vollies@gmail.com' => 'MMF Vollies'],
				'replyTo' => ['vollies@malenymusicfestival.com' => 'MMF Vollies'],
				'charset' => 'UTF-8',
			],
		],
	],
];
