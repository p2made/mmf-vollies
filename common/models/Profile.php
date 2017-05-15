<?php

namespace common\models;

class Profile extends \common\models\base\ProfileBase
{

	/**
	 * @inheritdoc
	 * @return ProfileQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new ProfileQuery(get_called_class());
	}
}
