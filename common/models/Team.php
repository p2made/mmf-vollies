<?php

namespace common\models;

class Team extends \common\models\base\TeamBase
{

	/**
	 * @inheritdoc
	 * @return TeamQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new TeamQuery(get_called_class());
	}
}
