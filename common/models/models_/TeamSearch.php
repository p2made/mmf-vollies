<?php
/**
 * /WWW/yii.mmf-vollies/backend/runtime/giiant/e0080b9d6ffa35acb85312bf99a557f2
 *
 * @package default
 */


namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Team;

/**
 * TeamSearch represents the model behind the search form about `common\models\Team`.
 */
class TeamSearch extends Team
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['id', 'lead_id', 'sequence', 'created_by', 'updated_by'], 'integer'],
			[['name', 'description', 'created_at', 'updated_at'], 'safe'],
		];
	}


	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}


	/**
	 * Creates data provider instance with search query applied
	 *
	 *
	 * @param array   $params
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = Team::find();

		$dataProvider = new ActiveDataProvider([
				'query' => $query,
			]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		$query->andFilterWhere([
				'id' => $this->id,
				'lead_id' => $this->lead_id,
				'sequence' => $this->sequence,
				'created_at' => $this->created_at,
				'created_by' => $this->created_by,
				'updated_at' => $this->updated_at,
				'updated_by' => $this->updated_by,
			]);

		$query->andFilterWhere(['like', 'name', $this->name])
		->andFilterWhere(['like', 'description', $this->description]);

		return $dataProvider;
	}


}
