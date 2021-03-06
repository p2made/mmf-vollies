<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\History;

/**
 * HistorySearch represents the model behind the search form about `common\models\History`.
 */
class HistorySearch extends History
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'user_id', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'id_orig', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['givenName', 'familyName', 'preferredName', 'email', 'phone1', 'phone2', 'address1', 'address2', 'locality', 'state', 'postcode', 'country', 'emergencyContact', 'emergencyPhone1', 'emergencyPhone2', 'preferredJobs', 'availability', 'commentsInfo', 'discovery', 'ip', 'key_orig', 'created_orig', 'updated_orig'], 'safe'],
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
		$query = History::find();

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
			'rsa' => $this->rsa,
			'dl_c' => $this->dl_c,
			'dl_h' => $this->dl_h,
			'cse' => $this->cse,
			'ohs' => $this->ohs,
			'vol' => $this->vol,
			'mmfVol' => $this->mmfVol,
			'mmfAtt' => $this->mmfAtt,
			'returned' => $this->returned,
			'id_orig' => $this->id_orig,
			'created_orig' => $this->created_orig,
			'updated_orig' => $this->updated_orig,
			'created_at' => $this->created_at,
			'created_by' => $this->created_by,
			'updated_at' => $this->updated_at,
			'updated_by' => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'givenName', $this->givenName])
			->andFilterWhere(['like', 'familyName', $this->familyName])
			->andFilterWhere(['like', 'preferredName', $this->preferredName])
			->andFilterWhere(['like', 'email', $this->email])
			->andFilterWhere(['like', 'phone1', $this->phone1])
			->andFilterWhere(['like', 'phone2', $this->phone2])
			->andFilterWhere(['like', 'address1', $this->address1])
			->andFilterWhere(['like', 'address2', $this->address2])
			->andFilterWhere(['like', 'locality', $this->locality])
			->andFilterWhere(['like', 'state', $this->state])
			->andFilterWhere(['like', 'postcode', $this->postcode])
			->andFilterWhere(['like', 'country', $this->country])
			->andFilterWhere(['like', 'emergencyContact', $this->emergencyContact])
			->andFilterWhere(['like', 'emergencyPhone1', $this->emergencyPhone1])
			->andFilterWhere(['like', 'emergencyPhone2', $this->emergencyPhone2])
			->andFilterWhere(['like', 'preferredJobs', $this->preferredJobs])
			->andFilterWhere(['like', 'availability', $this->availability])
			->andFilterWhere(['like', 'commentsInfo', $this->commentsInfo])
			->andFilterWhere(['like', 'discovery', $this->discovery])
			->andFilterWhere(['like', 'ip', $this->ip])
			->andFilterWhere(['like', 'key_orig', $this->key_orig]);

		return $dataProvider;
	}
}
