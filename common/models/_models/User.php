<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\swiftmailer\Mailer;
use yii\swiftmailer\Message;
use yii\helpers\ArrayHelper;
use yii\helpers\Inflector;
use yii\behaviors\TimestampBehavior;
use ReflectionClass;

/**
 * This is the model class for table "mmf_user".
 *
 * @property integer $id
 * @property integer $role_id
 * @property integer $status
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property string $logged_in_ip
 * @property string $logged_in_at
 * @property string $created_ip
 * @property string $banned_at
 * @property string $banned_reason
 * @property string $created_at
 * @property string $updated_at
 *
 * @property \common\models\Application[] $applications
 * @property \common\models\Commitment[] $commitments
 * @property \common\models\History[] $histories
 * @property \common\models\Profile $profile
 * @property \common\models\Team[] $teams
 * @property \common\models\Role $role
 * @property \common\models\UserAuth[] $userAuths
 * @property \common\models\UserToken[] $userTokens
 * @property string $aliasModel
 */
class User extends \amnah\yii2\user\models\User
{
	/**
	 * @var int Inactive status
	 */
	const STATUS_INACTIVE = 0;

	/**
	 * @var int Active status
	 */
	const STATUS_ACTIVE = 1;

	/**
	 * @var int Unconfirmed email status
	 */
	const STATUS_UNCONFIRMED_EMAIL = 2;

	/**
	 * @var string Current password - for account page updates
	 */
	public $currentPassword;

	/**
	 * @var string New password - for registration and changing password
	 */
	public $newPassword;

	/**
	 * @var string New password confirmation - for reset
	 */
	public $newPasswordConfirm;

	/**
	 * @var array Permission cache array
	 */
	protected $permissionCache = [];

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
		return 'mmf_user';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		$rules = [
			// general email and username rules
			[['email', 'username'], 'string', 'max' => 255],
			[['email', 'username'], 'unique'],
			[['email', 'username'], 'filter', 'filter' => 'trim'],
			[['email'], 'email'],
			[['username'], 'match', 'pattern' => '/^\w+$/u', 'except' => 'social', 'message' => Yii::t('user', '{attribute} can contain only letters, numbers, and "_"')],

			// password rules
			[['newPassword'], 'string', 'min' => 3],
			[['newPassword'], 'filter', 'filter' => 'trim'],
			[['newPassword'], 'required', 'on' => ['register', 'reset']],
			[['newPasswordConfirm'], 'required', 'on' => ['reset']],
			[['newPasswordConfirm'], 'compare', 'compareAttribute' => 'newPassword', 'message' => Yii::t('user', 'Passwords do not match')],

			// account page
			[['currentPassword'], 'validateCurrentPassword', 'on' => ['account']],

			// admin crud rules
			[['role_id', 'status'], 'required', 'on' => ['admin']],
			[['role_id', 'status'], 'integer', 'on' => ['admin']],
			[['banned_at'], 'integer', 'on' => ['admin']],
			[['banned_reason'], 'string', 'max' => 255, 'on' => 'admin'],
		];

		// add required for currentPassword on account page
		// only if $this->password is set (might be null from a social login)
		if ($this->password) {
			$rules[] = [['currentPassword'], 'required', 'on' => ['account']];
		}

		// add required rules for email/username depending on module properties
		if ($this->module->requireEmail) {
			$rules[] = ["email", "required"];
		}
		if ($this->module->requireUsername) {
			$rules[] = ["username", "required"];
		}

		return $rules;
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
		/*
		return [
			[
				'class' => TimestampBehavior::className(),
			],
		];
		*/
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'role_id' => 'Role ID',
			'status' => 'Status',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'auth_key' => 'Auth Key',
			'access_token' => 'Access Token',
			'logged_in_ip' => 'Logged In IP',
			'logged_in_at' => 'Logged In At',
			'created_ip' => 'Created IP',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'banned_at' => 'Banned At',
			'banned_reason' => 'Banned Reason',

			// virtual attributes set above
			'currentPassword' => 'Current Password',
			'newPassword' => $this->isNewRecord ? 'Password' : 'New Password',
			'newPasswordConfirm' => 'New Password Confirm',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProfile()
	{
		return $this->hasOne(Profile::className(), ['user_id' => 'id']);

		//$profile = $this->module->model("Profile");
		//return $this->hasOne($profile::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getRole()
	{
		return $this->hasOne(Role::className(), ['id' => 'role_id']);

		//$role = $this->module->model("Role");
		//return $this->hasOne($role::className(), ['id' => 'role_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUserAuths()
	{
		return $this->hasMany(UserAuth::className(), ['user_id' => 'id']);

		//return $this->hasMany(UserAuth::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUserTokens()
	{
		return $this->hasMany(UserToken::className(), ['user_id' => 'id']);

		//$userToken = $this->module->model("UserToken");
		//return $this->hasMany($userToken::className(), ['user_id' => 'id']);
	}


	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApplications()
	{
		return $this->hasMany(\common\models\Application::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCommitments()
	{
		return $this->hasMany(\common\models\Commitment::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getHistories()
	{
		return $this->hasMany(\common\models\History::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTeams()
	{
		return $this->hasMany(\common\models\Team::className(), ['head_id' => 'id']);
	}

	/**
	 * @inheritdoc
	 * @return \common\models\UserQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new \common\models\UserQuery(get_called_class());
	}


	/**
	 * Validate current password (account page)
	 */
	public function validateCurrentPassword()
	{
		if (!$this->validatePassword($this->currentPassword)) {
			$this->addError("currentPassword", "Current password incorrect");
		}
	}

	/**
	 * @inheritdoc
	 */
	public static function findIdentity($id)
	{
		return static::findOne($id);
	}

	/**
	 * @inheritdoc
	 */
	public static function findIdentityByAccessToken($token, $type = null)
	{
		return static::findOne(["access_token" => $token]);
	}

	/**
	 * @inheritdoc
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @inheritdoc
	 */
	public function getAuthKey()
	{
		return $this->auth_key;
	}

	/**
	 * @inheritdoc
	 */
	public function validateAuthKey($authKey)
	{
		return $this->auth_key === $authKey;
	}

	/**
	 * Validate password
	 * @param string $password
	 * @return bool
	 */
	public function validatePassword($password)
	{
		return Yii::$app->security->validatePassword($password, $this->password);
	}

	/**
	 * @inheritdoc
	 */
	public function beforeSave($insert)
	{
		// check if we're setting $this->password directly
		// handle it by setting $this->newPassword instead
		$dirtyAttributes = $this->getDirtyAttributes();
		if (isset($dirtyAttributes["password"])) {
			$this->newPassword = $dirtyAttributes["password"];
		}

		// hash new password if set
		if ($this->newPassword) {
			$this->password = Yii::$app->security->generatePasswordHash($this->newPassword);
		}

		// convert banned_at checkbox to date
		if ($this->banned_at) {
			$this->banned_at = gmdate("Y-m-d H:i:s");
		}

		// ensure fields are null so they won't get set as empty string
		$nullAttributes = ["email", "username", "banned_at", "banned_reason"];
		foreach ($nullAttributes as $nullAttribute) {
			$this->$nullAttribute = $this->$nullAttribute ? $this->$nullAttribute : null;
		}

		return parent::beforeSave($insert);
	}

	/**
	 * Set attributes for registration
	 * @param int $roleId
	 * @param string $status
	 * @return static
	 */
	public function setRegisterAttributes($roleId, $status = null)
	{
		// set default attributes
		$attributes = [
			"role_id" => $roleId,
			"created_ip" => Yii::$app->request->userIP,
			"auth_key" => Yii::$app->security->generateRandomString(),
			"access_token" => Yii::$app->security->generateRandomString(),
			"status" => static::STATUS_ACTIVE,
		];

		// determine if we need to change status based on module properties
		$emailConfirmation = $this->module->emailConfirmation;
		$requireEmail = $this->module->requireEmail;
		$useEmail = $this->module->useEmail;
		if ($status) {
			$attributes["status"] = $status;
		} elseif ($emailConfirmation && $requireEmail) {
			$attributes["status"] = static::STATUS_INACTIVE;
		} elseif ($emailConfirmation && $useEmail && $this->email) {
			$attributes["status"] = static::STATUS_UNCONFIRMED_EMAIL;
		}

		// set attributes and return
		$this->setAttributes($attributes, false);
		return $this;
	}

	/**
	 * Check for email change
	 * @return string|bool
	 */
	public function checkEmailChange()
	{
		// check if user didn't change email
		if ($this->email == $this->getOldAttribute("email")) {
			return false;
		}

		// check if we need to confirm email change
		if (!$this->module->emailChangeConfirmation) {
			return false;
		}

		// check if user is removing email address (only valid if Module::$requireEmail = false)
		if (!$this->email) {
			return false;
		}

		// update status and email before returning new email
		$newEmail = $this->email;
		$this->status = static::STATUS_UNCONFIRMED_EMAIL;
		$this->email = $this->getOldAttribute("email");
		return $newEmail;
	}

	/**
	 * Update login info (ip and time)
	 * @return bool
	 */
	public function updateLoginMeta()
	{
		$this->logged_in_ip = Yii::$app->request->userIP;
		$this->logged_in_at = gmdate("Y-m-d H:i:s");
		return $this->save(false, ["logged_in_ip", "logged_in_at"]);
	}

	/**
	 * Confirm user email
	 * @param string $newEmail
	 * @return bool
	 */
	public function confirm($newEmail)
	{
		// update status
		$this->status = static::STATUS_ACTIVE;

		// process $newEmail from a userToken
		//   check if another user already has that email
		$success = true;
		if ($newEmail) {
			$checkUser = static::findOne(["email" => $newEmail]);
			if ($checkUser) {
				$success = false;
			} else {
				$this->email = $newEmail;
			}
		}

		$this->save(false, ["email", "status"]);
		return $success;
	}

	/**
	 * Check if user can do specified $permission
	 * @param string $permissionName
	 * @param array $params
	 * @param bool $allowCaching
	 * @return bool
	 */
	public function can($permissionName, $params = [], $allowCaching = true)
	{
		// check for auth manager rbac
		// copied from \yii\web\User
		$auth = Yii::$app->getAuthManager();
		if ($auth) {
			if ($allowCaching && empty($params) && isset($this->permissionCache[$permissionName])) {
				return $this->permissionCache[$permissionName];
			}
			$access = $auth->checkAccess($this->getId(), $permissionName, $params);
			if ($allowCaching && empty($params)) {
				$this->permissionCache[$permissionName] = $access;
			}
			return $access;
		}

		// otherwise use our own custom permission (via the role table)
		return $this->role->checkPermission($permissionName);
	}

	/**
	 * Get display name for the user
	 * @return string|int
	 */
	public function getDisplayName()
	{
		return $this->username ?: $this->email ?: $this->id;
	}

	/**
	 * Send email confirmation to user
	 * @param UserToken $userToken
	 * @return int
	 */
	public function sendEmailConfirmation($userToken)
	{
		/** @var Mailer $mailer */
		/** @var Message $message */

		// modify view path to module views
		$mailer = Yii::$app->mailer;
		$oldViewPath = $mailer->viewPath;
		$mailer->viewPath = $this->module->emailViewPath;

		// send email
		$user = $this;
		$profile = $user->profile;
		$email = $userToken->data ?: $user->email;
		$subject = Yii::$app->id . " - " . Yii::t("user", "Email Confirmation");
		$result = $mailer->compose('confirmEmail', compact("subject", "user", "profile", "userToken"))
			->setTo($email)
			->setSubject($subject)
			->send();

		// restore view path and return result
		$mailer->viewPath = $oldViewPath;
		return $result;
	}

	/**
	 * Get list of statuses for creating dropdowns
	 * @return array
	 */
	public static function statusDropdown()
	{
		// get data if needed
		static $dropdown;
		$constPrefix = "STATUS_";
		if ($dropdown === null) {

			// create a reflection class to get constants
			$reflClass = new ReflectionClass(get_called_class());
			$constants = $reflClass->getConstants();

			// check for status constants (e.g., STATUS_ACTIVE)
			foreach ($constants as $constantName => $constantValue) {

				// add prettified name to dropdown
				if (strpos($constantName, $constPrefix) === 0) {
					$prettyName = str_replace($constPrefix, "", $constantName);
					$prettyName = Inflector::humanize(strtolower($prettyName));
					$dropdown[$constantValue] = $prettyName;
				}
			}
		}

		return $dropdown;
	}
}
