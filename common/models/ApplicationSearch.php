<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Application;

/**
 * ApplicationSearch represents the model behind the search form about `common\models\Application`.
 */
class ApplicationSearch extends Application
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'user_id', 'job_choice_1', 'job_choice_2', 'job_choice_3', 'availableFromTime', 'availableToTime', 'bestTime', 'double', 'status', 'team_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['year', 'availableFromDate', 'availableToDate', 'availabilityNotes', 'otherNotes', 'referee', 'refereeRelationship', 'refereePhone', 'bestCallingTime', 'rejectedReason'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
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

		return $dataProvider;
	}
}
