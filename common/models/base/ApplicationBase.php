<?php

namespace common\models\base;

use Yii;
use common\models\User;
use common\models\ApplicationJob;
use common\models\Commitment;

/**
 * This is the model class for table "application".
*
    * @property integer $id
    * @property integer $user_id
    * @property string $availableFromDate
    * @property integer $availableFromTime
    * @property string $availableToDate
    * @property integer $availableToTime
    * @property integer $earlyLate
    * @property string $availabilityNotes
    * @property integer $double
    * @property integer $closed
    * @property integer $rejected
    * @property string $rejectedReason
    * @property string $created_at
    * @property integer $created_by
    * @property string $updated_at
    * @property integer $updated_by
    *
            * @property User $user
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
return 'application';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['user_id'], 'required'],
            [['user_id', 'availableFromTime', 'availableToTime', 'earlyLate', 'double', 'closed', 'rejected', 'created_by', 'updated_by'], 'integer'],
            [['availableFromDate', 'availableToDate', 'created_at', 'updated_at'], 'safe'],
            [['availabilityNotes', 'rejectedReason'], 'string'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
    'availableFromDate' => 'Available From Date',
    'availableFromTime' => 'Available From Time',
    'availableToDate' => 'Available To Date',
    'availableToTime' => 'Available To Time',
    'earlyLate' => 'Early Late',
    'availabilityNotes' => 'Availability Notes',
    'double' => 'Double',
    'closed' => 'Closed',
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
    public function getUser()
    {
    return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getApplicationJobs()
    {
    return $this->hasMany(ApplicationJob::className(), ['appl_id' => 'id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getCommitments()
    {
    return $this->hasMany(Commitment::className(), ['appl_id' => 'id']);
    }
}