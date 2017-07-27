<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_job".
 */
class Job extends \backend\models\base\Job
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
