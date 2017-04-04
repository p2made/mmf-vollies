<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%role}}".
 *
 * Class \common\models\Role
 *
 * @property integer $id
 * @property string $name
 * @property integer $can_admin
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property User[] $users
 */
class Role extends \amnah\yii2\user\models\Role
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%role}}';
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
			'name' => 'Name',
			'can_admin' => 'Can Admin',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUsers()
	{
		return $this->hasMany(User::className(), ['role_id' => 'id']);
	}
}
