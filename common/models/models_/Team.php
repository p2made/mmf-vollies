<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%team}}".
 *
 * @property integer $id
 * @property integer $lead_id
 * @property integer $sequence
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Commitment[] $commitments
 * @property Job[] $jobs
 * @property User $lead
 */
class Team extends \yii\db\ActiveRecord
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
			[['lead_id', 'sequence', 'created_by', 'updated_by'], 'integer'],
			[['sequence', 'name'], 'required'],
			[['description'], 'string'],
			[['created_at', 'updated_at'], 'safe'],
			[['name'], 'string', 'max' => 24],
			[['lead_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['lead_id' => 'id']],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'lead_id' => 'Lead ID',
			'sequence' => 'Sequence',
			'name' => 'Name',
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
	public function getCommitments()
	{
		return $this->hasMany(Commitment::className(), ['team_id' => 'id']);
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
	public function getLead()
	{
		return $this->hasOne(User::className(), ['id' => 'lead_id']);
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
?>


