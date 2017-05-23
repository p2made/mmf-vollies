<?php
return [
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
];
