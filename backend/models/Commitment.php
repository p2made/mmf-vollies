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
/**
 * This is the base-model class for table "mmf_commitment".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property integer $job_id
 * @property string $jobName
 * @property string $year
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
 */
class Commitment extends \backend\models\base\Commitment
{
	// virtual attributes
	private $vollieName;
	private $teamName;

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
			'application_id' => 'Application ID',
			'team_id'        => 'Team ID',
			'job_id'         => 'Job ID',
			'vollieName'     => 'Vollie Name',
			'teamName'       => 'Work Area',
			'jobName'        => 'Job Name',
			'year'           => 'Year',
			'hours'          => 'Hours',
			'report'         => 'Report',
			'reinvite'       => 'Reinvite',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

		$this->vollieName = $this->user->vollieName;
	}

	public function getVollieName()
	{
		if ($this->vollieName) {
			return $this->vollieName;
		}

		return $this->vollieName = $this->user->vollieName;
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
		if ($this->jobName) {
			return $this->jobName;
		}

		return $this->jobName = ($this->job ? $this->job->name : '');
	}
}
