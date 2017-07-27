<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Application;

/**
 * ApplicationSearch represents the model behind the search form about `common\models\Application`.
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
 * @property string $jobPreference1
 * @property string $jobPreference2
 * @property string $jobPreference3
 * @property string $availableFrom
 * @property string $availableTo
 * @property string $earlyLate
 *
 * @property string[] $jobChoices
 */
class ApplicationSearch extends Application
{
	// virtual attributes
	public $vollieName;
	public $preferredName;
	public $jobPreference1;
	public $jobPreference2 = 'none';
	public $jobPreference3 = 'none';
	public $availableFrom;
	public $availableTo;
	public $earlyLate;

	public $jobChoices = [];

	public function rules()
	{
		return [
			[['id', 'user_id', 'job_choice_1', 'job_choice_2', 'job_choice_3', 'availableFromTime', 'availableToTime', 'bestTime', 'double', 'status', 'team_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['year', 'availableFromDate', 'availableToDate', 'availabilityNotes', 'otherNotes', 'referee', 'refereeRelationship', 'refereePhone', 'bestCallingTime', 'rejectedReason', 'vollieName', 'preferredName', 'jobPreference1', 'jobPreference2', 'jobPreference3', 'availableFrom', 'availableTo', 'earlyLate'], 'safe'],
		];
	}

	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	public function search($params)
	{
		$query = Application::find();

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'id' => $this->id,
			'user_id' => $this->user_id,
			'job_choice_1' => $this->job_choice_1,
			'job_choice_2' => $this->job_choice_2,
			'job_choice_3' => $this->job_choice_3,
			'year' => $this->year,
			'availableFromTime' => $this->availableFromTime,
			'availableToTime' => $this->availableToTime,
			'bestTime' => $this->bestTime,
			'double' => $this->double,
			'status' => $this->status,
			'team_id' => $this->team_id,
			'created_at' => $this->created_at,
			'created_by' => $this->created_by,
			'updated_at' => $this->updated_at,
			'updated_by' => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'availableFromDate', $this->availableFromDate])
			->andFilterWhere(['like', 'availableToDate', $this->availableToDate])
			->andFilterWhere(['like', 'availabilityNotes', $this->availabilityNotes])
			->andFilterWhere(['like', 'otherNotes', $this->otherNotes])
			->andFilterWhere(['like', 'referee', $this->referee])
			->andFilterWhere(['like', 'refereeRelationship', $this->refereeRelationship])
			->andFilterWhere(['like', 'refereePhone', $this->refereePhone])
			->andFilterWhere(['like', 'bestCallingTime', $this->bestCallingTime])
			->andFilterWhere(['like', 'rejectedReason', $this->rejectedReason]);

		$dataProvider->setSort([
			'attributes' => [
				'id',
			//	'user_id',
			//	'vollieName' => [
			//		'asc' => ['mmf_profile.givenName' => SORT_ASC, 'mmf_profile.familyName' => SORT_ASC],
			//		'desc' => ['mmf_profile.givenName' => SORT_DESC, 'mmf_profile.familyName' => SORT_DESC],
			//		'label' => 'Name',
			//		'default' => SORT_ASC
			//	],
			],
        	'defaultOrder' => ['id' => SORT_ASC]
		]);

		return $dataProvider;
	}
}
