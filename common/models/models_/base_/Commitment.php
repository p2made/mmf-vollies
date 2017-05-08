<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "mmf_commitment".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $appl_id
 * @property integer $team_id
 * @property string $year
 * @property string $job
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\Application $appl
 * @property \common\models\Team $team
 * @property \common\models\User $user
 * @property string $aliasModel
 */
abstract class Commitment extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_commitment';
	}


	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			[
				'class' => BlameableBehavior::className(),
			],
			[
				'class' => TimestampBehavior::className(),
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['user_id', 'year', 'job'], 'required'],
			[['user_id', 'appl_id', 'team_id', 'hours', 'reinvite'], 'integer'],
			[['year'], 'safe'],
			[['report'], 'string'],
			[['job'], 'string', 'max' => 64],
			[['appl_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Application::className(), 'targetAttribute' => ['appl_id' => 'id']],
			[['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Team::className(), 'targetAttribute' => ['team_id' => 'id']],
			[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'appl_id' => 'Appl ID',
			'team_id' => 'Team ID',
			'year' => 'Year',
			'job' => 'Job',
			'hours' => 'Hours',
			'report' => 'Report',
			'reinvite' => 'Reinvite',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAppl()
	{
		return $this->hasOne(\common\models\Application::className(), ['id' => 'appl_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTeam()
	{
		return $this->hasOne(\common\models\Team::className(), ['id' => 'team_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
	}




}
