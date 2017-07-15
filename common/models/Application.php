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
 * @property integer $bestTime
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
 *
 * @property string $vollieName
 * @property string $preferredName
 * @property string[] $jobChoices
 * @property string $jobPreference1
 * @property string $jobPreference2
 * @property string $jobPreference3
 * @property string $availableFrom
 * @property string $availableTo
 * @property string $earlyLate
 * @property string $returned
 */
class Application extends BaseApplication
{
	// virtual attributes
	private $vollieName;
	private $preferredName;
	public $jobChoices = [];
	private $jobPreference1;
	private $jobPreference2;
	private $jobPreference3;
	private $availableFrom;
	private $availableTo;
	private $earlyLate;
	private $returned;

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
				[['volunteerName', 'preferredName', 'jobPreference1', 'jobPreference2', 'jobPreference3', 'availableFrom', 'availableTo', 'earlyLate', 'returned'], 'safe'],
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
			'user_id' =>             'User ID',
			'volunteerName' =>       'Volunteer Name',
			'preferredName' =>       'Preferred Name',
			'job_choice_1' =>        'Job Choice 1',
			'job_choice_2' =>        'Job Choice 2',
			'job_choice_3' =>        'Job Choice 3',
			'year' =>                'Year',
			'availableFromDate' =>   'Available from Date',
			'availableFromTime' =>   'from Time',
			'availableFrom' =>       'Available From',
			'availableToDate' =>     'Available to Date',
			'availableToTime' =>     'to Time',
			'availableTo' =>         'Available To',
			'bestTime' =>            'I am...',
			'earlyLate' =>           'Best Time',
			'availabilityNotes' =>   'Availability Notes',
			'double' =>              'Double',
			'otherNotes' =>          'Other Notes',
			'referee' =>             'Referee',
			'refereeRelationship' => 'Referee Relationship',
			'refereePhone' =>        'Referee Phone',
			'bestCallingTime' =>     'Best Calling Time',
			'status' =>              'Status',
			'returned' =>            'Returned',
			'team_id' =>             'Team ID',
			'rejectedReason' =>      'Rejected Reason',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

		//$this->setJobChoices();
	}

	public function getVollieName()
	{
		if ($this->vollieName) {
			return $this->vollieName;
		}

		return $this->vollieName = $this->user->vollieName;
	}

	public function getPreferredName()
	{
		if ($this->preferredName) {
			return $this->preferredName;
		}

		return $this->preferredName = $this->user->preferredName;
	}

	public function getJobPreference1()
	{
		if (count($this->jobChoices) == 3) {
			return $this->jobChoices[0];
		}

		$this->setJobChoices();

		return $this->jobChoices[0];
	}

	public function getJobPreference2()
	{
		if (count($this->jobChoices) == 3) {
			return $this->jobChoices[1];
		}

		$this->setJobChoices();

		return $this->jobChoices[1];
	}

	public function getJobPreference3()
	{
		if (count($this->jobChoices) == 3) {
			return $this->jobChoices[2];
		}

		$this->setJobChoices();

		return $this->jobChoices[2];
	}

	public function getAvailableFrom()
	{
		if ($this->availableFrom) {
			return $this->availableFrom;
		}

		$this->setAvailability();

		return $this->availableFrom;
	}

	public function getAvailableTo()
	{
		if ($this->availableTo) {
			return $this->availableTo;
		}

		$this->setAvailability();

		return $this->availableTo;
	}

	public function getEarlyLate()
	{
		if ($this->earlyLate) {
			return $this->earlyLate;
		}

		if ($this->bestTime == 1) {
			return $this->earlyLate = 'early';
		}

		if ($this->bestTime == 2) {
			return $this->earlyLate = 'late';
		}

		return $this->earlyLate = 'not specified';
	}

	public function getReturned()
	{
		if ($this->returned) {
			return $this->returned;
		}

		return $this->returned = $this->user->returned;
	}

	private function setJobChoices()
	{
		$this->jobChoices[0] = $this->jobChoice1->name;
		$this->jobChoices[1] = ($this->jobChoice2 ? $this->jobChoice2->name : '');
		$this->jobChoices[2] = ($this->jobChoice3 ? $this->jobChoice3->name : '');
	}

	private function setAvailability()
	{
		$times = [
			1 => 'Early, 8:00 AM',
			2 => 'Midday, 12:00 PM',
			3 => 'Evening, 6:00 PM',
			4 => 'Late, Midnight',
		];

		$date = date_create(date("Y") . '-' . $this->availableFromDate);
		$time = $times[$this->availableFromTime];
		$this->availableFrom = $date->format('l, m-d') . ' / ' . $time;
		$date = date_create(date("Y") . '-' . $this->availableToDate);
		$time = $times[$this->availableToTime];
		$this->availableTo = $date->format('l, m-d') . ' / ' . $time;
	}




	public function emailAcknowledgement()
	{
		Yii::$app->mailer->compose('application-complete', [
			'vollieName' => $this->preferredName,
			'jobChoices' => $this->jobChoices,
		])
			->setFrom('vollies@malenymusicfestival.com')
			->setTo(Yii::$app->user->identity->email)
			->setSubject('Maleny Music Festival 2017 Volunteer Application')
			->send();;
	}

	public function emailUpdate()
	{
		Yii::$app->mailer->compose('vollies-update', [
			'vollieName' => $this->preferredName,
		])
			->setFrom('vollies@malenymusicfestival.com')
			->setTo($this->user->emailAddress)
			->setSubject('Maleny Music Festival 2017 Volunteer Update')
			->send();;
	}



}
