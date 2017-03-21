<?php

namespace common\models;

use Yii;
use \common\models\base\Profile as BaseProfile;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "Profile".
 */
class Profile extends BaseProfile
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

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'givenName' => 'Given Name',
			'familyName' => 'Family Name',
			'preferredName' => 'Preferred Name',
			'email' => 'Email',
			'phone1' => 'Primary Phone',
			'phone2' => 'Secondary Phone',
			'address1' => 'Address',
			'address2' => 'Address',
			'locality' => 'Locality',
			'state' => 'State',
			'postcode' => 'Postcode',
			'country' => 'Country',
			'emergencyContact' => 'Emergency Contact',
			'emergencyPhone1' => 'Primary Phone',
			'emergencyPhone2' => 'Secondary Phone',
			'rsa' => 'Rsa',
			'dl_c' => 'Dl C',
			'dl_h' => 'Dl H',
			'cse' => 'Cse',
			'ohs' => 'Ohs',
			'vol' => 'Vol',
			'mmfVol' => 'Mmf Vol',
			'mmfAtt' => 'Mmf Att',
			'discovery' => 'Discovery',
			'discoveryDetail' => 'Discovery Detail',
			'created' => 'Created',
			'createdBy' => 'Created By',
			'updated' => 'Updated',
			'updatedBy' => 'Updated By',
		];
	}


}
