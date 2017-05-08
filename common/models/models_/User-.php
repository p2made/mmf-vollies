<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\behaviors\TimestampBehavior;
use yii2mod\user\models\enums\UserStatus;
use yii2mod\user\traits\EventTrait;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $authKey
 * @property string $passwordHash
 * @property string $passwordResetToken
 * @property string $email
 * @property integer $status
 * @property string $banned_at
 * @property string $banned_reason
 * @property integer $createdAt
 * @property string $created_ip
 * @property integer $updatedAt
 * @property string $updated_ip
 * @property integer $last_login
 * @property string $logged_in_ip
 *
 * @property Application[] $applications
 * @property Commitment[] $commitments
 * @property History[] $histories
 * @property Profile $profile
 * @property Team[] $teams
 *
 * Class User
 *
 * @property string $password write-only password
 */
class User extends \yii2mod\user\models\UserModel
{
	use EventTrait;

	/**
	 * Event is triggered before creating a user.
	 * Triggered with \yii2mod\user\events\CreateUserEvent.
	 */
	const BEFORE_CREATE = 'beforeCreate';

	/**
	 * Event is triggered after creating a user.
	 * Triggered with \yii2mod\user\events\CreateUserEvent.
	 */
	const AFTER_CREATE = 'afterCreate';

	/**
	 * @var string plain password
	 */
	public $plainPassword;

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
			[['username', 'authKey', 'passwordHash', 'email', 'createdAt', 'updatedAt'], 'required'],
			[['status', 'createdAt', 'updatedAt', 'last_login'], 'integer'],
			[['banned_at'], 'safe'],
			[['username', 'authKey'], 'string', 'max' => 32],
			['username', 'min' => 3],

			['status', 'integer'],
			['status', 'default', 'value' => UserStatus::ACTIVE],
			['status', 'in', 'range' => UserStatus::getConstantsByName()],

			[['passwordHash', 'passwordResetToken', 'banned_reason'], 'string', 'max' => 255],
			[['created_ip', 'updated_ip', 'logged_in_ip'], 'string', 'max' => 64],
			['email', 'email', 'max' => 128],
			['email', 'unique', 'message' => Yii::t('yii2mod.user', 'This email address has already been taken.')],
			['username', 'unique', 'message' => Yii::t('yii2mod.user', 'This username has already been taken.')],
			[['authKey'], 'unique', 'passwordResetToken'], 'unique'],
			['plainPassword', 'string', 'min' => 6],
			['plainPassword', 'required', 'on' => 'create'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'username' => 'Username',
			'authKey' => 'Auth Key',
			'passwordHash' => 'Password Hash',
			'passwordResetToken' => 'Password Reset Token',
			'email' => 'Email',
			'status' => 'Status',
			'banned_at' => 'Banned At',
			'banned_reason' => 'Banned Reason',
			'createdAt' => 'Created At',
			'created_ip' => 'Created IP',
			'updatedAt' => 'Updated At',
			'updated_ip' => 'Updated IP',
			'last_login' => 'Last Login',
			'logged_in_ip' => 'Logged In IP',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApplications()
	{
		return $this->hasMany(Application::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCommitments()
	{
		return $this->hasMany(Commitment::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getHistories()
	{
		return $this->hasMany(History::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProfile()
	{
		return $this->hasOne(Profile::className(), ['user_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTeams()
	{
		return $this->hasMany(Team::className(), ['lead_id' => 'id']);
	}

	/**
	 * @inheritdoc
	 * @return UserQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new UserQuery(get_called_class());
	}

	/**
	 * @inheritdoc
	 */
	/**
	public function behaviors()
	{
		return [
			'timestamp' => [
				'class' => 'yii\behaviors\TimestampBehavior',
				'createdAtAttribute' => 'createdAt',
				'updatedAtAttribute' => 'updatedAt',
			],
		];
	}
	 */

	/**
	 * Create user
	 *
	 * @return null|UserModel the saved model or null if saving fails
	 *
	 * @throws \Exception
	 */
	/**
	public function create()
	{
		$transaction = $this->getDb()->beginTransaction();

		try {
			$event = $this->getCreateUserEvent($this);
			$this->trigger(self::BEFORE_CREATE, $event);

			$this->setPassword($this->plainPassword);
			$this->generateAuthKey();

			if (!$this->save()) {
				$transaction->rollBack();

				return null;
			}

			$this->trigger(self::AFTER_CREATE, $event);

			$transaction->commit();

			return $this;
		} catch (\Exception $e) {
			$transaction->rollBack();
			Yii::warning($e->getMessage());
			throw $e;
		}
	}
	 */

	/**
	 * @inheritdoc
	 */
	/**
	public static function findIdentity($id)
	{
		return static::findOne($id);
	}
	 */

	/**
	 * @inheritdoc
	 */
	/**
	public static function findIdentityByAccessToken($token, $type = null)
	{
		throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
	}
	 */

	/**
	 * Finds user (with active status) by username
	 *
	 * @param  string $username
	 *
	 * @return static|null
	 */
	/**
	public static function findByUsername($username)
	{
		return static::findOne(['username' => $username, 'status' => UserStatus::ACTIVE]);
	}
	 */

	/**
	 * Finds user by email
	 *
	 * @param $email
	 *
	 * @return null|static
	 */
	/**
	public static function findByEmail($email)
	{
		return static::findOne(['email' => $email]);
	}
	 */

	/**
	 * Finds user by password reset token
	 *
	 * @param string $token password reset token
	 *
	 * @return static|null
	 */
	/**
	public static function findByPasswordResetToken($token)
	{
		if (!static::isPasswordResetTokenValid($token)) {
			return null;
		}

		return static::findOne([
			'passwordResetToken' => $token,
			'status' => UserStatus::ACTIVE,
		]);
	}
	 */

	/**
	 * Finds out if password reset token is valid
	 *
	 * @param string $token password reset token
	 *
	 * @return bool
	 */
	/**
	public static function isPasswordResetTokenValid($token)
	{
		if (empty($token)) {
			return false;
		}
		$timestamp = (int)substr($token, strrpos($token, '_') + 1);
		$expire = Yii::$app->params['user.passwordResetTokenExpire'];

		return $timestamp + $expire >= time();
	}
	 */

	/**
	 * @inheritdoc
	 */
	/**
	public function getId()
	{
		return $this->getPrimaryKey();
	}
	 */

	/**
	 * @inheritdoc
	 */
	/**
	public function getAuthKey()
	{
		return $this->authKey;
	}
	 */

	/**
	 * @inheritdoc
	 */
	/**
	public function validateAuthKey($authKey)
	{
		return $this->getAuthKey() === $authKey;
	}
	 */

	/**
	 * Validates password
	 *
	 * @param  string $password password to validate
	 *
	 * @return bool if password provided is valid for current user
	 */
	/**
	public function validatePassword($password)
	{
		return Yii::$app->getSecurity()->validatePassword($password, $this->passwordHash);
	}
	 */

	/**
	 * Generates password hash from password and sets it to the model
	 *
	 * @param string $password
	 */
	/**
	public function setPassword($password)
	{
		$this->passwordHash = Yii::$app->getSecurity()->generatePasswordHash($password);
	}
	 */

	/**
	 * Generates "remember me" authentication key
	 */
	/**
	public function generateAuthKey()
	{
		$this->authKey = Yii::$app->getSecurity()->generateRandomString();
	}
	 */

	/**
	 * Generates new password reset token
	 */
	/**
	public function generatePasswordResetToken()
	{
		$this->passwordResetToken = Yii::$app->getSecurity()->generateRandomString() . '_' . time();
	}
	 */

	/**
	 * Removes password reset token
	 */
	/**
	public function removePasswordResetToken()
	{
		$this->passwordResetToken = null;
	}
	 */

	/**
	 * Update last login
	 */
	/**
	public function updateLastLogin()
	{
		$this->updateAttributes(['lastLogin' => time()]);
	}
	 */

	/**
	 * Resets password.
	 *
	 * @param string $password
	 *
	 * @return bool
	 */
	/**
	public function resetPassword($password)
	{
		$this->setPassword($password);

		return $this->save(true, ['passwordHash']);
	}
	 */
}
?>


