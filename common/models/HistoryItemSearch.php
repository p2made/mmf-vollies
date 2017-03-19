<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HistoryItem;

/**
 * HistoryItemSearch represents the model behind the search form about `common\models\HistoryItem`.
 */
class HistoryItemSearch extends HistoryItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'profileId', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'createdBy', 'updatedBy'], 'integer'],
            [['givenName', 'familyName', 'preferredName', 'email', 'phone1', 'phone2', 'address1', 'address2', 'locality', 'state', 'postcode', 'country', 'emergencyContact', 'emergencyPhone1', 'emergencyPhone2', 'preferredJobs', 'availability', 'commentsInformation', 'discovery', 'created', 'updated'], 'safe'],
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
        $query = HistoryItem::find();

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
            'rsa' => $this->rsa,
            'dl_c' => $this->dl_c,
            'dl_h' => $this->dl_h,
            'cse' => $this->cse,
            'ohs' => $this->ohs,
            'vol' => $this->vol,
            'mmfVol' => $this->mmfVol,
            'mmfAtt' => $this->mmfAtt,
            'returned' => $this->returned,
            'created' => $this->created,
            'createdBy' => $this->createdBy,
            'updated' => $this->updated,
            'updatedBy' => $this->updatedBy,
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
            ->andFilterWhere(['like', 'commentsInformation', $this->commentsInformation])
            ->andFilterWhere(['like', 'discovery', $this->discovery]);

        return $dataProvider;
    }
}
