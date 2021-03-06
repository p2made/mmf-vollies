<?php

namespace common\models;

use Yii;
use \common\models\base\History as BaseHistory;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_history".
 */
class History extends BaseHistory
{

public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				# custom behaviors
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			 parent::rules(),
			 [
				  # custom validation rules
			 ]
		);
	}
}
