<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\swiftmailer\Mailer;
use yii\swiftmailer\Message;
use yii\helpers\Inflector;
use ReflectionClass;

/**
 * This is the model class for table "{{%user}}".
 *
 * Class \common\models\User
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
 * @property string $created_at
 * @property string $updated_at
 * @property string $banned_at
 * @property string $banned_reason
 *
 * @property Profile $profile
 * @property Role $role
 * @property UserAuth[] $userAuths
 * @property UserToken[] $userTokens
 */
class User extends \amnah\yii2\user\models\User
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%user}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			// general email and username rules
			[['email', 'username'], 'string', 'max' => 255],
			[['email', 'username'], 'unique'],
			[['email', 'username'], 'filter', 'filter' => 'trim'],
			[['email'], 'email'],
			[['username'], 'match', 'pattern' => '/^\w+$/u', 'except' => 'social', 'message' => Yii::t('user', '{attribute} can contain only letters, numbers, and "_"')],

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
	//public function getProfile()

	/**
	 * @return \yii\db\ActiveQuery
	 */
	//public function getRole()

	/**
	 * @return \yii\db\ActiveQuery
	 */
	//public function getUserAuths()

	/**
	 * @return \yii\db\ActiveQuery
	 */
	//public function getUserTokens()

	/**
	 * @inheritdoc
	 * @return UserQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new UserQuery(get_called_class());
	}
}
