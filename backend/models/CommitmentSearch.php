<?php
/**
 * CommitmentSearch.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Commitment;

/**
 * CommitmentSearch represents the model behind the search form about `backend\models\Commitment`.
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $application_id
 * @property integer $team_id
 * @property integer $job_id
 * @property string $jobName
 * @property string $year
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \backend\models\Application $application
 * @property \backend\models\Job $job
 * @property \backend\models\Profile $user
 * @property \backend\models\Team $team
 * @property string $aliasModel
 *
 * @property string $vollieName;
 */
class CommitmentSearch extends Commitment
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'user_id', 'application_id', 'team_id', 'job_id', 'hours', 'reinvite', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['jobName', 'year', 'report'], 'safe'],
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
		$query = Commitment::find();

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
			'application_id' => $this->application_id,
			'team_id' => $this->team_id,
			'job_id' => $this->job_id,
			'year' => $this->year,
			'hours' => $this->hours,
			'reinvite' => $this->reinvite,
			'created_at' => $this->created_at,
			'created_by' => $this->created_by,
			'updated_at' => $this->updated_at,
			'updated_by' => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'jobName', $this->jobName])
			->andFilterWhere(['like', 'report', $this->report]);

		return $dataProvider;
	}
}
