<?php
return [
	'class' => 'yii\swiftmailer\Mailer',
	//'viewPath' => '@common/mail',
	// send all mails to a file by default. You have to set
	// 'useFileTransport' to false and configure a transport
	// for the mailer to send real emails.
	'useFileTransport' => false,
	/*
	'transport' => [
		'class' => 'Swift_SmtpTransport',
		'host' => 'smtp.gmail.com',
		'username' => 'mmf.vollies@gmail.com',
		'password' => 'ePG-zr3-6Lq-xRf',
		'port' => '465',
		'encryption' => 'ssl',
	],
	*/
	'messageConfig' => [
		'from' => ['vollies@malenymusicfestival.com' => 'MMF Vollies'],
		//'replyTo' => ['vollies@malenymusicfestival.com' => 'MMF Vollies'],
		'charset' => 'UTF-8',
	],
];
