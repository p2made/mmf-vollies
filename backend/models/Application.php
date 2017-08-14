<?php
/**
 * Application.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

namespace backend\models;

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
 * @property integer $status
 * @property integer $team_id
 * @property string $rejectedReason
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \backend\models\Job $jobChoice1
 * @property \backend\models\Job $jobChoice2
 * @property \backend\models\Job $jobChoice3
 * @property \backend\models\Profile $user
 * @property \backend\models\Commitment $commitment
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
 *
 * @property array $responseMenu[]
 * @property array $jobTeamMap[]
 */
class Application extends \backend\models\base\Application
{
	// virtual attributes
	private $vollieName;
	private $preferredName;
	private $phone1;
	private $phone2;
	public $jobChoices = [];
	private $jobPreference1;
	private $jobPreference2;
	private $jobPreference3;
	private $availableFrom;
	private $availableTo;
	private $earlyLate;
	private $returned;
	private $statusFlag;
	private $assignment;

	private $jobTeamMap = [];
	private $responseMenu = [];

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
				[['vollieName', 'preferredName', 'phone1', 'phone2', 'jobPreference1', 'jobPreference2', 'jobPreference3', 'availableFrom', 'availableTo', 'earlyLate', 'returned'], 'safe'],
			]
		);
	}

	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id'             => 'User ID',
			'vollieName' =>          'Volunteer Name',
			'preferredName' =>       'Preferred Name',
			'phone1' =>              'Primary Phone',
			'phone2' =>              'Other Phone',
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
			'availabilityNotes'   => 'Availability Notes',
			'double'              => 'Double',
			'otherNotes'          => 'Other Notes',
			'referee'             => 'Referee',
			'refereeRelationship' => 'Referee Relationship',
			'refereePhone'        => 'Referee Phone',
			'bestCallingTime'     => 'Best Calling Time',
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

	public function beforeSave($insert)
	{
		if (!parent::beforeSave($insert)) {
			return false;
		}

		/*
		if ($this->assignment) {
			$this->assignApplication($this->assignment);
		}
		*/

		return true;
}

	public function assignJob($assignment)
	{
		/*
		 * 0 - Pending
		 * 1 - Accepted
		 * 2 - Cancelled
		 * 3 - Rejected
		 */

		if ($assignment == 99) {
			$this->status = 3;
			return;
		} // rejected

		if ($assignment == 98) {
			$this->status = 2;
			return;
		} // cancelled

		$this->status = 1;

		$commitment = new Commitment();
		$commitment->application_id = $this->id;
		$commitment->user_id = $this->user->user_id;
		$commitment->job_id = $this->assignment;
		$commitment->team_id = $this->jobTeamMap[$assignment];
		$commitment->year = date('Y');
		$commitment->save();
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

	public function getPhone1()
	{
		if ($this->phone1) {
			return $this->phone1;
		}

		return $this->phone1 = $this->user->phone1;
	}

	public function getPhone2()
	{
		if ($this->phone2) {
			return $this->phone2;
		}

		return $this->phone2 = $this->user->phone2;
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

		return $this->earlyLate = '';
	}

	public function getReturned()
	{
		if ($this->returned) {
			return $this->returned;
		}

		return $this->returned = $this->user->returned;
	}

	public function setAssignment($value)
	{
		$this->assignment = $value;
	}

	public function getAssignment()
	{
		return $this->assignment;
	}

	public function getStatusFlag()
	{
		if ($this->status == 0) {
			$class = 'text-info';
			$title = 'pending';
		}
		elseif ($this->status == 1) {
			$class = 'text-success';
			$title = 'assigned';
		}
		elseif ($this->status == 2) {
			$class = 'text-warning';
			$title = 'cancelled';
		}
		else {
			$class = 'text-danger';
			$title = 'REJECTED';
		}

		return ' <span class="' . $class . '"><strong>(' . $title . ')</strong></span>';
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
			1 => 'Early',
			2 => 'Midday',
			3 => 'Evening',
			4 => 'Late',
			0 => 'unknown',
		];

		if ($this->availableFromTime != 0) {
			$date = date_create(date("Y") . '-' . $this->availableFromDate);
			$time = $times[$this->availableFromTime];
			$this->availableFrom = $date->format('l, m-d') . ' / ' . $time;
		} else {
			$this->availableFrom = 'unknown';
		}

		if ($this->availableToTime != 0) {
			$date = date_create(date("Y") . '-' . $this->availableToDate);
			$time = $times[$this->availableToTime];
			$this->availableTo = $date->format('l, m-d') . ' / ' . $time;
		} else {
			$this->availableTo = 'unknown';
		}
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

	public function getJobTeamMap()
	{
		if ($this->jobTeamMap) {
			return $this->jobTeamMap;
		}

		return $this->jobTeamMap = array(
			1 => 1,
			2 => 1,
			3 => 1,
			4 => 3,
			5 => 4,
			6 => 2,
			7 => 4,
			8 => 3,
			9 => 3,
			10 => 3,
			11 => 2,
			12 => 7,
			13 => 5,
			14 => 2,
			15 => 8,
			16 => 5,
			17 => 6,
			18 => 4,
			19 => 7,
			20 => 9,
			22 => 11,
			23 => 11,
			24 => 11,
			25 => 11,
			26 => 11,
			27 => 11,
			28 => 11,
			30 => 11,
			31 => 11,
			32 => 11,
			33 => 11,
			34 => 11,
			35 => 11,
			37 => 11,
		);
	}

	public function getResponseMenu()
	{
		if ($this->responseMenu) {
			return $this->responseMenu;
		}

		return $this->responseMenu = array(
			null => '',
			'Bars' => [
				1 => 'Bar Doors',
				2 => 'Bar Service',
				38 => 'Bar Ticketing',
				3 => 'Bar Setup',
			],
			'Children’s Festival' => [
				11 => 'Children’s Festival Helper',
				14 => 'Children’s Festival Presenter',
				6 => 'Children’s Festival Setup',
			],
			'Setup & Bump Out' => [
				4 => 'Bump Out',
				8 => 'Decor',
				9 => 'Fencing',
				10 => 'General Setup',
			],
			'Site' => [
				5 => 'Campground',
				7 => 'Cleaning',
				18 => 'Traffic',
			],
			'Stages' => [
				13 => 'MC',
				16 => 'Stage Manager',
			],
			'Treasury' => [
				12 => 'Instrument Lockup',
				19 => 'Treasury',
			],
			'Other' => [
				15 => 'Shop',
				17 => 'Ticket Gates',
				20 => 'Vollies’ Tent',
			],
			'Special' => [
				26 => 'Bars Manager',
				27 => 'Children’s Festival Manager',
				23 => 'Committee',
				28 => 'Fencing Manager',
				24 => 'Festival Director',
				35 => 'Performer',
				36 => 'Photographer',
				30 => 'Shop Manager',
				37 => 'Site Manager',
				22 => 'Special',
				31 => 'Stages Manager',
				32 => 'Ticket Gates Manager',
				33 => 'Treasury Manager',
				34 => 'Vollies’ Tent Coordinator',
				25 => 'Volunteer Coordinator',
			],
			'Non Accept' => [
				98 => 'Cancel',
				99 => 'Reject',
			],
		);
	}
}




