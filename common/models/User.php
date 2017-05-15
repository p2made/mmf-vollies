<?php

namespace common\models;

class User extends \common\models\base\UserBase
{

	/**
	 * @inheritdoc
	 * @return UserQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new UserQuery(get_called_class());
	}
}
