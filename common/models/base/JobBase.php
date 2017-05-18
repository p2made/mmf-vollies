<?php

namespace common\models\base;

use Yii;
use common\models\Application;
use common\models\JobMenuGroup;
use common\models\Team;

/**
 * This is the model class for table "{{%job}}".
*
	* @property integer $id
	* @property integer $team_id
	* @property integer $group_id
	* @property integer $sequence
	* @property string $name
	* @property string $description
	* @property string $created_at
	* @property string $updated_at
	*
			* @property Application[] $applications
			* @property Application[] $applications0
			* @property Application[] $applications1
			* @property JobMenuGroup $group
			* @property Team $team
	*/
class JobBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%job}}';
}

/**
* @inheritdoc
*/
public function rules()
{
		return [
			[['team_id', 'group_id', 'sequence'], 'integer'],
			[['group_id', 'sequence', 'name'], 'required'],
			[['description'], 'string'],
			[['created_at', 'updated_at'], 'safe'],
			[['name'], 'string', 'max' => 48],
			[['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => JobMenuGroup::className(), 'targetAttribute' => ['group_id' => 'id']],
			[['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'id']],
		];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
	'id' => 'ID',
	'team_id' => 'Team ID',
	'group_id' => 'Group ID',
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
	public function getApplications()
	{
	return $this->hasMany(Application::className(), ['job_choice_1' => 'id']);
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getApplications0()
	{
	return $this->hasMany(Application::className(), ['job_choice_2' => 'id']);
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getApplications1()
	{
	return $this->hasMany(Application::className(), ['job_choice_3' => 'id']);
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getGroup()
	{
	return $this->hasOne(JobMenuGroup::className(), ['id' => 'group_id']);
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getTeam()
	{
	return $this->hasOne(Team::className(), ['id' => 'team_id']);
	}

	/**
	 * @inheritdoc
	 * @return JobQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new JobQuery(get_called_class());
}
}