<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/e0080b9d6ffa35acb85312bf99a557f2
 *
 * @package default
 */


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
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['id', 'user_id', 'job_choice_1', 'job_choice_2', 'job_choice_3', 'availableFromTime', 'availableToTime', 'bestTIme', 'double', 'accepted', 'team_id', 'rejected', 'created_by', 'updated_by'], 'integer'],
			[['year', 'availableFromDate', 'availableToDate', 'availabilityNotes', 'otherNotes', 'referee', 'refereeRelationship', 'refereePhone', 'rejectedReason', 'created_at', 'updated_at'], 'safe'],
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
	 * @param array $params
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = Application::find();

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
				'user_id' => $this->user_id,
				'job_choice_1' => $this->job_choice_1,
				'job_choice_2' => $this->job_choice_2,
				'job_choice_3' => $this->job_choice_3,
				'year' => $this->year,
				'availableFromTime' => $this->availableFromTime,
				'availableToTime' => $this->availableToTime,
				'bestTIme' => $this->bestTIme,
				'double' => $this->double,
				'accepted' => $this->accepted,
				'team_id' => $this->team_id,
				'rejected' => $this->rejected,
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
		->andFilterWhere(['like', 'rejectedReason', $this->rejectedReason]);

		return $dataProvider;
	}

}
