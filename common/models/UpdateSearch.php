<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Update;

/**
 * UpdateSearch represents the model behind the search form about `common\models\Update`.
 */
class UpdateSearch extends Update
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'status0', 'status1', 'status2'], 'integer'],
			[['email', 'name', 'other0', 'other1', 'other2'], 'safe'],
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
		$query = Update::find();

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
			'status0' => $this->status0,
			'status1' => $this->status1,
			'status2' => $this->status2,
		]);

		$query->andFilterWhere(['like', 'email', $this->email])
			->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'other0', $this->other0])
			->andFilterWhere(['like', 'other1', $this->other1])
			->andFilterWhere(['like', 'other2', $this->other2]);

		return $dataProvider;
	}
}
