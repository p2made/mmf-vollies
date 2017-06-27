<?php

use dektrium\user\controllers\RegistrationController;
use dektrium\user\controllers\SecurityController;
use dektrium\user\controllers\SettingsController;

return [
	'as frontend' => 'dektrium\user\filters\FrontendFilter',
	'controllerMap' => [
		'registration' => [
			'class' => RegistrationController::className(),
			'on ' . RegistrationController::EVENT_AFTER_CONFIRM => function ($e) {
				Yii::$app->response->redirect(array('/user/settings/profile'))->send();
				Yii::$app->end();
			}
		],
		'security' => [
			'class' => SecurityController::className(),
			'on ' . SecurityController::EVENT_AFTER_LOGIN => function ($e) {
				Yii::$app->response->redirect(array('/user/settings/profile'))->send();
				Yii::$app->end();
			}
		],
		'settings' => [
			'class' => SettingsController::className(),
			'on ' . SettingsController::EVENT_AFTER_PROFILE_UPDATE => function ($e) {
				Yii::$app->response->redirect(array('/application/create'))->send();
				Yii::$app->end();
			}
		],
	],
];
