<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "profile".
 *
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
 * @property integer $fa
 * @property integer $vol
 * @property integer $mmfVol
 * @property integer $mmfAtt
 * @property integer $returned
 * @property string $dnr
 * @property string $discovery
 * @property string $discoveryDetail
 * @property string $timezone
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Application[] $applications
 * @property \common\models\Commitment[] $commitments
 * @property \common\models\History[] $histories
 * @property \common\models\User $user
 * @property \common\models\Team[] $teams
 * @property string $aliasModel
 *
 * @property string $fullName;
 * @property string[] $fullNameArray;
 * @property string $emailAddress;
 */
class Profile extends \dektrium\user\models\Profile
{
	// virtual attributes
	public $fullName;
	public $fullNameArray = [];
	public $emailAddress;

	//use ModuleTrait;
	/** @var \dektrium\user\Module */
	//protected $module;

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_profile';
	}

	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				'class' => TimestampBehavior::className(),
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				[['givenName', 'familyName', 'phone1', 'address1', 'locality', 'emergencyContact', 'emergencyPhone1', 'discovery'], 'required'],
				[['rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'bc', 'fa', 'vol', 'mmfVol', 'mmfAtt', 'returned'], 'integer'],
				[['dnr', 'fullName', 'emailAddress'], 'safe'],
				[['bio'], 'string'],
				[['givenName', 'familyName', 'preferredName', 'locality', 'emergencyContact'], 'string', 'max' => 64],
				[['phone1', 'phone2', 'state', 'postcode', 'country', 'emergencyPhone1', 'emergencyPhone2', 'gravatar_id'], 'string', 'max' => 32],
				[['address1', 'address2', 'discoveryDetail', 'name', 'location', 'website'], 'string', 'max' => 255],
				[['discovery'], 'string', 'max' => 24],
				[['timezone'], 'string', 'max' => 40],
				[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']]
			]
		);
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'user_id' => 'User ID',
			'givenName' =>        'Given Name',
			'familyName' =>       'Family Name',
			'fullName' =>         'Full Name',
			'preferredName' =>    'Preferred Name',
			'phone1' =>           'Primary Phone',
			'phone2' =>           'Secondary Phone',
			'emailAddress' =>     'Email Address',
			'address1' =>         'Address 1',
			'address2' =>         'Address 2',
			'locality' =>         'Locality',
			'state' =>            'State',
			'postcode' =>         'Postcode',
			'country' =>          'Country',
			'emergencyContact' => 'Emergency Contact',
			'emergencyPhone1' =>  'Primary Phone',
			'emergencyPhone2' =>  'Secondary Phone',
			'rsa' =>              'Responsible Service of Alcohol',
			'dl_c' =>             'Driver\'s Licence (car)',
			'dl_h' =>             'Driver\'s Licence (LR or above)',
			'cse' =>              'Customer Service Experience',
			'ohs' =>              'OH&S Qualifications',
			'bc' =>               'Blue Card (working with children)',
			'fa' =>               'First Aid Certificate',
			'vol' =>              'I have volunteered before',
			'mmfVol' =>           'I have volunteered at MMF',
			'mmfAtt' =>           'I have attended MMF',
			'returned' =>         'Returned',
			'dnr' =>              'Do Not Reinvite',
			'discovery' =>        'Discovery',
			'discoveryDetail' =>  'Discovery Detail',
			'timezone' => 'Timezone',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

		$fName = $this->familyName;
		$gName = $this->givenName;
		if ($fName) {
			$this->fullName = $fName . ', ' . $gName;
			$this->fullNameArray[0] = $gName . $fName;
			$this->fullNameArray[1] = $this->fullName;
		} else {
			$this->fullName = $gName;
			$this->fullNameArray[0] = $gName . $fName;
			$this->fullNameArray[1] = $this->fullName;
		}
		$this->preferredName = ($this->preferredName ? $this->preferredName : $this->givenName);
		$this->emailAddress = $this->user->email;
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApplications()
	{
		return $this->hasMany(Application::className(), ['user_id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCommitments()
	{
		return $this->hasMany(Commitment::className(), ['user_id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getHistories()
	{
		return $this->hasMany(History::className(), ['user_id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTeams()
	{
		return $this->hasMany(Team::className(), ['head_id' => 'user_id']);
	}

	/**
	 * @inheritdoc
	 * @return \common\models\ProfileQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new \common\models\ProfileQuery(get_called_class());
	}

	//public function init()

	//public function getAvatarUrl($size = 200)

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(User::className(), ['id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQueryInterface
	public function getUser()
	{
		return $this->hasOne($this->module->modelMap['User'], ['id' => 'user_id']);
	}
	 */

	//public function rules()

	//public function attributeLabels()

	//public function validateTimeZone($attribute, $params)

	//public function getTimeZone()

	//public function setTimeZone(\DateTimeZone $timeZone)

	//public function toLocalTime(\DateTime $dateTime = null)

	//public function beforeSave($insert)

	//public static function tableName()


}
