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
 *
 * @property string $vollieName;
 */
class Commitment extends BaseCommitment
{
	// virtual attributes
	private $vollieName;

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

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' =>        'User ID',
			'vollieName' =>     'Vollie Name',
			'application_id' => 'Application ID',
			'team_id' =>        'Team ID',
			'year' =>           'Year',
			'job' =>            'Job',
			'hours' =>          'Hours',
			'report' =>         'Report',
			'reinvite' =>       'Reinvite',
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

		$this->vollieName = $this->user->vollieName;

		return $this->vollieName;
	}



}
