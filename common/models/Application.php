<?php

namespace common\models;

class Application extends \common\models\base\ApplicationBase
{


	/**
	 * @inheritdoc
	 * @return ApplicationQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new ApplicationQuery(get_called_class());
	}
}
