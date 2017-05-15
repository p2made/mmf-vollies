<?php

namespace common\models\base;

use Yii;
use common\models\Profile;
use common\models\ApplicationJob;
use common\models\Commitment;

/**
 * This is the model class for table "{{%application}}".
*
    * @property integer $id
    * @property integer $profile_id
    * @property string $availableFromDate
    * @property integer $availableFromTime
    * @property string $availableToDate
    * @property integer $availableToTime
    * @property string $availabilityNotes
    * @property integer $double
    * @property string $otherNotes
    * @property string $referee
    * @property string $refereeRelationship
    * @property string $refereePhone
    * @property integer $accepted
    * @property integer $team_id
    * @property integer $rejected
    * @property string $rejectedReason
    * @property string $created_at
    * @property integer $created_by
    * @property string $updated_at
    * @property integer $updated_by
    *
            * @property Profile $profile
            * @property ApplicationJob[] $applicationJobs
            * @property Commitment[] $commitments
    */
class ApplicationBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%application}}';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['profile_id', 'availableFromTime', 'availableToTime', 'double', 'accepted', 'team_id', 'rejected', 'created_by', 'updated_by'], 'integer'],
            [['availableFromDate', 'availableFromTime', 'availableToDate', 'availableToTime'], 'required'],
            [['availableFromDate', 'availableToDate', 'created_at', 'updated_at'], 'safe'],
            [['availabilityNotes', 'otherNotes', 'rejectedReason'], 'string'],
            [['referee'], 'string', 'max' => 64],
            [['refereeRelationship', 'refereePhone'], 'string', 'max' => 32],
            [['profile_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['profile_id' => 'id']],
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
    'availableFromDate' => 'Available From Date',
    'availableFromTime' => 'Available From Time',
    'availableToDate' => 'Available To Date',
    'availableToTime' => 'Available To Time',
    'availabilityNotes' => 'Availability Notes',
    'double' => 'Double',
    'otherNotes' => 'Other Notes',
    'referee' => 'Referee',
    'refereeRelationship' => 'Referee Relationship',
    'refereePhone' => 'Referee Phone',
    'accepted' => 'Accepted',
    'team_id' => 'Team ID',
    'rejected' => 'Rejected',
    'rejectedReason' => 'Rejected Reason',
    'created_at' => 'Created At',
    'created_by' => 'Created By',
    'updated_at' => 'Updated At',
    'updated_by' => 'Updated By',
];
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
    public function getApplicationJobs()
    {
    return $this->hasMany(ApplicationJob::className(), ['application_id' => 'id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getCommitments()
    {
    return $this->hasMany(Commitment::className(), ['application_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ApplicationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ApplicationQuery(get_called_class());
}
}