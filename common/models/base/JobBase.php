<?php

namespace common\models\base;

use Yii;
use common\models\ApplicationJob;
use common\models\Department;

/**
 * This is the model class for table "job".
*
    * @property integer $id
    * @property integer $dept_id
    * @property integer $sequence
    * @property string $name
    * @property string $menuGroup
    * @property string $description
    * @property string $created_at
    * @property integer $created_by
    * @property string $updated_at
    * @property integer $updated_by
    *
            * @property ApplicationJob[] $applicationJobs
            * @property Department $dept
    */
class JobBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return 'job';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['dept_id', 'sequence', 'name', 'menuGroup'], 'required'],
            [['dept_id', 'sequence', 'created_by', 'updated_by'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'menuGroup'], 'string', 'max' => 24],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'id']],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'dept_id' => 'Dept ID',
    'sequence' => 'Sequence',
    'name' => 'Name',
    'menuGroup' => 'Menu Group',
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
    public function getApplicationJobs()
    {
    return $this->hasMany(ApplicationJob::className(), ['job_id' => 'id']);
    }

    /**
    * @return \yii\db\ActiveQuery
    */
    public function getDept()
    {
    return $this->hasOne(Department::className(), ['id' => 'dept_id']);
    }
}