<?php

namespace common\models;

use Yii;
use \common\models\base\Role as BaseRole;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_role".
 *
 * @property integer $id
 * @property string $name
 * @property integer $can_admin
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \common\models\User[] $users
 * @property string $aliasModel
 */

class Role extends BaseRole
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_role';
	}

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				//'class' => TimestampBehavior::className(),
				# custom behaviors
			]
		);
	}

	/**
	 * @inheritdoc
	 */
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
