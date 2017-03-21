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
			[['id', 'profileId', 'preferredJobId1', 'preferredJobId2', 'preferredJobId3', 'availableFromTime', 'availableToTime', 'createdBy', 'updatedBy'], 'integer'],
			[['availableFromDate', 'availableToDate', 'availabilityNotes', 'otherNotes', 'created', 'updated'], 'safe'],
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
			'profileId' => $this->profileId,
			'preferredJobId1' => $this->preferredJobId1,
			'preferredJobId2' => $this->preferredJobId2,
			'preferredJobId3' => $this->preferredJobId3,
			'availableFromDate' => $this->availableFromDate,
			'availableFromTime' => $this->availableFromTime,
			'availableToDate' => $this->availableToDate,
			'availableToTime' => $this->availableToTime,
			'created' => $this->created,
			'createdBy' => $this->createdBy,
			'updated' => $this->updated,
			'updatedBy' => $this->updatedBy,
		]);

		$query->andFilterWhere(['like', 'availabilityNotes', $this->availabilityNotes])
			->andFilterWhere(['like', 'otherNotes', $this->otherNotes]);

		return $dataProvider;
	}
}
