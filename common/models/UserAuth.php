<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_auth}}".
 *
 * Class \common\models\UserAuth
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $provider
 * @property string $provider_id
 * @property string $provider_attributes
 * @property string $created_at
 * @property string $updated_at
 *
 * @property User $user
 */
class UserAuth extends \amnah\yii2\user\models\UserAuth
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%user_auth}}';
	}

	/**
	 * @inheritdoc
	 */
	//public function rules()

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'provider' => 'Provider',
			'provider_id' => 'Provider ID',
			'provider_attributes' => 'Provider Attributes',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	//public function getUser()
}
