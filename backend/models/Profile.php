<?php

namespace backend\models;

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
 * @property string $vollieName;
 * @property string $lexicalName;
 * @property string $email;
 */
class Profile extends \common\models\Profile
{
	// virtual attributes
	private $vollieName;
	private $lexicalName;
	private $email;

	//use ModuleTrait;
	/** @var \dektrium\user\Module */
	//protected $module;

	// public static function tableName()

	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				//
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				[['vollieName', 'lexicalName', 'email'], 'safe'],
			]
		);
	}

	public function attributeLabels()
	{
		return [
			'user_id' =>          'User ID',
			'givenName' =>        'Given Name',
			'familyName' =>       'Family Name',
			'preferredName' =>    'Preferred',
			'vollieName' =>       'Name',
			'lexicalName' =>      'Name',
			'phone1' =>           'Primary Phone',
			'phone2' =>           'Secondary Phone',
			'email' =>            'Email Address',
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
			'vol' =>              'Has volunteered before',
			'mmfVol' =>           'Has volunteered at MMF',
			'mmfAtt' =>           'Has attended MMF',
			'returned' =>         'Returned',
		//	'dnr' =>              'Do Not Reinvite',
			'dnr' =>              'DNR',
			'discovery' =>        'Discovery',
			'discoveryDetail' =>  'Discovery Detail',
			'timezone' =>         'Timezone',
			'created_at' =>       'Created At',
			'updated_at' =>       'Updated At',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

		$this->email = $this->user->email;
	}

	public function beforeSave($insert)
	{
		parent::beforeSave($insert);

		if (!$this->preferredName) {
			$this->preferredName = $this->givenName;
		}
	}

	public function getPreferredName()
	{
		if ($this->preferredName) {
			return $this->preferredName;
		}

		$this->preferredName = $this->givenName;
		$this->save();

		return $this->preferredName;
	}

	public function getVollieName()
	{
		if ($this->vollieName) {
			return $this->vollieName;
		}

		return $this->vollieName = $this->givenName
			. ($this->familyName ? ' ' . $this->familyName : '');
	}

	public function getLexicalName()
	{
		if ($this->lexicalName) {
			return $this->lexicalName;
		}

		return $this->lexicalName =
			($this->familyName ? $this->familyName . ', ' : '')
			. $this->givenName;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getReturned()
	{
		if ($this->returned == true) {
			return $this->returned;
		}

		if (count($this->commitments) > 1) {
			$this->returned = 1;
			$this->save();
		}

		return $this->returned;
	}

	// public function getApplications()

	// public function getCommitments()

	// public function getHistories()

	// public function getTeams()

	// public static function find()

	// public function init()

	// public function getAvatarUrl($size = 200)

	// public function getUser()

	// public function validateTimeZone($attribute, $params)

	// public function getTimeZone()

	// public function setTimeZone(\DateTimeZone $timeZone)

	// public function toLocalTime(\DateTime $dateTime = null)

	// public function beforeSave($insert)

	// public static function tableName()

}
