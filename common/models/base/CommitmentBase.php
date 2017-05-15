<?php

namespace common\models\base;

use Yii;
use common\models\Application;
use common\models\Profile;
use common\models\Team;

/**
 * This is the model class for table "{{%commitment}}".
*
    * @property integer $id
    * @property integer $profile_id
    * @property integer $application_id
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
            * @property Application $application
            * @property Profile $profile
            * @property Team $team
    */
class CommitmentBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%commitment}}';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['profile_id', 'application_id', 'team_id', 'hours', 'reinvite', 'created_by', 'updated_by'], 'integer'],
            [['year', 'job'], 'required'],
            [['year', 'created_at', 'updated_at'], 'safe'],
            [['report'], 'string'],
            [['job'], 'string', 'max' => 48],
            [['application_id'], 'exist', 'skipOnError' => true, 'targetClass' => Application::className(), 'targetAttribute' => ['application_id' => 'id']],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['profile_id' => 'id']],
            [['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'id']],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'profile_id' => 'Profile ID',
    'application_id' => 'Application ID',
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
    public function getApplication()
    {
    return $this->hasOne(Application::className(), ['id' => 'application_id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getProfile()
    {
    return $this->hasOne(Profile::className(), ['id' => 'profile_id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getTeam()
    {
    return $this->hasOne(Team::className(), ['id' => 'team_id']);
    }

    /**
     * @inheritdoc
     * @return CommitmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CommitmentQuery(get_called_class());
}
}