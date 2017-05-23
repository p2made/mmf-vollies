<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_application".
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
 * @property \common\models\Job $jobChoice1
 * @property \common\models\Job $jobChoice2
 * @property \common\models\Job $jobChoice3
 * @property \common\models\User $user
 * @property string $aliasModel
 */

class Application extends \common\models\base\Application
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%application}}';
	}

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				//'class' => BlameableBehavior::className(),
				//'class' => TimestampBehavior::className(),
				# custom behaviors
			]
		);
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return ArrayHelper::merge(
			 parent::rules(),
			 [
				# custom validation rules
			 ]
		);
	}

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
			'bestTIme' => 'I am...',
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
		return $this->hasOne(\common\models\Job::className(), ['id' => 'job_choice_1']);
	}
	 */

	/**
	 * @return \yii\db\ActiveQuery
	public function getJobChoice2()
	{
		return $this->hasOne(\common\models\Job::className(), ['id' => 'job_choice_2']);
	}
	 */

	/**
	 * @return \yii\db\ActiveQuery
	public function getJobChoice3()
	{
		return $this->hasOne(\common\models\Job::className(), ['id' => 'job_choice_3']);
	}
	 */

	/**
	 * @return \yii\db\ActiveQuery
	public function getUser()
	{
		return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
	}
	 */

	/**
	 * @inheritdoc
	 * @return \common\models\ApplicationQuery the active query used by this AR class.
	public static function find()
	{
		return new \common\models\ApplicationQuery(get_called_class());
	}
	 */
}
