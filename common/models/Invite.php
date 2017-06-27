<?php

namespace common\models;

use Yii;
use \common\models\base\Invite as BaseInvite;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_invite".
 */
class Invite extends BaseInvite
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
