<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "Job".
 *
 * @property integer $id
 * @property integer $deptId
 * @property string $name
 * @property string $menuGroup
 * @property string $description
 * @property string $created
 * @property integer $createdBy
 * @property string $updated
 * @property integer $updatedBy
 * @property string $aliasModel
 */
abstract class Job extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'Job';
	}


	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			[
				'class' => BlameableBehavior::className(),
				'createdByAttribute' => 'createdBy',
				'updatedByAttribute' => 'updatedBy',
			],
			[
				'class' => TimestampBehavior::className(),
				'createdAtAttribute' => 'created',
				'updatedAtAttribute' => 'updated',
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['deptId'], 'integer'],
			[['name', 'menuGroup'], 'required'],
			[['description'], 'string'],
			[['name', 'menuGroup'], 'string', 'max' => 24]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'deptId' => 'Dept ID',
			'name' => 'Name',
			'menuGroup' => 'Menu Group',
			'description' => 'Description',
			'created' => 'Created',
			'createdBy' => 'Created By',
			'updated' => 'Updated',
			'updatedBy' => 'Updated By',
		];
	}


	
	/**
	 * @inheritdoc
	 * @return \common\models\JobQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new \common\models\JobQuery(get_called_class());
	}


}
