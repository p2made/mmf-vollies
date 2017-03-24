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
            [['id', 'user_id', 'availableFromTime', 'availableToTime', 'earlyLate', 'double', 'closed', 'rejected', 'created_by', 'updated_by'], 'integer'],
            [['availableFromDate', 'availableToDate', 'availabilityNotes', 'rejectedReason', 'created_at', 'updated_at'], 'safe'],
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
            'user_id' => $this->user_id,
            'availableFromDate' => $this->availableFromDate,
            'availableFromTime' => $this->availableFromTime,
            'availableToDate' => $this->availableToDate,
            'availableToTime' => $this->availableToTime,
            'earlyLate' => $this->earlyLate,
            'double' => $this->double,
            'closed' => $this->closed,
            'rejected' => $this->rejected,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'availabilityNotes', $this->availabilityNotes])
            ->andFilterWhere(['like', 'rejectedReason', $this->rejectedReason]);

        return $dataProvider;
    }
}
