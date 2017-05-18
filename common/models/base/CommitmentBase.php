<?php

namespace common\models\base;

use Yii;
use common\models\User;

/**
 * This is the model class for table "{{%commitment}}".
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
			* @property User $user
	*/
class CommitmentBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%commitment}}';
}

/**
* @inheritdoc
*/
public function rules()
{
		return [
			[['user_id', 'year', 'job'], 'required'],
			[['user_id', 'application_id', 'team_id', 'hours', 'reinvite', 'created_by', 'updated_by'], 'integer'],
			[['year', 'created_at', 'updated_at'], 'safe'],
			[['report'], 'string'],
			[['job'], 'string', 'max' => 48],
			[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
		];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
	'id' => 'ID',
	'user_id' => 'User ID',
	'application_id' => 'Application ID',
	'team_id' => 'Team ID',
	'year' => 'Year',
	'job' => 'Job',
	'hours' => 'Hours',
	'report' => 'Report',
	'reinvite' => 'Reinvite',
	'created_at' => 'Created At',
	'created_by' => 'Created By',
	'updated_at' => 'Updated At',
	'updated_by' => 'Updated By',
];
}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getUser()
	{
	return $this->hasOne(User::className(), ['id' => 'user_id']);
	}

	/**
	 * @inheritdoc
	 * @return CommitmentQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new CommitmentQuery(get_called_class());
}
}