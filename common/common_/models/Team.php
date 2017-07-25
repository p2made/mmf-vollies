<?php

namespace common\models;

use Yii;
use \common\models\base\Team as BaseTeam;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_team".
 *
 * @property integer $id
 * @property integer $head_id
 * @property integer $sequence
 * @property string $name
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Job[] $jobs
 * @property \common\models\Profile $head
 * @property string $aliasModel
 */
class Team extends BaseTeam
{
	// virtual attributes
	public $headName;

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
				[['headName'], 'safe'],
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
			'head_id' =>     'Head ID',
			'headName' =>    'Head Name',
			'sequence' =>    'Sequence',
			'name' =>        'Name',
			'description' => 'Description',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

		//$this->headName = $this->head->preferredName;
		//$this->headName = strval($this->head);
	}

}
