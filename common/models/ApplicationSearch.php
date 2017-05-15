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
            [['id', 'profile_id', 'availableFromTime', 'availableToTime', 'double', 'accepted', 'team_id', 'rejected', 'created_by', 'updated_by'], 'integer'],
            [['availableFromDate', 'availableToDate', 'availabilityNotes', 'otherNotes', 'referee', 'refereeRelationship', 'refereePhone', 'rejectedReason', 'created_at', 'updated_at'], 'safe'],
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
            'profile_id' => $this->profile_id,
            'availableFromDate' => $this->availableFromDate,
            'availableFromTime' => $this->availableFromTime,
            'availableToDate' => $this->availableToDate,
            'availableToTime' => $this->availableToTime,
            'double' => $this->double,
            'accepted' => $this->accepted,
            'team_id' => $this->team_id,
            'rejected' => $this->rejected,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'availabilityNotes', $this->availabilityNotes])
            ->andFilterWhere(['like', 'otherNotes', $this->otherNotes])
            ->andFilterWhere(['like', 'referee', $this->referee])
            ->andFilterWhere(['like', 'refereeRelationship', $this->refereeRelationship])
            ->andFilterWhere(['like', 'refereePhone', $this->refereePhone])
            ->andFilterWhere(['like', 'rejectedReason', $this->rejectedReason]);

        return $dataProvider;
    }
}
