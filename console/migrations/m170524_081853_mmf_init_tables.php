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

	bigInteger()		Creates a bigint column.
	bigPrimaryKey()	 Creates a big primary key column.
	binary()			Creates a binary column.
	boolean()		   Creates a boolean column.
	char()			  Creates a char column.
	date()			  Creates a date column.
	dateTime()		  Creates a datetime column.
	decimal()		   Creates a decimal column.
	double()			Creates a double column.
	float()			 Creates a float column.
	integer()		   Creates an integer column.
	money()			 Creates a money column.
	primaryKey()		Creates a primary key column.
	smallInteger()	  Creates a smallint column.
	string()			Creates a string column.
	text()			  Creates a text column.
	time()			  Creates a time column.
	timestamp()		 Creates a timestamp column.

	after()			 Adds an AFTER constraint to the column.
	append()			Specify additional SQL to be appended to column definition.
	canGetProperty()	Returns a value indicating whether a property can be read.
	canSetProperty()	Returns a value indicating whether a property can be set.
	check()			 Sets a CHECK constraint for the column.
	className()		 Returns the fully qualified name of this class.
	comment()		   Specifies the comment for column.
	defaultExpression() Specify the default SQL expression for the column.
	defaultValue()	  Specify the default value for the column.
	first()			 Adds an FIRST constraint to the column.
	hasMethod()		 Returns a value indicating whether a method is defined.
	hasProperty()	   Returns a value indicating whether a property is defined.
	init()			  Initializes the object.
	notNull()		   Adds a NOT NULL constraint to the column.
	null()			  Adds a NULL constraint to the column
	unique()			Adds a UNIQUE constraint to the column.
	unsigned()		  Marks column as unsigned.
*/
class m170524_081853_mmf_init_tables extends \yii\db\Migration
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

	public function safeUp()
	{
		$this->userTable();
		$this->profileTable();
		$this->socialAccountTable();
		$this->tokenTable();
		$this->teamTable();
		$this->menuGroupTable();
		$this->jobTable();
		$this->applicationTable();
		$this->commitmentTable();
		$this->historyTable();

		$this->foreignKeys();
	}

	public function safeDown()
	{
		echo "m170524_081853_mmf_init_tables (down) destroys ALL existing data!\n";

		$this->foreignKeys(true);

		$this->historyTable(true);
		$this->commitmentTable(true);
		$this->applicationTable(true);
		$this->jobTable(true);
		$this->menuGroupTable(true);
		$this->teamTable(true);
		$this->tokenTable(true);
		$this->socialAccountTable(true);
		$this->profileTable(true);
		$this->userTable(true);
	}

	protected function userTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%user}}');
			return;
		}

		$this->createTable('{{%user}}', [
			'id'                   => $this->primaryKey(),
			'email'                => $this->string()->notNull(),
			'password_hash'        => $this->string(60)->notNull(),
			'auth_key'             => $this->string(32)->notNull(),
			'confirmed_at'         => $this->integer()->null(),
			'unconfirmed_email'    => $this->string()->null(),
			'registration_ip'      => $this->string(45)->null(),
			'flags'                => $this->integer()->defaultValue(0),
			'created_at'           => $this->integer()->notNull(),
			'updated_at'           => $this->integer()->notNull(),
			'last_login_at'        => $this->integer()->null(),
			'blocked_at'           => $this->integer()->null(),
			'username'             => $this->string(60)->notNull(),
		], $this->tableOptions);

		$this->createIndex('{{%user_unique_username}}', '{{%user}}', 'username', true);
		$this->createIndex('{{%user_unique_email}}', '{{%user}}', 'email', true);
	}

	protected function profileTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%profile}}');
			return;
		}

		$this->createTable('{{%profile}}', [
			'user_id'          => $this->primaryKey(),

			'givenName'        => $this->string(64)->notNull(),
			'familyName'       => $this->string(64)->notNull(),
			'preferredName'    => $this->string(64)->null(),
			'phone1'           => $this->string(32)->notNull(),
			'phone2'           => $this->string(32)->null(),
			'address1'         => $this->string()->notNull(),
			'address2'         => $this->string()->null(),
			'locality'         => $this->string(64)->notNull(),
			'state'            => $this->string(32)->defaultValue('Qld'),
			'postcode'         => $this->string(32)->null(),
			'country'          => $this->string(32)->defaultValue('Australia'),
			'emergencyContact' => $this->string(64)->notNull(),
			'emergencyPhone1'  => $this->string(32)->notNull(),
			'emergencyPhone2'  => $this->string(32)->null(),
			'rsa'              => $this->smallInteger(1)->defaultValue(0),
			'dl_c'             => $this->smallInteger(1)->defaultValue(0),
			'dl_h'             => $this->smallInteger(1)->defaultValue(0),
			'cse'              => $this->smallInteger(1)->defaultValue(0),
			'ohs'              => $this->smallInteger(1)->defaultValue(0),
			'bc'               => $this->smallInteger(1)->defaultValue(0),
			'vol'              => $this->smallInteger(1)->defaultValue(0),
			'mmfVol'           => $this->smallInteger(1)->defaultValue(0),
			'mmfAtt'           => $this->smallInteger(1)->defaultValue(0),
			'returned'         => $this->smallInteger(1)->defaultValue(0),
			'dnr'              => 'year(4) default null',
			'discovery'        => $this->string(24)->notNull(),
			'discoveryDetail'  => $this->string()->null(),
			'timezone'         => $this->string(40)->null(),
			'created_at'       => $this->timestamp()->null(),
			'updated_at'       => $this->timestamp()->null(),

			'name'             => $this->string(255)->null(),
			'public_email'     => $this->string(255)->null(),
			'gravatar_email'   => $this->string(255)->null(),
			'gravatar_id'      => $this->string(32)->null(),
			'location'         => $this->string(255)->null(),
			'website'          => $this->string(255)->null(),
			'bio'              => $this->text()->null(),
		], $this->tableOptions);

		$this->createIndex('profile_givenName', '{{%profile}}', 'givenName');
		$this->createIndex('profile_familyName', '{{%profile}}', 'familyName');
		$this->createIndex('profile_preferredName', '{{%profile}}', 'preferredName');
		$this->createIndex('profile_phone1', '{{%profile}}', 'phone1');
	}

	protected function socialAccountTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%social_account}}');
			return;
		}

		$this->createTable('{{%social_account}}', [
			'id'         => $this->primaryKey(),
			'user_id'    => $this->integer()->null(),
			'email'      => $this->string()->null(),
			'username'   => $this->string()->null(),
			'provider'   => $this->string()->notNull(),
			'client_id'  => $this->string()->notNull(),
			'data'       => $this->text()->null(),
			'code'       => $this->string(32)->null(),
			'created_at' => $this->integer()->null(),
		], $this->tableOptions);

		$this->createIndex('account_unique', '{{%social_account}}', ['provider', 'client_id'], true);
		$this->createIndex('{{%account_unique_code}}', '{{%social_account}}', 'code', true);
	}

	protected function tokenTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%token}}');
			return;
		}

		$this->createTable('{{%token}}', [
			'user_id'	=> $this->integer()->notNull(),
			'code'	   => $this->string(32)->notNull(),
			'created_at' => $this->integer()->notNull(),
			'type'	   => $this->smallInteger()->notNull(),
		], $this->tableOptions);

		$this->createIndex('token_unique', '{{%token}}', ['user_id', 'code', 'type'], true);
	}

	protected function teamTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%team}}');
			return;
		}

		$this->createTable('{{%team}}', [
			'id'          => $this->primaryKey(),
			'head_id'     => $this->integer()->null(),
			'sequence'    => $this->smallInteger()->notNull(),
			'name'        => $this->string(24)->notNull(),
			'description' => $this->text()->null(),
			'created_at'  => $this->timestamp()->null(),
			'updated_at'  => $this->timestamp()->null(),
		], $this->tableOptions);
	}

	protected function menuGroupTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%menu_group}}');
			return;
		}

		$this->createTable('{{%menu_group}}', [
			'id'         => $this->primaryKey(),
			'sequence'   => $this->smallInteger()->notNull(),
			'name'       => $this->string(24)->notNull(),
			'created_at' => $this->timestamp()->null(),
			'updated_at' => $this->timestamp()->null(),
		], $this->tableOptions);
	}

	protected function jobTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%job}}');
			return;
		}

		$this->createTable('{{%job}}', [
			'id'          => $this->primaryKey(),
			'team_id'     => $this->integer()->null(),
			'group_id'    => $this->integer()->notNull(),
			'sequence'    => $this->smallInteger()->notNull(),
			'name'        => $this->string(48)->notNull(),
			'description' => $this->text()->null(),
			'created_at'  => $this->timestamp()->null(),
			'updated_at'  => $this->timestamp()->null(),
		], $this->tableOptions);
	}

	protected function applicationTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%application}}');
			return;
		}

		$this->createTable('{{%application}}', [
			'id' => $this->primaryKey(),
			'user_id'             => $this->integer()->notNull(),
			'job_choice_1'        => $this->integer()->notNull(),
			'job_choice_2'        => $this->integer()->null(),
			'job_choice_3'        => $this->integer()->null(),
			'year'                => 'year(4) not null',
			'availableFromDate'   => $this->string(8)->notNull(),
			'availableFromTime'   => $this->smallInteger(2)->notNull(),
			'availableToDate'     => $this->string(8)->notNull(),
			'availableToTime'     => $this->smallInteger(2)->notNull(),
			'bestTIme'            => $this->smallInteger(1)->null(),
			'availabilityNotes'   => $this->text()->null(),
			'double'              => $this->smallInteger(1)->defaultValue(0),
			'otherNotes'          => $this->text()->null(),
			'referee'             => $this->string(64)->null(),
			'refereeRelationship' => $this->string(32)->null(),
			'refereePhone'        => $this->string(32)->null(),
			'accepted'            => $this->smallInteger(1)->defaultValue(0),
			'team_id'             => $this->integer()->null(),
			'rejected'            => $this->smallInteger(1)->defaultValue(0),
			'rejectedReason'      => $this->text()->null(),
			'created_at'          => $this->timestamp()->null(),
			'created_by'          => $this->integer()->defaultValue(0),
			'updated_at'          => $this->timestamp()->null(),
			'updated_by'          => $this->integer()->defaultValue(0),
		], $this->tableOptions);
	}

	protected function commitmentTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%commitment}}');
			return;
		}

		$this->createTable('{{%commitment}}', [
			'id'             => $this->primaryKey(),
			'user_id'        => $this->integer()->notNull(),
			'application_id' => $this->integer()->null(),
			'team_id'        => $this->integer()->defaultValue(0),
			'year'           => 'year(4) not null',
			'job'            => $this->string(48)->notNull(),
			'hours'          => $this->smallInteger(6)->defaultValue(0),
			'report'         => $this->text()->null(),
			'reinvite'       => $this->smallInteger(1)->defaultValue(0),
			'created_at'     => $this->timestamp()->null(),
			'created_by'     => $this->integer()->defaultValue(0),
			'updated_at'     => $this->timestamp()->null(),
			'updated_by'     => $this->integer()->defaultValue(0),
		], $this->tableOptions);
	}

	protected function historyTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%history}}');
			return;
		}

		$this->createTable('{{%history}}', [
			'id' => $this->primaryKey(),
			'user_id'          => $this->integer()->notNull(),
			'givenName'        => $this->string(32)->notNull(),
			'familyName'       => $this->string(32)->notNull(),
			'preferredName'    => $this->string(32)->null(),
			'email'            => $this->string(64)->notNull(),
			'phone1'           => $this->string(24)->null(),
			'phone2'           => $this->string(24)->null(),
			'address1'         => $this->string(255)->null(),
			'address2'         => $this->string(255)->null(),
			'locality'         => $this->string(64)->notNull(),
			'state'            => $this->string(16)->defaultValue('Qld'),
			'postcode'         => $this->string(12)->null(),
			'country'          => $this->string(32)->defaultValue('Australia'),
			'emergencyContact' => $this->string(64)->notNull(),
			'emergencyPhone1'  => $this->string(24)->notNull(),
			'emergencyPhone2'  => $this->string(24)->null(),
			'rsa'              => $this->smallInteger(1)->defaultValue(0),
			'dl_c'             => $this->smallInteger(1)->defaultValue(0),
			'dl_h'             => $this->smallInteger(1)->defaultValue(0),
			'cse'              => $this->smallInteger(1)->defaultValue(0),
			'ohs'              => $this->smallInteger(1)->defaultValue(0),
			'vol'              => $this->smallInteger(1)->defaultValue(0),
			'mmfVol'           => $this->smallInteger(1)->defaultValue(0),
			'mmfAtt'           => $this->smallInteger(1)->defaultValue(0),
			'returned'         => $this->smallInteger(1)->defaultValue(0),
			'preferredJobs'    => $this->text()->null(),
			'availability'     => $this->text()->null(),
			'commentsInfo'     => $this->text()->null(),
			'discovery'        => $this->text()->null(),
			'id_orig'          => $this->integer()->notNull(),
			'ip'               => $this->string(16)->notNull(),
			'key_orig'         => $this->string(8)->notNull(),
			'created_orig'     => $this->timestamp()->notNull(),
			'updated_orig'     => $this->timestamp()->notNull(),
			'created_at'       => $this->timestamp()->null(),
			'created_by'       => $this->integer()->defaultValue(0),
			'updated_at'       => $this->timestamp()->null(),
			'updated_by'       => $this->integer()->defaultValue(0),
		], $this->tableOptions);
	}

	protected function foreignKeys($down = false)
	{
		if($down) {
			$this->dropForeignKey('fk_history_user_id', '{{%history}}');
			$this->dropForeignKey('fk_commitment_user_id', '{{%commitment}}');
			$this->dropForeignKey('fk_application_job_choice_3', '{{%application}}');
			$this->dropForeignKey('fk_application_job_choice_2', '{{%application}}');
			$this->dropForeignKey('fk_application_job_choice_1', '{{%application}}');
			$this->dropForeignKey('fk_application_user_id', '{{%application}}');
			$this->dropForeignKey('fk_job_group_id', '{{%job}}');
			$this->dropForeignKey('fk_job_team_id', '{{%job}}');
			$this->dropForeignKey('fk_team_head_id', '{{%team}}');
			$this->dropForeignKey('fk_user_account', '{{%social_account}}');
			$this->dropForeignKey('fk_user_profile', '{{%profile}}');

			return;
		}

		// add foreign keys for data integrity
		$this->addForeignKey('fk_user_profile',
			'{{%profile}}', 'user_id', '{{%user}}', 'id', 'cascade', 'restrict'
		);
		$this->addForeignKey('fk_user_account',
			'{{%social_account}}', 'user_id', '{{%user}}', 'id', 'cascade', 'restrict'
		);
		$this->addForeignKey('fk_user_token',
			'{{%token}}', 'user_id', '{{%user}}', 'id', 'cascade', 'restrict'
		);
		$this->addForeignKey('fk_team_head_id',
			'{{%team}}', 'head_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('fk_job_team_id',
			'{{%job}}', 'team_id', '{{%team}}', 'id'
		);
		$this->addForeignKey('fk_job_group_id',
			'{{%job}}', 'group_id', '{{%menu_group}}', 'id'
		);
		$this->addForeignKey('fk_application_user_id',
			'{{%application}}', 'user_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('fk_application_job_choice_1',
			'{{%application}}', 'job_choice_1', '{{%job}}', 'id'
		);
		$this->addForeignKey('fk_application_job_choice_2',
			'{{%application}}', 'job_choice_2', '{{%job}}', 'id'
		);
		$this->addForeignKey('fk_application_job_choice_3',
			'{{%application}}', 'job_choice_3', '{{%job}}', 'id'
		);
		$this->addForeignKey('fk_commitment_user_id',
			'{{%commitment}}', 'user_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('fk_history_user_id',
			'{{%history}}', 'user_id', '{{%user}}', 'id'
		);
	}
}
