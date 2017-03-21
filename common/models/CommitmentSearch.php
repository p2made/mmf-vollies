<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Commitment;

/**
 * CommitmentSearch represents the model behind the search form about `common\models\Commitment`.
 */
class CommitmentSearch extends Commitment
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'profileId', 'deptId', 'hours', 'reinvite', 'createdBy', 'updatedBy'], 'integer'],
			[['year', 'job', 'report', 'created', 'updated'], 'safe'],
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
		$query = Commitment::find();

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
			'deptId' => $this->deptId,
			'year' => $this->year,
			'hours' => $this->hours,
			'reinvite' => $this->reinvite,
			'created' => $this->created,
			'createdBy' => $this->createdBy,
			'updated' => $this->updated,
			'updatedBy' => $this->updatedBy,
		]);

		$query->andFilterWhere(['like', 'job', $this->job])
			->andFilterWhere(['like', 'report', $this->report]);

		return $dataProvider;
	}
}
