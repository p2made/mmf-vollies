<?php

namespace common\models;

class History extends \common\models\base\HistoryBase
{

	/**
	 * @inheritdoc
	 * @return HistoryQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new HistoryQuery(get_called_class());
	}
}
