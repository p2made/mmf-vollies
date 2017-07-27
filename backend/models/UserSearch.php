<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\User;

/**
 * UserSearch represents the model behind the search form about `backend\models\User`.
 */
class UserSearch extends User
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'confirmed_at', 'flags', 'admin', 'created_at', 'updated_at', 'last_login_at', 'blocked_at'], 'integer'],
			[['email', 'username', 'password_hash', 'auth_key', 'unconfirmed_email', 'registration_ip'], 'safe'],
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
		$query = User::find();

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
			'confirmed_at' => $this->confirmed_at,
			'flags' => $this->flags,
			'admin' => $this->admin,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
			'last_login_at' => $this->last_login_at,
			'blocked_at' => $this->blocked_at,
		]);

		$query->andFilterWhere(['like', 'email', $this->email])
			->andFilterWhere(['like', 'username', $this->username])
			->andFilterWhere(['like', 'password_hash', $this->password_hash])
			->andFilterWhere(['like', 'auth_key', $this->auth_key])
			->andFilterWhere(['like', 'unconfirmed_email', $this->unconfirmed_email])
			->andFilterWhere(['like', 'registration_ip', $this->registration_ip]);

		return $dataProvider;
	}
}
