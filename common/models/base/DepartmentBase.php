<?php

namespace common\models\base;

use Yii;
use common\models\Commitment;
use common\models\User;
use common\models\Job;

/**
 * This is the model class for table "department".
*
    * @property integer $id
    * @property integer $head_id
    * @property integer $sequence
    * @property string $name
    * @property string $description
    * @property string $created_at
    * @property integer $created_by
    * @property string $updated_at
    * @property integer $updated_by
    *
            * @property Commitment[] $commitments
            * @property User $head
            * @property Job[] $jobs
    */
class DepartmentBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'department';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['head_id', 'sequence', 'created_by', 'updated_by'], 'integer'],
            [['sequence', 'name'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 24],
            [['head_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['head_id' => 'id']],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'head_id' => 'Head ID',
    'sequence' => 'Sequence',
    'name' => 'Name',
    'description' => 'Description',
    'created_at' => 'Created At',
    'created_by' => 'Created By',
    'updated_at' => 'Updated At',
    'updated_by' => 'Updated By',
];
}

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getCommitments()
    {
    return $this->hasMany(Commitment::className(), ['dept_id' => 'id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getHead()
    {
    return $this->hasOne(User::className(), ['id' => 'head_id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getJobs()
    {
    return $this->hasMany(Job::className(), ['dept_id' => 'id']);
    }
}