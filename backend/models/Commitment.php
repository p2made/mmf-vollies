<?php
/**
 * Commitment.php
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
 * This is the model class for table "mmf_commitment".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property integer $job_id
 * @property string $jobName
 * @property string $year
 * @property integer $rostered
 * @property string $notes
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \backend\models\Application $application
 * @property \backend\models\Job $job
 * @property \backend\models\Profile $user
 * @property \backend\models\Team $team
 * @property string $aliasModel
 *
 * @property string $vollieName;
 * @property string $preferredName;
 * @property string $phone1;
 * @property string $phone2;
 * @property string $teamName;
 */
class Commitment extends \backend\models\base\Commitment
{
	// virtual attributes
	private $vollieName;
	private $preferredName;
	private $phone1;
	private $phone2;
	private $teamName;

	// virtual attributes
	//private $vollieName;
	//public $jobChoices = [];
	//private $jobPreference1;
	//private $jobPreference2;
	//private $jobPreference3;
	//private $availableFrom;
	//private $availableTo;
	//private $earlyLate;
	//private $returned;
	//private $statusFlag;
	//private $assignment;

	//private $jobTeamMap = [];

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
				[['vollieName'], 'safe'],
			 ]
		);
	}

	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id'        => 'User ID',
			'vollieName'     => 'Volunteer Name',
			'preferredName'  => 'Preferred Name',
			'phone1'         => 'Primary Phone',
			'phone2'         => 'Other Phone',
			'application_id' => 'Application ID',
			'team_id'        => 'Team ID',
			'job_id'         => 'Job ID',
			'vollieName'     => 'Vollie Name',
			'teamName'       => 'Work Area',
			'jobName'        => 'Job Name',
			'year'           => 'Year',
			'rostered'       => 'Rostered',
			'notes'          => 'Area Head\'s Notes',
			'hours'          => 'Hours',
			'report'         => 'Report',
			'reinvite'       => 'Reinvite',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}
	/*
	{
		return [
			'id' => 'ID',
			'user_id' =>             'User ID',
			'vollieName' =>          'Volunteer Name',
			'preferredName' =>       'Preferred Name',
			'phone1' =>              'Primary Phone',
			'phone2' =>              'Secondary Phone',
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
	*/

	public function afterFind()
	{
		parent::afterFind();

		$this->vollieName = $this->user->vollieName;

		if (!$this->jobName || $this->jobName == '') {
			$this->jobName = $this->job->name;
			$this->save();
		}
	}

	public function beforeSave($insert)
	{
		if (!parent::beforeSave($insert)) {
			return false;
		}

		$this->team_id = $this->job->team_id;
		// ...custom code here...
		return true;
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

	public function getTeamId()
	{
		/*
		if ($this->team_id) {
			return $this->team_id;
		}

		return $this->team_id = $this->job->team_id;
		*/

		return $this->job->team_id;
	}

	public function getTeamName()
	{
		if ($this->teamName) {
			return $this->teamName;
		}

		return $this->teamName = ($this->team ? $this->team->name : '');
	}

	public function getJobName()
	{
		if ($this->jobName && $this->jobName != '') {
			return $this->jobName;
		}

		return $this->jobName = ($this->job ? $this->job->name : '');
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

	public function teamID($JobId)
	{
		$jobTeams = array(
			1 => 1, 2 => 1, 3 => 1, 4 => 3, 5 => 4, 6 => 2, 7 => 4, 8 => 3, 9 => 3, 10 => 3,
			11 => 2, 12 => 7, 13 => 5, 14 => 2, 15 => 8, 16 => 5, 17 => 6, 18 => 4, 19 => 7,
			20 => 9, 22 => 11, 23 => 11, 24 => 11, 25 => 11, 26 => 11, 27 => 11, 28 => 11,
			30 => 11, 31 => 11, 32 => 11, 33 => 11, 34 => 11, 35 => 11, 37 => 11,
		);

		return $jobTeams[$JobId];
	}

}
