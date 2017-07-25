<?php

namespace common\models;

use Yii;
use \common\models\base\Application as BaseApplication;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_application".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $job_choice_1
 * @property integer $job_choice_2
 * @property integer $job_choice_3
 * @property string $year
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
 * @property string $bestCallingTime
 * @property integer $accepted
 * @property integer $team_id
 * @property integer $rejected
 * @property string $rejectedReason
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\Job $jobChoice1
 * @property \common\models\Job $jobChoice2
 * @property \common\models\Job $jobChoice3
 * @property \common\models\Profile $user
 * @property string $aliasModel
 */
class Application extends BaseApplication
{

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'job_choice_1' => 'Job Choice 1',
			'job_choice_2' => 'Job Choice 2',
			'job_choice_3' => 'Job Choice 3',
			'year' => 'Year',
			'availableFromDate' => 'Available from Date',
			'availableFromTime' => 'from Time',
			'availableToDate' => 'Available to Date',
			'availableToTime' => 'to Time',
			'bestTIme' => 'I am...',
			'availabilityNotes' => 'Availability Notes',
			'double' => 'Double',
			'otherNotes' => 'Other Notes',
			'referee' => 'Referee',
			'refereeRelationship' => 'Referee Relationship',
			'refereePhone' => 'Referee Phone',
			'bestCallingTime' => 'Best Calling Time',
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

	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				# custom behaviors
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				# custom validation rules
			]
		);
	}

	public function vollieName()
	{
		if ($this->user->preferredName) {
			return $this->user->preferredName;
		}
		return $this->user->givenName;
	}

	public function jobChoices()
	{
		$choices = [$this->jobChoice1->name];
		if ($this->jobChoice2) {
			$choices[] = $this->jobChoice2->name;
		}
		if ($this->jobChoice3) {
			$choices[] = $this->jobChoice3->name;
		}
		return $choices;
	}
}
