<?php

namespace common\models;

use Yii;
use \common\models\base\Commitment as BaseCommitment;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_commitment".
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
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\Profile $user
 * @property string $aliasModel
 */
class Commitment extends BaseCommitment
{

	public $volunteerName;

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
				[['volunteerName'], 'safe'],
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
			'volunteerName' => 'Volunteer Name',
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
}
