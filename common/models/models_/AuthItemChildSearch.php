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
use common\models\AuthItemChild;

/**
 * AuthItemChildSearch represents the model behind the search form about `common\models\AuthItemChild`.
 */
class AuthItemChildSearch extends AuthItemChild
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['parent', 'child'], 'safe'],
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
		$query = AuthItemChild::find();

		$dataProvider = new ActiveDataProvider([
				'query' => $query,
			]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		$query->andFilterWhere(['like', 'parent', $this->parent])
		->andFilterWhere(['like', 'child', $this->child]);

		return $dataProvider;
	}


}
