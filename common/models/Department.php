<?php

namespace common\models;

use Yii;
use \common\models\base\Department as BaseDepartment;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "Department".
 */
class Department extends BaseDepartment
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
