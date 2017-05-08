<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%application_job}}".
 *
 * @property integer $id
 * @property integer $appl_id
 * @property integer $job_id
 * @property integer $preference
 *
 * @property Job $job
 * @property Application $appl
 */
class ApplicationJob extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%application_job}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['appl_id', 'job_id'], 'required'],
			[['appl_id', 'job_id', 'preference'], 'integer'],
			[['job_id'], 'exist', 'skipOnError' => true, 'targetClass' => Job::className(), 'targetAttribute' => ['job_id' => 'id']],
			[['appl_id'], 'exist', 'skipOnError' => true, 'targetClass' => Application::className(), 'targetAttribute' => ['appl_id' => 'id']],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'appl_id' => 'Appl ID',
			'job_id' => 'Job ID',
			'preference' => 'Preference',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getJob()
	{
		return $this->hasOne(Job::className(), ['id' => 'job_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAppl()
	{
		return $this->hasOne(Application::className(), ['id' => 'appl_id']);
	}

	/**
	 * @inheritdoc
	 * @return ApplicationJobQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new ApplicationJobQuery(get_called_class());
	}
}
?>


