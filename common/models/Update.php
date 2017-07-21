<?php

namespace common\models;

use Yii;
use \common\models\base\Update as BaseUpdate;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_update".
 *
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $other0
 * @property string $other1
 * @property string $other2
 * @property integer $status0
 * @property integer $status1
 * @property integer $status2
 * @property string $aliasModel
 */
class Update extends BaseUpdate
{

public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				# custom behaviors
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				# custom validation rules
			]
		);
	}

	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'email' =>   'Email',
			'name' =>    'Name',
			'other0' =>  'Other 0',
			'other1' =>  'Other 1',
			'other2' =>  'Other 2',
			'status0' => 'Status 0',
			'status1' => 'Status 1',
			'status2' => 'Status 2',
		];
	}

	public function sendUpdate()
	{
		$layout = 'vollies-update-2017-07-17';

		Yii::$app->mailer->compose($layout, [
			'email' => $this->email,
			'name'  => $this->name,
		])
			->setFrom('vollies@malenymusicfestival.com')
			->setTo($this->email)
			->setSubject('Maleny Music Festival 2017 Volunteer Application Invitation')
			->send();;
	}


}
