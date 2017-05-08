<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%auth_rule}}".
 *
 * @property string $name
 * @property resource $data
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property AuthItem[] $authItems
 */
class AuthRule extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%auth_rule}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['name'], 'required'],
			[['data'], 'string'],
			[['created_at', 'updated_at'], 'safe'],
			[['created_by', 'updated_by'], 'integer'],
			[['name'], 'string', 'max' => 64],
			[['name'], 'unique'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'name' => 'Name',
			'data' => 'Data',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAuthItems()
	{
		return $this->hasMany(AuthItem::className(), ['rule_name' => 'name']);
	}

	/**
	 * @inheritdoc
	 * @return AuthRuleQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new AuthRuleQuery(get_called_class());
	}
}
?>


