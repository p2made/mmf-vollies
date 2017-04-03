<?php

use yii\db\Schema;
use yii\base\InvalidConfigException;
use yii\rbac\DbManager;

/**
 * Initializes RBAC tables
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */

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

	bigInteger()	Creates a bigint column.
	bigPrimaryKey()	Creates a big primary key column.
	binary()	Creates a binary column.
	boolean()	Creates a boolean column.
	char()	Creates a char column.
	date()	Creates a date column.
	dateTime()	Creates a datetime column.
	decimal()	Creates a decimal column.
	double()	Creates a double column.
	float()	Creates a float column.
	integer()	Creates an integer column.
	money()	Creates a money column.
	primaryKey()	Creates a primary key column.
	smallInteger()	Creates a smallint column.
	string()	Creates a string column.
	text()	Creates a text column.
	time()	Creates a time column.
	timestamp()	Creates a timestamp column.

	after()	Adds an AFTER constraint to the column.
	append()	Specify additional SQL to be appended to column definition.
	canGetProperty()	Returns a value indicating whether a property can be read.
	canSetProperty()	Returns a value indicating whether a property can be set.
	check()	Sets a CHECK constraint for the column.
	className()	Returns the fully qualified name of this class.
	comment()	Specifies the comment for column.
	defaultExpression()	Specify the default SQL expression for the column.
	defaultValue()	Specify the default value for the column.
	first()	Adds an FIRST constraint to the column.
	hasMethod()	Returns a value indicating whether a method is defined.
	hasProperty()	Returns a value indicating whether a property is defined.
	init()	Initializes the object.
	notNull()	Adds a NOT NULL constraint to the column.
	null()	Adds a NULL constraint to the column
	unique()	Adds a UNIQUE constraint to the column.
	unsigned()	Marks column as unsigned.
*/

class m170327_143639_mmf_init extends \yii\db\Migration
{
	protected $tableOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';
	//protected $auditString  = $this->string()->defaultValue(null);
	//protected $auditTime    = $this->timestamp()->defaultValue(null);
	//protected $auditUser    = $this->integer()->defaultValue(0);
	//protected $aboutField   = $this->text()->defaultValue(null);
	//protected $valueField   = $this->smallInteger(3)->notNull()->unique();
	//protected $activeField  = $this->smallInteger(1)->defaultValue(1);

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

	/**
	 * @throws yii\base\InvalidConfigException
	 * @return DbManager
	 */
	public function up()
	{
		$authManager = $this->getAuthManager();
		$this->db = $authManager->db;

		$this->createTable('{{%user}}', [
			'id' => $this->primaryKey(),
			'role_id' => $this->integer()->notNull(),
			'email' => $this->string(128)->notNull()->unique(),
			'username' => $this->string(32)->notNull()->unique(),
			'auth_key' => $this->string(32)->notNull(),
			'password_hash' => $this->string()->notNull(),
			'password_reset_token' => $this->string()->unique(),
			'status' => $this->smallInteger()->notNull()->defaultValue(10),
			'banned_at' => $this->timestamp()->defaultValue(null),
			'banned_reason' => $this->string()->defaultValue(null),
			'logged_in_ip' => $this->string()->defaultValue(null),
			'logged_in_at' => $this->timestamp()->defaultValue(null),
			'created_ip' => $this->string()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_ip' => $this->string()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions); // user table
		$this->createIndex('{{%user_email}}', '{{%user}}', 'email', true);
		$this->createIndex('{{%user_username}}', '{{%user}}', 'username', true);
		$this->createIndex('{{%user_auth_key}}', '{{%user}}', 'auth_key', true);

		$this->createTable($authManager->ruleTable, [
			'name' => $this->string(64)->notNull(),
			'data' => $this->binary(),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
			'PRIMARY KEY (name)',
		], $this->tableOptions); // rule table

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
		], $this->tableOptions); // item table
		$this->createIndex('idx-auth_item-type', $authManager->itemTable, 'type');

		$this->createTable($authManager->itemChildTable, [
			'parent' => $this->string(64)->notNull(),
			'child' => $this->string(64)->notNull(),
			'PRIMARY KEY (parent, child)',
			'FOREIGN KEY (parent) REFERENCES ' . $authManager->itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
			'FOREIGN KEY (child) REFERENCES ' . $authManager->itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
		], $this->tableOptions); // itemChild table

		$this->createTable($authManager->assignmentTable, [
			'item_name' => $this->string(64)->notNull(),
			'user_id' => $this->string(64)->notNull(),
			'created_at' => $this->integer(),
			'PRIMARY KEY (item_name, user_id)',
			'FOREIGN KEY (item_name) REFERENCES ' . $authManager->itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
		], $this->tableOptions); // assignment table

		$this->createTable('{{%mmf_history}}', [
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
		$this->addForeignKey('{{%history_user_id}}', '{{%mmf_history}}', 'user_id', '{{%user}}', 'id');

		$this->createTable('{{%mmf_profile}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
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
		$this->addForeignKey('{{%profile_user_id}}', '{{%mmf_profile}}', 'user_id', '{{%user}}', 'id');

		$this->createTable('{{%mmf_team}}', [
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
		$this->addForeignKey('{{%team_lead_id}}', '{{%mmf_team}}', 'lead_id', '{{%user}}', 'id');

		$this->createTable('{{%mmf_job}}', [
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
		$this->addForeignKey('{{%job_team_id}}', '{{%mmf_job}}', 'team_id', '{{%mmf_team}}', 'id');

		$this->createTable('{{%mmf_application}}', [
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
		$this->addForeignKey('{{%application_user_id}}', '{{%mmf_application}}', 'user_id', '{{%user}}', 'id');

		$this->createTable('{{%mmf_commitment}}', [
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
		$this->addForeignKey('{{%commitment_user_id}}', '{{%mmf_commitment}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%commitment_application_id}}', '{{%mmf_commitment}}', 'appl_id', '{{%mmf_application}}', 'id');
		$this->addForeignKey('{{%commitment_team_id}}', '{{%mmf_commitment}}', 'team_id', '{{%mmf_team}}', 'id');

		$this->createTable('{{%mmf_application_job}}', [
			'id' => $this->primaryKey(),
			'appl_id' => $this->integer()->notNull(),
			'job_id' => $this->integer()->notNull(),
			'preference' => $this->smallInteger(2)->unsigned()->defaultValue(0),
		], $this->tableOptions); // application_job table
		$this->addForeignKey('{{%job_application_id}}', '{{%mmf_application_job}}', 'appl_id', '{{%mmf_application}}', 'id');
		$this->addForeignKey('{{%application_job_id}}', '{{%mmf_application_job}}', 'job_id', '{{%mmf_job}}', 'id');
	}

	public function down()
	{
		$authManager = $this->getAuthManager();
		$this->db = $authManager->db;

		$this->dropForeignKey('{{%application_job_id}}', '{{%mmf_application_job}}');
		$this->dropForeignKey('{{%job_application_id}}', '{{%mmf_application_job}}');
		$this->dropTable('{{%mmf_application_job}}');
		$this->dropForeignKey('{{%commitment_team_id}}', '{{%mmf_commitment}}');
		$this->dropForeignKey('{{%commitment_application_id}}', '{{%mmf_commitment}}');
		$this->dropForeignKey('{{%commitment_user_id}}', '{{%mmf_commitment}}');
		$this->dropTable('{{%mmf_commitment}}');
		$this->dropForeignKey('{{%application_user_id}}', '{{%mmf_application}}');
		$this->dropTable('{{%mmf_application}}');
		$this->dropForeignKey('{{%job_team_id}}', '{{%mmf_job}}');
		$this->dropTable('{{%mmf_job}}');
		$this->dropForeignKey('{{%team_lead_id}}', '{{%mmf_team}}');
		$this->dropTable('{{%mmf_team}}');
		$this->dropForeignKey('{{%profile_user_id}}', '{{%mmf_profile}}');
		$this->dropTable('{{%mmf_profile}}');
		$this->dropForeignKey('{{%history_user_id}}', '{{%mmf_history}}');
		$this->dropTable('{{%mmf_history}}');
		$this->dropTable($authManager->assignmentTable);
		$this->dropTable($authManager->itemChildTable);
		$this->dropTable($authManager->itemTable);
		$this->dropTable($authManager->ruleTable);
		$this->dropIndex('{{%user_username}}', '{{%user}}');
		$this->dropIndex('{{%user_email}}', '{{%user}}');
		$this->dropTable('{{%user}}');
	}

    > create table {{%auth_rule}} ... done (time: 1.624s)
    > create table {{%auth_item}} ... done (time: 1.973s)
    > create index idx-auth_item-type on {{%auth_item}} (type) ... done (time: 2.015s)
    > create table {{%auth_item_child}} ... done (time: 1.438s)
    > create table {{%auth_assignment}} ... done (time: 1.385s)

}
