<?php

namespace common\models\base;

use Yii;
use common\models\Job;
use common\models\User;

/**
 * This is the model class for table "{{%team}}".
*
	* @property integer $id
	* @property integer $head_id
	* @property integer $sequence
	* @property string $name
	* @property string $description
	* @property string $created_at
	* @property string $updated_at
	*
			* @property Job[] $jobs
			* @property User $head
	*/
class TeamBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%team}}';
}

/**
* @inheritdoc
*/
public function rules()
{
		return [
			[['head_id', 'sequence'], 'integer'],
			[['sequence', 'name'], 'required'],
			[['description'], 'string'],
			[['created_at', 'updated_at'], 'safe'],
			[['name'], 'string', 'max' => 24],
			[['head_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['head_id' => 'id']],
		];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
	'id' => 'ID',
	'head_id' => 'Head ID',
	'sequence' => 'Sequence',
	'name' => 'Name',
	'description' => 'Description',
	'created_at' => 'Created At',
	'updated_at' => 'Updated At',
];
}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getJobs()
	{
	return $this->hasMany(Job::className(), ['team_id' => 'id']);
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getHead()
	{
	return $this->hasOne(User::className(), ['id' => 'head_id']);
	}

	/**
	 * @inheritdoc
	 * @return TeamQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new TeamQuery(get_called_class());
}
}