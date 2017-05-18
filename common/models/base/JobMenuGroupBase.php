<?php

namespace common\models\base;

use Yii;
use common\models\Job;

/**
 * This is the model class for table "{{%job_menu_group}}".
*
	* @property integer $id
	* @property integer $sequence
	* @property string $name
	* @property string $created_at
	* @property string $updated_at
	*
			* @property Job[] $jobs
	*/
class JobMenuGroupBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%job_menu_group}}';
}

/**
* @inheritdoc
*/
public function rules()
{
		return [
			[['sequence', 'name'], 'required'],
			[['sequence'], 'integer'],
			[['created_at', 'updated_at'], 'safe'],
			[['name'], 'string', 'max' => 24],
		];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
	'id' => 'ID',
	'sequence' => 'Sequence',
	'name' => 'Name',
	'created_at' => 'Created At',
	'updated_at' => 'Updated At',
];
}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getJobs()
	{
	return $this->hasMany(Job::className(), ['group_id' => 'id']);
	}

	/**
	 * @inheritdoc
	 * @return JobMenuGroupQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new JobMenuGroupQuery(get_called_class());
}
}