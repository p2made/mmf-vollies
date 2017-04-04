<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_token}}".
 *
 * Class \common\models\UserToken
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $type
 * @property string $token
 * @property string $data
 * @property string $created_at
 * @property string $expired_at
 *
 * @property User $user
 */
class UserToken extends \amnah\yii2\user\models\UserToken
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%user_token}}';
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
			'type' => 'Type',
			'token' => 'Token',
			'data' => 'Data',
			'created_at' => 'Created At',
			'expired_at' => 'Expired At',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	//public function getUser()
}
