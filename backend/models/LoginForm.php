<?php

namespace backend\models;

class LoginForm extends \dektrium\user\models\LoginForm
{
	public function attributeLabels()
	{
		return [
			'login'      => 'Email Address',
			'password'   => 'Password',
			'rememberMe' => 'Remember me next time',
		];
	}
}
