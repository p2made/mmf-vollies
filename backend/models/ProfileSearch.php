<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `backend\models\Profile`.
 *
 * @property integer $user_id
 * @property string $givenName
 * @property string $familyName
 * @property string $preferredName
 * @property string $phone1
 * @property string $phone2
 * @property string $address1
 * @property string $address2
 * @property string $locality
 * @property string $state
 * @property string $postcode
 * @property string $country
 * @property string $emergencyContact
 * @property string $emergencyPhone1
 * @property string $emergencyPhone2
 * @property integer $rsa
 * @property integer $dl_c
 * @property integer $dl_h
 * @property integer $cse
 * @property integer $ohs
 * @property integer $bc
 * @property integer $fa
 * @property integer $vol
 * @property integer $mmfVol
 * @property integer $mmfAtt
 * @property integer $returned
 * @property string $dnr
 * @property string $discovery
 * @property string $discoveryDetail
 * @property string $timezone
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Application[] $applications
 * @property \common\models\Commitment[] $commitments
 * @property \common\models\History[] $histories
 * @property \common\models\User $user
 * @property \common\models\Team[] $teams
 * @property string $aliasModel
 *
 * @property string $vollieName;
 * @property string $lexicalName;
 * @property string $email;
 */
class ProfileSearch extends Profile
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['user_id', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'bc', 'fa', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'created_at', 'updated_at'], 'integer'],
			[['givenName', 'familyName', 'preferredName', 'phone1', 'phone2', 'address1', 'address2', 'locality', 'state', 'postcode', 'country', 'emergencyContact', 'emergencyPhone1', 'emergencyPhone2', 'dnr', 'discovery', 'discoveryDetail', 'timezone', 'name', 'public_email', 'gravatar_email', 'gravatar_id', 'location', 'website', 'bio'], 'safe'],
			[['dnr', 'vollieName', 'lexicalName', 'email'], 'safe'],
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
		$query = Profile::find();

		$dataProvider = new ActiveDataProvider([
				'query' => $query,
		]);

		/**
		 * Setup your sorting attributes
		 * Note: This is setup before the $this->load($params)
		 * statement below
		 */
		$dataProvider->setSort([
			'attributes' => [
				'user_id',
				'givenName',
				'familyName',
				'preferredName',
				'vollieName' => [
					'asc' => ['givenName' => SORT_ASC, 'familyName' => SORT_ASC],
					'desc' => ['givenName' => SORT_DESC, 'familyName' => SORT_DESC],
					'label' => 'Name',
					'default' => SORT_ASC
				],
				'lexicalName' => [
					'asc' => ['familyName' => SORT_ASC, 'givenName' => SORT_ASC],
					'desc' => ['familyName' => SORT_DESC, 'givenName' => SORT_DESC],
					'label' => 'Name',
					'default' => SORT_ASC
				],
				'email' => [
					'asc' => ['mmf_user.email' => SORT_ASC],
					'desc' => ['mmf_user.email' => SORT_DESC],
					'label' => 'Email',
				],
				'rsa',
				'dl_c',
				'dl_h',
				'cse',
				'ohs',
				'bc',
				'fa',
				'vol',
				'mmfVol',
				'mmfAtt',
				'returned',
				'dnr',
				'discovery',

			//	'phone1',
			//	'phone2',
			//	'address1',
			//	'address2',
			//	'locality',
			//	'state',
			//	'postcode',
			//	'country',
			//	'emergencyContact',
			//	'emergencyPhone1',
			//	'emergencyPhone2',
			//	'discoveryDetail',
			//	'timezone',
			//	'created_at',
			//	'updated_at',
			]
		]);

		if (!($this->load($params) && $this->validate())) {
			$query->joinWith(['user']);
			return $dataProvider;
		}

		$query->andFilterWhere([
			'user_id' => $this->user_id,
			'rsa' => $this->rsa,
			'dl_c' => $this->dl_c,
			'dl_h' => $this->dl_h,
			'cse' => $this->cse,
			'ohs' => $this->ohs,
			'bc' => $this->bc,
			'vol' => $this->vol,
			'mmfVol' => $this->mmfVol,
			'mmfAtt' => $this->mmfAtt,
			'returned' => $this->returned,
			'dnr' => $this->dnr,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		]);

	//	$this->addCondition($query, 'user_id');
	//	$this->addCondition($query, 'givenName', true);
	//	$this->addCondition($query, 'familyName', true);
	//	$this->addCondition($query, 'country_id');

		$query->andFilterWhere(['like', 'givenName', $this->givenName])
			->andFilterWhere(['like', 'familyName', $this->familyName])
			->andFilterWhere(['like', 'preferredName', $this->preferredName])
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
			->andFilterWhere(['like', 'discovery', $this->discovery])
			->andFilterWhere(['like', 'discoveryDetail', $this->discoveryDetail])
			->andFilterWhere(['like', 'timezone', $this->timezone])
			->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'public_email', $this->public_email])
			->andFilterWhere(['like', 'gravatar_email', $this->gravatar_email])
			->andFilterWhere(['like', 'gravatar_id', $this->gravatar_id])
			->andFilterWhere(['like', 'location', $this->location])
			->andFilterWhere(['like', 'website', $this->website])
			->andFilterWhere(['like', 'bio', $this->bio]);

		// filter by person full name
		$query->andWhere('givenName LIKE "%' . $this->vollieName . '%" ' .
			'OR familyName LIKE "%' . $this->vollieName . '%"'
		);
		$query->andWhere('givenName LIKE "%' . $this->lexicalName . '%" ' .
			'OR familyName LIKE "%' . $this->lexicalName . '%"'
		);

		$query->joinWith(['user' => function ($q) {
			$q->where('mmf_user.email LIKE "%' . $this->email . '%"');
		}]);

		return $dataProvider;
	}
}
