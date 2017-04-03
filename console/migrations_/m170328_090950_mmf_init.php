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

class m170328_090950_mmf_init extends \yii\db\Migration
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
		$authManager = $this->getAuthManager();
		$this->db = $authManager->db;

		/**
		 *
		 * user table
		 *
		 */
		$this->createTable('{{%user}}', [
			'id' => $this->primaryKey(),
			//'role_id' => $this->integer()->notNull(),
			'username' => $this->string(32)->notNull()->unique(),
			//'auth_key' => $this->string(32)->notNull(),
			//'password_hash' => $this->string()->notNull(),
			//'password_reset_token' => $this->string()->unique(),
			'authKey' => $this->string(32)->notNull(),
			'passwordHash' => $this->string()->notNull(),
			'passwordResetToken' => $this->string()->unique(),
			'email' => $this->string(128)->notNull()->unique(),
			//'status' => $this->smallInteger()->notNull()->defaultValue(10),
			'status' => $this->smallInteger()->notNull()->defaultValue(1),
			'banned_at' => $this->timestamp()->defaultValue(null),
			'banned_reason' => $this->string()->defaultValue(null),
			//'created_at' => $this->integer()->notNull(),
			'createdAt' => $this->integer()->notNull(),
			'created_ip' => $this->string(64)->defaultValue(null),
			//'updated_at' => $this->integer()->notNull(),
			'updatedAt' => $this->integer()->notNull(),
			'updated_ip' => $this->string(64)->defaultValue(null),
			//'logged_in_at' => $this->timestamp()->defaultValue(null),
			'last_login' => $this->integer(),
			'logged_in_ip' => $this->string(64)->defaultValue(null),
		], $this->tableOptions); // user table
		$this->createIndex('{{%user_email}}', '{{%user}}', 'email', true);
		$this->createIndex('{{%user_username}}', '{{%user}}', 'username', true);
		//$this->createIndex('{{%user_auth_key}}', '{{%user}}', 'auth_key', true);
		$this->createIndex('{{%user_auth_key}}', '{{%user}}', 'authKey', true);

		/**
		 *
		 * ruleTable
		 *
		 */
		$this->createTable($authManager->ruleTable, [
			'name' => $this->string(64)->notNull(),
			'data' => $this->binary(),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
			'PRIMARY KEY (name)',
		], $this->tableOptions); // ruleTable
		$this->createIndex('idx-auth_rule-name', $authManager->ruleTable, 'name', true);

		/**
		 *
		 * itemTable
		 *
		 */
		$this->createTable($authManager->itemTable, [
			'name' => $this->string(64)->notNull(),
			'type' => $this->smallInteger()->notNull(),
			'description' => $this->text(),
			'rule_name' => $this->string(64),
			'data' => $this->binary(),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
			'PRIMARY KEY (name)',
			'FOREIGN KEY (rule_name) REFERENCES ' . $authManager->ruleTable . ' (name) ON DELETE SET NULL ON UPDATE CASCADE',
		], $this->tableOptions); // itemTable
		$this->createIndex('idx-auth_item-name', $authManager->itemTable, 'name');
		$this->createIndex('idx-auth_item-type', $authManager->itemTable, 'type');

		/**
		 *
		 * itemChildTable
		 *
		 */
		$this->createTable($authManager->itemChildTable, [
			'parent' => $this->string(64)->notNull(),
			'child' => $this->string(64)->notNull(),
			'PRIMARY KEY (parent, child)',
			'FOREIGN KEY (parent) REFERENCES ' . $authManager->itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
			'FOREIGN KEY (child) REFERENCES ' . $authManager->itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
		], $this->tableOptions); // itemChildTable
		$this->createIndex('idx-auth_item_child-parent', $authManager->itemChildTable, 'parent');
		$this->createIndex('idx-auth_item_child-child', $authManager->itemChildTable, 'child');

		/**
		 *
		 * assignmentTable
		 *
		 */
		$this->createTable($authManager->assignmentTable, [
			'item_name' => $this->string(64)->notNull(),
			'user_id' => $this->string(64)->notNull(),
			'created_at' => $this->integer(),
			'PRIMARY KEY (item_name, user_id)',
			'FOREIGN KEY (item_name) REFERENCES ' . $authManager->itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
		], $this->tableOptions); // assignmentTable
		$this->createIndex('idx-auth_assignment-item_name', $authManager->assignmentTable, 'item_name');
		$this->createIndex('idx-auth_assignment-user_id', $authManager->assignmentTable, 'user_id');

		/**
		 *
		 * history table
		 *
		 */
		$this->createTable('{{%history}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
			'givenName' => $this->string(64)->notNull(),
			'familyName' => $this->string(64)->defaultValue(null),
			'preferredName' => $this->string(64)->defaultValue(null),
			'email' => $this->string(128)->defaultValue(null),
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
			'returned' => $this->smallInteger(1)->defaultValue(0),
			'preferredJobs' => $this->text()->defaultValue(null),
			'availability' => $this->text()->defaultValue(null),
			'commentsInformation' => $this->text()->defaultValue(null),
			'discovery' => $this->text()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
			'original_id' => $this->integer()->notNull(),
			'ip' => $this->string(16)->defaultValue(null),
			'key_orig' => $this->string(8)->defaultValue(null),
			'created_orig' => $this->timestamp(),
			'updated_orig' => $this->timestamp(),
		], $this->tableOptions); // history table
		$this->addForeignKey('{{%history_user_id}}', '{{%history}}', 'user_id', '{{%user}}', 'id');

		/**
		 *
		 * profile table
		 *
		 */
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
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions); // profile table
		$this->createIndex('{{%profile_givenName}}', '{{%profile}}', 'givenName', true);
		$this->createIndex('{{%profile_familyName}}', '{{%profile}}', 'familyName', true);
		$this->createIndex('{{%profile_preferredName}}', '{{%profile}}', 'preferredName', true);
		$this->createIndex('{{%profile_phone1}}', '{{%profile}}', 'phone1', true);
		$this->addForeignKey('{{%profile_user_id}}', '{{%profile}}', 'user_id', '{{%user}}', 'id');

		/**
		 *
		 * team table
		 *
		 */
		$this->createTable('{{%team}}', [
			'id' => $this->primaryKey(),
			'lead_id' => $this->integer()->defaultValue(null),
			'sequence' => $this->smallInteger(6)->unsigned()->notNull(),
			'name' => $this->string(24)->notNull(),
			'description' => $this->text()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions); // team  table
		$this->addForeignKey('{{%team_lead_id}}', '{{%team}}', 'lead_id', '{{%user}}', 'id');

		/**
		 *
		 * job table
		 *
		 */
		$this->createTable('{{%job}}', [
			'id' => $this->primaryKey(),
			'team_id' => $this->integer()->notNull(),
			'sequence' => $this->smallInteger(6)->unsigned()->notNull(),
			'name' => $this->string(24)->notNull(),
			'menuGroup' => $this->string(24)->notNull(),
			'description' => $this->text()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions); // job table
		$this->addForeignKey('{{%job_team_id}}', '{{%job}}', 'team_id', '{{%team}}', 'id');

		/**
		 *
		 * application table
		 *
		 */
		$this->createTable('{{%application}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
			'availableFromDate' => $this->date()->defaultValue(null),
			'availableFromTime' => $this->smallInteger(3)->unsigned()->defaultValue(null),
			'availableToDate' => $this->date()->defaultValue(null),
			'availableToTime' => $this->smallInteger(3)->unsigned()->defaultValue(null),
			'earlyLate' => $this->smallInteger(1)->unsigned()->defaultValue(null),
			'availabilityNotes' => $this->text()->defaultValue(null),
			'double' => $this->smallInteger(1)->unsigned()->defaultValue(0),
			'closed' => $this->smallInteger(1)->unsigned()->defaultValue(0),
			'rejected' => $this->smallInteger(1)->unsigned()->defaultValue(0),
			'rejectedReason' => $this->text()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions); // application table
		$this->addForeignKey('{{%application_user_id}}', '{{%application}}', 'user_id', '{{%user}}', 'id');

		/**
		 *
		 * commitment table
		 *
		 */
		$this->createTable('{{%commitment}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
			'appl_id' => $this->integer()->defaultValue(null),
			'team_id' => $this->integer()->defaultValue(null),
			'year' => 'year(4) NOT NULL',
			'job' => $this->string(64)->notNull(),
			'hours' => $this->smallInteger(6)->unsigned()->defaultValue(null),
			'report' => $this->text()->defaultValue(null),
			'reinvite' => $this->smallInteger(1)->unsigned()->defaultValue(1),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions); // commitment table
		$this->addForeignKey('{{%commitment_user_id}}', '{{%commitment}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%commitment_application_id}}', '{{%commitment}}', 'appl_id', '{{%application}}', 'id');
		$this->addForeignKey('{{%commitment_team_id}}', '{{%commitment}}', 'team_id', '{{%team}}', 'id');

		/**
		 *
		 * application_job table
		 *
		 */
		$this->createTable('{{%application_job}}', [
			'id' => $this->primaryKey(),
			'appl_id' => $this->integer()->notNull(),
			'job_id' => $this->integer()->notNull(),
			'preference' => $this->smallInteger(2)->unsigned()->defaultValue(0),
		], $this->tableOptions); // application_job table
		$this->addForeignKey('{{%job_application_id}}', '{{%application_job}}', 'appl_id', '{{%application}}', 'id');
		$this->addForeignKey('{{%application_job_id}}', '{{%application_job}}', 'job_id', '{{%job}}', 'id');
	}

	public function down()
	{
		$authManager = $this->getAuthManager();
		$this->db = $authManager->db;

		$this->dropForeignKey('{{%application_job_id}}', '{{%application_job}}');
		$this->dropForeignKey('{{%job_application_id}}', '{{%application_job}}');
		$this->dropTable('{{%application_job}}');
		$this->dropForeignKey('{{%commitment_team_id}}', '{{%commitment}}');
		$this->dropForeignKey('{{%commitment_application_id}}', '{{%commitment}}');
		$this->dropForeignKey('{{%commitment_user_id}}', '{{%commitment}}');
		$this->dropTable('{{%commitment}}');
		$this->dropForeignKey('{{%application_user_id}}', '{{%application}}');
		$this->dropTable('{{%application}}');
		$this->dropForeignKey('{{%job_team_id}}', '{{%job}}');
		$this->dropTable('{{%job}}');
		$this->dropForeignKey('{{%team_lead_id}}', '{{%team}}');
		$this->dropTable('{{%team}}');
		$this->dropForeignKey('{{%profile_user_id}}', '{{%profile}}');
		$this->dropIndex('{{%profile_phone1}}', '{{%profile}}');
		$this->dropIndex('{{%profile_preferredName}}', '{{%profile}}');
		$this->dropIndex('{{%profile_familyName}}', '{{%profile}}');
		$this->dropIndex('{{%profile_givenName}}', '{{%profile}}');
		$this->dropTable('{{%profile}}');
		$this->dropForeignKey('{{%history_user_id}}', '{{%history}}');
		$this->dropTable('{{%history}}');
		$this->dropIndex('idx-auth_assignment-user_id', $authManager->assignmentTable);
		$this->dropIndex('idx-auth_assignment-item_name', $authManager->assignmentTable);
		$this->dropTable($authManager->assignmentTable);
		//$this->dropIndex('idx-auth_item_child-child', $authManager->itemChildTable);
		$this->dropIndex('idx-auth_item_child-parent', $authManager->itemChildTable);
		$this->dropTable($authManager->itemChildTable);
		$this->dropIndex('idx-auth_item-type', $authManager->itemTable);
		$this->dropIndex('idx-auth_item-name', $authManager->itemTable);
		$this->dropTable($authManager->itemTable);
		$this->dropIndex('idx-auth_rule-name', $authManager->ruleTable);
		$this->dropTable($authManager->ruleTable);
		$this->dropIndex('{{%user_auth_key}}', '{{%user}}');
		$this->dropIndex('{{%user_username}}', '{{%user}}');
		$this->dropIndex('{{%user_email}}', '{{%user}}');
		$this->dropTable('{{%User}}');
	}
}
