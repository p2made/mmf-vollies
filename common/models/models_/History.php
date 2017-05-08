<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%history}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $givenName
 * @property string $familyName
 * @property string $preferredName
 * @property string $email
 * @property string $phone1
 * @property string $phone2
 * @property string $address1
 * @property string $address2
 * @property string $locality
 * @property string $state
 * @property string $postcode
 * @property string $country
 * @property string $emergencyContact
 * @property string $emergencyPhone1
 * @property string $emergencyPhone2
 * @property integer $rsa
 * @property integer $dl_c
 * @property integer $dl_h
 * @property integer $cse
 * @property integer $ohs
 * @property integer $vol
 * @property integer $mmfVol
 * @property integer $mmfAtt
 * @property integer $returned
 * @property string $preferredJobs
 * @property string $availability
 * @property string $commentsInformation
 * @property string $discovery
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 * @property integer $original_id
 * @property string $ip
 * @property string $key_orig
 * @property string $created_orig
 * @property string $updated_orig
 *
 * @property User $user
 */
class History extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%history}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['user_id', 'givenName', 'locality', 'emergencyContact', 'emergencyPhone1', 'original_id'], 'required'],
			[['user_id', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'created_by', 'updated_by', 'original_id'], 'integer'],
			[['preferredJobs', 'availability', 'commentsInformation', 'discovery'], 'string'],
			[['created_at', 'updated_at', 'created_orig', 'updated_orig'], 'safe'],
			[['givenName', 'familyName', 'preferredName', 'locality', 'emergencyContact'], 'string', 'max' => 64],
			[['email'], 'string', 'max' => 128],
			[['phone1', 'phone2', 'state', 'postcode', 'country', 'emergencyPhone1', 'emergencyPhone2'], 'string', 'max' => 32],
			[['address1', 'address2'], 'string', 'max' => 255],
			[['ip'], 'string', 'max' => 16],
			[['key_orig'], 'string', 'max' => 8],
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
			'givenName' => 'Given Name',
			'familyName' => 'Family Name',
			'preferredName' => 'Preferred Name',
			'email' => 'Email',
			'phone1' => 'Phone1',
			'phone2' => 'Phone2',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'locality' => 'Locality',
			'state' => 'State',
			'postcode' => 'Postcode',
			'country' => 'Country',
			'emergencyContact' => 'Emergency Contact',
			'emergencyPhone1' => 'Emergency Phone1',
			'emergencyPhone2' => 'Emergency Phone2',
			'rsa' => 'Rsa',
			'dl_c' => 'Dl C',
			'dl_h' => 'Dl H',
			'cse' => 'Cse',
			'ohs' => 'Ohs',
			'vol' => 'Vol',
			'mmfVol' => 'Mmf Vol',
			'mmfAtt' => 'Mmf Att',
			'returned' => 'Returned',
			'preferredJobs' => 'Preferred Jobs',
			'availability' => 'Availability',
			'commentsInformation' => 'Comments Information',
			'discovery' => 'Discovery',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
			'original_id' => 'Original ID',
			'ip' => 'Ip',
			'key_orig' => 'Key Orig',
			'created_orig' => 'Created Orig',
			'updated_orig' => 'Updated Orig',
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
	 * @inheritdoc
	 * @return HistoryQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new HistoryQuery(get_called_class());
	}
}
?>


