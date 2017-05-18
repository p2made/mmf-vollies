<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use common\models\Application;
use common\models\Commitment;
use common\models\History;
use common\models\User;

/**
 * This is the model class for table "{{%profile}}".
 *
	* @property integer $id
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
	* @property string $email
	* @property string $timezone
	* @property string $created_at
	* @property integer $created_by
	* @property string $updated_at
	* @property integer $updated_by
	*
		* @property Application[] $applications
		* @property Commitment[] $commitments
		* @property History[] $histories
		* @property User $user
	*/

class Profile extends \amnah\yii2\user\models\Profile
{
	/**
	 * @var \amnah\yii2\user\Module
	 */
	public $module;

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		if (!$this->module) {
			$this->module = Yii::$app->getModule("user");
		}
	}

	/**
	* @inheritdoc
	*/
	public static function tableName()
	{
	return '{{%profile}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['user_id', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'bc', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'created_by', 'updated_by'], 'integer'],
			[['givenName', 'familyName', 'phone1', 'address1', 'locality', 'emergencyContact', 'emergencyPhone1', 'discovery'], 'required'],
			[['dnr', 'created_at', 'updated_at'], 'safe'],
			[['givenName', 'familyName', 'preferredName', 'locality', 'emergencyContact'], 'string', 'max' => 64],
			[['phone1', 'phone2', 'state', 'postcode', 'country', 'emergencyPhone1', 'emergencyPhone2'], 'string', 'max' => 32],
			[['address1', 'address2', 'discoveryDetail', 'email', 'timezone'], 'string', 'max' => 255],
			[['discovery'], 'string', 'max' => 24],
			[['user_id'], 'unique'],
			[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => Yii::t('user', 'ID'),
			'user_id' => Yii::t('user', 'User ID'),
			'givenName' => 'Given Name',
			'familyName' => 'Family Name',
			'preferredName' => 'Preferred Name / Nickname',
			'phone1' => 'Primary Phone',
			'phone2' => 'Secondary Phone',
			'address1' => 'Address',
			'address2' => 'Address Line 2',
			'locality' => 'Suburb/Town/Locality',
			'state' => 'State',
			'postcode' => 'Postcode',
			'country' => 'Country',
			'emergencyContact' => 'Emergency Contact Name',
			'emergencyPhone1' => 'Primary Phone',
			'emergencyPhone2' => 'Secondary Phone',
			'rsa' => 'Responsible Service of Alcohol',
			'dl_c' => 'Driver\'s Licence (car)',
			'dl_h' => 'Driver\'s Licence (LR or above)',
			'cse' => 'Customer Service Experience',
			'ohs' => 'OHS qualifications',
			'bc' => 'Blue Card (working with children)',
			'vol' => 'I have volunteered before',
			'mmfVol' => 'I have volunteered for this festival before',
			'mmfAtt' => 'I have been to this festival before',
			'returned' => 'Returned',
			'dnr' => 'DNR',
			'discovery' => 'Discovery',
			'discoveryDetail' => 'Detail',
			'email' => 'Email Address',
			'timezone' => Yii::t('user', 'Time zone'),
			'created_at' => Yii::t('user', 'Created At'),
			'created_by' => 'Created By',
			'updated_at' => Yii::t('user', 'Updated At'),
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'timestamp' => [
				'class' => 'yii\behaviors\TimestampBehavior',
				'value' => function ($event) {
					return gmdate("Y-m-d H:i:s");
				},
			],
		];
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getApplications()
	{
	return $this->hasMany(Application::className(), ['profile_id' => 'id']);
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getCommitments()
	{
	return $this->hasMany(Commitment::className(), ['profile_id' => 'id']);
	}

	/**
	* @return \yii\db\ActiveQuery
	*/
	public function getHistories()
	{
	return $this->hasMany(History::className(), ['profile_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		$user = $this->module->model("User");
		return $this->hasOne($user::className(), ['id' => 'user_id']);
	}

	/**
	 * Set user id
	 * @param int $userId
	 * @return static
	 */
	public function setUser($userId)
	{
		$this->user_id = $userId;
		return $this;
	}

	/**
	 * @inheritdoc
	 * @return ProfileQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new ProfileQuery(get_called_class());
	}
}
