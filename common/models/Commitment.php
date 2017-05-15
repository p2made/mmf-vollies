<?php

namespace common\models;

class Commitment extends \common\models\base\CommitmentBase
{

	/**
	 * @inheritdoc
	 * @return CommitmentQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new CommitmentQuery(get_called_class());
	}
}
