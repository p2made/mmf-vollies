<?php

use yii\db\Schema;
use yii\base\InvalidConfigException;
use yii\rbac\DbManager;

/*
	$this->createTable('example_table', [
	  'id' => $this->primaryKey(),
	  'name' => $this->string(64)->notNull(),
	  'type' => $this->integer()->notNull()->defaultValue(10),
	  'description' => $this->text(),
	  'rule_name' => $this->string(64),
	  'data' => $this->text(),
	  'created_at' => $this->datetime()->notNull(),
	  'updated_at' => $this->datetime(),
	]);

	bigInteger()        Creates a bigint column.
	bigPrimaryKey()     Creates a big primary key column.
	binary()            Creates a binary column.
	boolean()           Creates a boolean column.
	char()              Creates a char column.
	date()              Creates a date column.
	dateTime()          Creates a datetime column.
	decimal()           Creates a decimal column.
	double()            Creates a double column.
	float()             Creates a float column.
	integer()           Creates an integer column.
	money()             Creates a money column.
	primaryKey()        Creates a primary key column.
	smallInteger()      Creates a smallint column.
	string()            Creates a string column.
	text()              Creates a text column.
	time()              Creates a time column.
	timestamp()         Creates a timestamp column.

	after()             Adds an AFTER constraint to the column.
	append()            Specify additional SQL to be appended to column definition.
	canGetProperty()    Returns a value indicating whether a property can be read.
	canSetProperty()    Returns a value indicating whether a property can be set.
	check()             Sets a CHECK constraint for the column.
	className()         Returns the fully qualified name of this class.
	comment()           Specifies the comment for column.
	defaultExpression() Specify the default SQL expression for the column.
	defaultValue()      Specify the default value for the column.
	first()             Adds an FIRST constraint to the column.
	hasMethod()         Returns a value indicating whether a method is defined.
	hasProperty()       Returns a value indicating whether a property is defined.
	init()              Initializes the object.
	notNull()           Adds a NOT NULL constraint to the column.
	null()              Adds a NULL constraint to the column
	unique()            Adds a UNIQUE constraint to the column.
	unsigned()          Marks column as unsigned.
*/

class m170403_163357_mmf_init extends \yii\db\Migration
{
	protected $tableOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';

	/**
	 * @throws yii\base\InvalidConfigException
	 * @return DbManager
	 */
	protected function getAuthManager()
	{
		$authManager = Yii::$app->getAuthManager();
		if (!$authManager instanceof DbManager) {
			throw new InvalidConfigException('You should configure "authManager" component to use database before executing this migration.');
		}
		return $authManager;
	}

	public function up()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		// create tables. note the specific order
		$this->createTable('{{%role}}', [
			'id' => $this->primaryKey(),
			'name' => Schema::TYPE_STRING . ' not null',
			'name' => $this->string(32)->notNull(),
			'can_admin' => $this->smallInteger()->notNull()->defaultValue(0),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $tableOptions); // role

		$this->createTable('{{%user}}', [
			'id' => $this->primaryKey(),
			'role_id' => $this->integer()->notNull()->defaultValue(3),
			'status' => $this->smallInteger()->notNull(),
			'email' => $this->string()->defaultValue(null),
			'username' => $this->string()->defaultValue(null),
			'password' => $this->string()->defaultValue(null),
			'auth_key' => $this->string()->defaultValue(null),
			'access_token' => $this->string()->defaultValue(null),
			'logged_in_ip' => $this->string()->defaultValue(null),
			'logged_in_at' => $this->timestamp()->defaultValue(null),
			'created_ip' => $this->string()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'banned_at' => $this->timestamp()->defaultValue(null),
			'banned_reason' => $this->string()->defaultValue(null),
		], $tableOptions); // user

		$this->createTable('{{%user_token}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->defaultValue(null),
			'type' => $this->smallInteger()->notNull(),
			'token' => $this->string()->notNull(),
			'data' => $this->string()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
		], $tableOptions); // user_token

		$this->createTable('{{%profile}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull()->unique(),
			'givenName' => $this->string(64)->notNull(),
			'familyName' => $this->string(64)->defaultValue(null),
			'preferredName' => $this->string(64)->defaultValue(null),
			'phone1' => $this->string(32)->defaultValue(null),
			'phone2' => $this->string(32)->defaultValue(null),
			'address1' => $this->string()->defaultValue(null),
			'address2' => $this->string()->defaultValue(null),
			'locality' => $this->string(64)->notNull(),
			'state' => $this->string(32)->defaultValue('Qld'),
			'postcode' => $this->string(32)->defaultValue(null),
			'country' => $this->string(32)->defaultValue('Australia'),
			'emergencyContact' => $this->string(64)->notNull(),
			'emergencyPhone1' => $this->string(32)->notNull(),
			'emergencyPhone2' => $this->string(32)->defaultValue(null),
			'rsa' => $this->smallInteger(1)->defaultValue(0),
			'dl_c' => $this->smallInteger(1)->defaultValue(0),
			'dl_h' => $this->smallInteger(1)->defaultValue(0),
			'cse' => $this->smallInteger(1)->defaultValue(0),
			'ohs' => $this->smallInteger(1)->defaultValue(0),
			'vol' => $this->smallInteger(1)->defaultValue(0),
			'mmfVol' => $this->smallInteger(1)->defaultValue(0),
			'mmfAtt' => $this->smallInteger(1)->defaultValue(0),
			'discovery' => $this->string(24)->defaultValue(null),
			'discoveryDetail' => $this->string()->defaultValue(null),
			'returned' => $this->smallInteger(1)->defaultValue(0),
			'dnr' => 'year(4) DEFAULT NULL',
			'timezone' => $this->string()->defaultValue(null),
			'full_name' => $this->string()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $tableOptions); // profile

		$this->createTable('{{%user_auth}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
			'provider' => $this->string()->notNull(),
			'provider_id' => $this->string()->notNull(),
			'provider_attributes' => $this->text()->notNull(),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
		], $tableOptions); // user_auth

		// add indexes for performance optimization
		$this->createIndex('{{%user_email}}', '{{%user}}', 'email', true);
		$this->createIndex('{{%user_username}}', '{{%user}}', 'username', true);
		$this->createIndex('{{%profile_givenName}}', '{{%profile}}', 'givenName');
		$this->createIndex('{{%profile_familyName}}', '{{%profile}}', 'familyName');
		$this->createIndex('{{%profile_preferredName}}', '{{%profile}}', 'preferredName');
		$this->createIndex('{{%profile_phone1}}', '{{%profile}}', 'phone1');
		$this->createIndex('{{%user_token_token}}', '{{%user_token}}', 'token', true);
		$this->createIndex('{{%user_auth_provider_id}}', '{{%user_auth}}', 'provider_id');

		// add foreign keys for data integrity
		$this->addForeignKey('{{%user_role_id}}', '{{%user}}', 'role_id', '{{%role}}', 'id');
		$this->addForeignKey('{{%profile_user_id}}', '{{%profile}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%user_token_user_id}}', '{{%user_token}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%user_auth_user_id}}', '{{%user_auth}}', 'user_id', '{{%user}}', 'id');

		// insert role data
		$columns = ['name', 'can_admin', 'created_at'];
		$this->batchInsert('{{%role}}', $columns, [
			['Admin', 1, gmdate('Y-m-d H:i:s')],
			['Department Head', 1, gmdate('Y-m-d H:i:s')],
			['Vollie', 0, gmdate('Y-m-d H:i:s')],
		]);
	}

	public function down()
	{
		// drop tables in reverse order (for foreign key constraints)
		$this->dropTable('{{%user_auth}}');
		$this->dropTable('{{%profile}}');
		$this->dropTable('{{%user_token}}');
		$this->dropTable('{{%user}}');
		$this->dropTable('{{%role}}');
	}
}
