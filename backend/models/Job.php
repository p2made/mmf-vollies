<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_job".
 *
 * @property integer $id
 * @property integer $team_id
 * @property integer $group_id
 * @property integer $sequence
 * @property string $name
 * @property string $shortName
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Application[] $applications
 * @property \common\models\Application[] $applications0
 * @property \common\models\Application[] $applications1
 * @property \common\models\MenuGroup $group
 * @property \common\models\Team $team
 * @property string $aliasModel
 *
 * @property string $teamName
 */
class Job extends \backend\models\base\Job
{
	// virtual attributes
	public $teamName;

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
				[['teamName'], 'safe'],
			]
		);
	}

	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'team_id' =>     'Team ID',
			'group_id' =>    'Group ID',
			'sequence' =>    'Sequence',
			'teamName' =>    'Team Name',
			'name' =>        'Name',
			'shortName' =>   'Short Name',
			'description' => 'Description',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

		$this->teamName = $this->team->name;
	}

}
