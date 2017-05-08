<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%job}}".
 *
 * @property integer $id
 * @property integer $team_id
 * @property integer $sequence
 * @property string $name
 * @property string $menuGroup
 * @property string $description
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property ApplicationJob[] $applicationJobs
 * @property Team $team
 */
class Job extends \yii\db\ActiveRecord
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
			[['team_id', 'sequence', 'name', 'menuGroup'], 'required'],
			[['team_id', 'sequence', 'created_by', 'updated_by'], 'integer'],
			[['description'], 'string'],
			[['created_at', 'updated_at'], 'safe'],
			[['name', 'menuGroup'], 'string', 'max' => 24],
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
			'sequence' => 'Sequence',
			'name' => 'Name',
			'menuGroup' => 'Menu Group',
			'description' => 'Description',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApplicationJobs()
	{
		return $this->hasMany(ApplicationJob::className(), ['job_id' => 'id']);
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
?>


