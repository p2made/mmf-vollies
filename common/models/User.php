<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * User ActiveRecord model.
 *
 * @property bool	$isAdmin
 * @property bool	$isBlocked
 * @property bool	$isConfirmed
 *
 * Database fields:
 * @property integer $id
 * @property string  $username
 * @property string  $email
 * @property string  $unconfirmed_email
 * @property string  $password_hash
 * @property string  $auth_key
 * @property string  $registration_ip
 * @property integer $confirmed_at
 * @property integer $blocked_at
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $last_login
 * @property integer $flags
 *
 * Defined relations:
 * @property Account[] $accounts
 * @property Profile   $profile
 *
 * Dependencies:
 * @property-read Finder $finder
 * @property-read Module $module
 * @property-read Mailer $mailer
 */
class User extends \dektrium\user\models\User
{
	//use ModuleTrait;

	//const BEFORE_CREATE   = 'beforeCreate';
	//const AFTER_CREATE	= 'afterCreate';
	//const BEFORE_REGISTER = 'beforeRegister';
	//const AFTER_REGISTER  = 'afterRegister';
	//const BEFORE_CONFIRM  = 'beforeConfirm';
	//const AFTER_CONFIRM   = 'afterConfirm';

	// following constants are used on secured email changing process
	//const OLD_EMAIL_CONFIRMED = 0b1;
	//const NEW_EMAIL_CONFIRMED = 0b10;

	/** @var string Plain password. Used for model validation. */
	//public $password;

	/** @var Profile|null */
	//private $_profile;

	/** @var string Default username regexp */
	//public static $usernameRegexp = '/^[-a-zA-Z0-9_\.@]+$/';

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


	public function pastJobs()
	{
		$commitments = Commitment::find()
			->where(['user_id' => $this->id])
			->orderBy('year')
			->all();
		$jobs = [];

		if (count($commitments) < 1) {
			return null;
		}

		foreach ($commitments as $commitment) {
			$jobs = array_merge($jobs,
				[$commitment->year => $commitment->job]
			);
		}

		if (count($jobs) == 1) {
			return 'Previous job:' . $jobs[0];
		}

		ksort($jobs);
		$jobString = 'Previous jobs:' . array_shift($jobs);
		foreach ($jobs as $job) {
			$jobString .= ', ' . ksort($jobs);
		}

		return $jobString;
	}

	public function hasCurentApplication()
	{
		$application = Application::find()
			->where(['id' => 123])
			->one();

		return ($application != null);
	}
	//protected function getFinder()

	//protected function getMailer()

	//public function getIsConfirmed()

	//public function getIsBlocked()

	//public function getIsAdmin()

	//public function getProfile()

	//public function setProfile(Profile $profile)

	//public function getAccounts()

	//public function getAccountByProvider($provider)

	//public function getId()

	//public function getAuthKey()

	//public function attributeLabels()

	//public function behaviors()

	//public function scenarios()

	//public function rules()

	//public function validateAuthKey($authKey)

	//public function create()

	//public function register()

	//public function attemptConfirmation($code)

	//public function resendPassword()

	//public function attemptEmailChange($code)

	//public function confirm()

	//public function resetPassword($password)

	//public function block()

	//public function unblock()

	//public function generateUsername()

	//public function beforeSave($insert)

	//public function afterSave($insert, $changedAttributes)

	//public static function tableName()

	//public static function findIdentity($id)

	//public static function findIdentityByAccessToken($token, $type = null)



}
