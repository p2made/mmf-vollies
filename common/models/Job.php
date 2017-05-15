<?php

namespace common\models;

class Job extends \common\models\base\JobBase
{

	/**
	 * @inheritdoc
	 * @return JobQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new JobQuery(get_called_class());
	}
}
