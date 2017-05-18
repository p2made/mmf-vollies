<?php

namespace common\models;

/**
 * This is the model class for table "{{%application}}".
 *
	* @property integer $id
	* @property integer $user_id
	* @property integer $job_choice_1
	* @property integer $job_choice_2
	* @property integer $job_choice_3
	* @property string $availableFromDate
	* @property integer $availableFromTime
	* @property string $availableToDate
	* @property integer $availableToTime
	* @property integer $bestTIme
	* @property string $availabilityNotes
	* @property integer $double
	* @property string $otherNotes
	* @property string $referee
	* @property string $refereeRelationship
	* @property string $refereePhone
	* @property integer $accepted
	* @property integer $team_id
	* @property integer $rejected
	* @property string $rejectedReason
	* @property string $created_at
	* @property integer $created_by
	* @property string $updated_at
	* @property integer $updated_by
	*
		* @property Job $jobChoice1
		* @property Job $jobChoice2
		* @property Job $jobChoice3
		* @property User $user
 */

class Application extends \common\models\base\ApplicationBase
{
	/**
	 * @inheritdoc
	public static function tableName()
	{
		return '{{%application}}';
	}
	 */

	/**
	 * @inheritdoc
	public function rules()
	{
		return [
			[['user_id', 'job_choice_1', 'availableFromDate', 'availableFromTime', 'availableToDate', 'availableToTime'], 'required'],
			[['user_id', 'job_choice_1', 'job_choice_2', 'job_choice_3', 'availableFromTime', 'availableToTime', 'bestTIme', 'double', 'accepted', 'team_id', 'rejected', 'created_by', 'updated_by'], 'integer'],
			[['availabilityNotes', 'otherNotes', 'rejectedReason'], 'string'],
			[['created_at', 'updated_at'], 'safe'],
			[['availableFromDate', 'availableToDate'], 'string', 'max' => 8],
			[['referee'], 'string', 'max' => 64],
			[['refereeRelationship', 'refereePhone'], 'string', 'max' => 32],
			[['job_choice_1'], 'exist', 'skipOnError' => true, 'targetClass' => Job::className(), 'targetAttribute' => ['job_choice_1' => 'id']],
			[['job_choice_2'], 'exist', 'skipOnError' => true, 'targetClass' => Job::className(), 'targetAttribute' => ['job_choice_2' => 'id']],
			[['job_choice_3'], 'exist', 'skipOnError' => true, 'targetClass' => Job::className(), 'targetAttribute' => ['job_choice_3' => 'id']],
			[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
		];
	}
	 */

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'job_choice_1' => '1st Job Choice',
			'job_choice_2' => '2nd Job Choice',
			'job_choice_3' => '3rd Job Choice',
			'availableFromDate' => 'Available From Date',
			'availableFromTime' => 'from Time',
			'availableToDate' => 'Available To Date',
			'availableToTime' => 'to Time',
			'bestTIme' => 'I am an...',
			'availabilityNotes' => 'Availability Notes',
			'double' => 'Double',
			'otherNotes' => 'Other Notes',
			'referee' => 'Referee',
			'refereeRelationship' => 'Relationship',
			'refereePhone' => 'Phone',
			'accepted' => 'Accepted',
			'team_id' => 'Team ID',
			'rejected' => 'Rejected',
			'rejectedReason' => 'Rejected Reason',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	public function getJobChoice1()
	{
		return $this->hasOne(Job::className(), ['id' => 'job_choice_1']);
	}
	 */

	/**
	 * @return \yii\db\ActiveQuery
	public function getJobChoice2()
	{
		return $this->hasOne(Job::className(), ['id' => 'job_choice_2']);
	}
	 */

	/**
	 * @return \yii\db\ActiveQuery
	public function getJobChoice3()
	{
		return $this->hasOne(Job::className(), ['id' => 'job_choice_3']);
	}
	 */

	/**
	 * @return \yii\db\ActiveQuery
	public function getUser()
	{
		return $this->hasOne(User::className(), ['id' => 'user_id']);
	}
	 */

	/**
	 * @inheritdoc
	 * @return ApplicationQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new ApplicationQuery(get_called_class());
	}
}
