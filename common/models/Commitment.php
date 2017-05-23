<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_commitment".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property string $year
 * @property string $job
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\User $user
 * @property string $aliasModel
 */

class Commitment extends \common\models\base\Commitment
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%commitment}}';
	}

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
