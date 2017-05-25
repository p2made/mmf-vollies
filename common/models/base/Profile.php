<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "mmf_profile".
 *
 * @property integer $user_id
 * @property string $givenName
 * @property string $familyName
 * @property string $preferredName
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
 * @property integer $bc
 * @property integer $vol
 * @property integer $mmfVol
 * @property integer $mmfAtt
 * @property integer $returned
 * @property string $dnr
 * @property string $discovery
 * @property string $discoveryDetail
 * @property string $timezone
 * @property string $name
 * @property string $public_email
 * @property string $gravatar_email
 * @property string $gravatar_id
 * @property string $location
 * @property string $website
 * @property string $bio
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Application[] $applications
 * @property \common\models\Commitment[] $commitments
 * @property \common\models\History[] $histories
 * @property \common\models\User $user
 * @property \common\models\Team[] $teams
 * @property string $aliasModel
 */
abstract class Profile extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_profile';
	}


	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			[
				'class' => TimestampBehavior::className(),
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['givenName', 'familyName', 'phone1', 'address1', 'locality', 'emergencyContact', 'emergencyPhone1', 'discovery'], 'required'],
			[['rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'bc', 'vol', 'mmfVol', 'mmfAtt', 'returned'], 'integer'],
			[['dnr'], 'safe'],
			[['bio'], 'string'],
			[['givenName', 'familyName', 'preferredName', 'locality', 'emergencyContact'], 'string', 'max' => 64],
			[['phone1', 'phone2', 'state', 'postcode', 'country', 'emergencyPhone1', 'emergencyPhone2', 'gravatar_id'], 'string', 'max' => 32],
			[['address1', 'address2', 'discoveryDetail', 'name', 'public_email', 'gravatar_email', 'location', 'website'], 'string', 'max' => 255],
			[['discovery'], 'string', 'max' => 24],
			[['timezone'], 'string', 'max' => 40],
			[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'user_id' => 'User ID',
			'givenName' => 'Given Name',
			'familyName' => 'Family Name',
			'preferredName' => 'Preferred Name',
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
			'bc' => 'Bc',
			'vol' => 'Vol',
			'mmfVol' => 'Mmf Vol',
			'mmfAtt' => 'Mmf Att',
			'returned' => 'Returned',
			'dnr' => 'Dnr',
			'discovery' => 'Discovery',
			'discoveryDetail' => 'Discovery Detail',
			'timezone' => 'Timezone',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'name' => 'Name',
			'public_email' => 'Public Email',
			'gravatar_email' => 'Gravatar Email',
			'gravatar_id' => 'Gravatar ID',
			'location' => 'Location',
			'website' => 'Website',
			'bio' => 'Bio',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApplications()
	{
		return $this->hasMany(\common\models\Application::className(), ['user_id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCommitments()
	{
		return $this->hasMany(\common\models\Commitment::className(), ['user_id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getHistories()
	{
		return $this->hasMany(\common\models\History::className(), ['user_id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTeams()
	{
		return $this->hasMany(\common\models\Team::className(), ['head_id' => 'user_id']);
	}


	
	/**
	 * @inheritdoc
	 * @return \common\models\ProfileQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new \common\models\ProfileQuery(get_called_class());
	}


}
