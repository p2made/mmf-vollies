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

class m170517_162647_mmf_init_tables extends \yii\db\Migration
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
		$this->roleTable();
		$this->userTable();
		$this->userTokenTable();
		$this->profileTable();
		$this->userAuthTable();
		$this->teamTable();
		$this->menuGroupTable();
		$this->jobTable();
		$this->applicationTable();
		$this->commitmentTable();
		$this->historyTable();

		$this->indexes();
		$this->foreignKeys();

		$this->addRoleData();
		$this->addAdminData();
		$this->addJobsData();
	}

	public function safeDown()
	{
		echo "m170510_025540_mmf_init_tables (down) destroys ALL existing data!\n";

		$this->foreignKeys(true);

		$this->historyTable(true);
		$this->commitmentTable(true);
		$this->applicationTable(true);
		$this->jobTable(true);
		$this->menuGroupTable(true);
		$this->teamTable(true);
		$this->userAuthTable(true);
		$this->profileTable(true);
		$this->userTokenTable(true);
		$this->userTable(true);
		$this->roleTable(true);
	}

	protected function roleTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%role}}');
			return;
		}

		$this->createTable('{{%role}}', [
			'id' => $this->primaryKey(),
			'name' => $this->string(32)->notNull(),
			'can_admin' => $this->smallInteger()->defaultValue(0),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
		], $this->tableOptions);
	}

	protected function userTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%user}}');
			return;
		}

		$this->createTable('{{%user}}', [
			'id' => $this->primaryKey(),
			'role_id' => $this->integer()->defaultValue(3),
			'status' => $this->smallInteger()->notNull(),
			'email' => $this->string()->notNull(),
			'username' => $this->string()->defaultValue(null),
			'password' => $this->string()->notNull(),
			'auth_key' => $this->string()->defaultValue(null),
			'access_token' => $this->string()->defaultValue(null),
			'logged_in_ip' => $this->string()->defaultValue(null),
			'logged_in_at' => $this->timestamp()->defaultValue(null),
			'created_ip' => $this->string()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'banned_at' => $this->timestamp()->defaultValue(null),
			'banned_reason' => $this->string()->defaultValue(null),
		], $this->tableOptions);
	}

	protected function userTokenTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%user_token}}');
			return;
		}

		$this->createTable('{{%user_token}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->defaultValue(null),
			'type' => $this->smallInteger()->notNull(),
			'token' => $this->string()->notNull(),
			'data' => $this->string()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'expired_at' => $this->timestamp()->defaultValue(null),
		], $this->tableOptions);
	}

	protected function profileTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%profile}}');
			return;
		}

		$this->createTable('{{%profile}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull()->unique(),
			'givenName' => $this->string(64)->notNull(),
			'familyName' => $this->string(64)->notNull(),
			'preferredName' => $this->string(64)->defaultValue(null),
			'phone1' => $this->string(32)->notNull(),
			'phone2' => $this->string(32)->defaultValue(null),
			'address1' => $this->string()->notNull(),
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
			'bc' => $this->smallInteger(1)->defaultValue(0),
			'vol' => $this->smallInteger(1)->defaultValue(0),
			'mmfVol' => $this->smallInteger(1)->defaultValue(0),
			'mmfAtt' => $this->smallInteger(1)->defaultValue(0),
			'returned' => $this->smallInteger(1)->defaultValue(0),
			'dnr' => 'year(4) default null',
			'discovery' => $this->string(24)->notNull(),
			'discoveryDetail' => $this->string()->defaultValue(null),
			'email' => $this->string()->defaultValue(null),
			'timezone' => $this->string()->defaultValue(null),
			'full_name' => $this->string()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions);
	}

	protected function userAuthTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%user_auth}}');
			return;
		}

		$this->createTable('{{%user_auth}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
			'provider' => $this->string()->notNull(),
			'provider_id' => $this->string()->notNull(),
			'provider_attributes' => $this->text()->notNull(),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
		], $this->tableOptions);
	}

	protected function teamTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%team}}');
			return;
		}

		$this->createTable('{{%team}}', [
			'id' => $this->primaryKey(),
			'head_id' => $this->integer()->defaultValue(null),
			'sequence' => $this->smallInteger()->notNull(),
			'name' => $this->string(24)->notNull(),
			'description' => $this->text()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
		], $this->tableOptions);
	}

	protected function menuGroupTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%menu_group}}');
			return;
		}

		$this->createTable('{{%menu_group}}', [
			'id' => $this->primaryKey(),
			'sequence' => $this->smallInteger()->notNull(),
			'name' => $this->string(24)->notNull(),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
		], $this->tableOptions);
	}

	protected function jobTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%job}}');
			return;
		}

		$this->createTable('{{%job}}', [
			'id' => $this->primaryKey(),
			'team_id' => $this->integer()->defaultValue(null),
			'group_id' => $this->integer()->notNull(),
			'sequence' => $this->smallInteger()->notNull(),
			'name' => $this->string(48)->notNull(),
			'description' => $this->text()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'updated_at' => $this->timestamp()->defaultValue(null),
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
			'user_id' => $this->integer()->notNull(),
			'job_choice_1' => $this->integer()->notNull(),
			'job_choice_2' => $this->integer()->defaultValue(null),
			'job_choice_3' => $this->integer()->defaultValue(null),
			'year' => 'year(4) not null',
			'availableFromDate' => $this->string(8)->notNull(),
			'availableFromTime' => $this->smallInteger(2)->notNull(),
			'availableToDate' => $this->string(8)->notNull(),
			'availableToTime' => $this->smallInteger(2)->notNull(),
			'bestTIme' => $this->smallInteger(1)->defaultValue(null),
			'availabilityNotes' => $this->text()->defaultValue(null),
			'double' => $this->smallInteger(1)->defaultValue(0),
			'otherNotes' => $this->text()->defaultValue(null),
			'referee' => $this->string(64)->defaultValue(null),
			'refereeRelationship' => $this->string(32)->defaultValue(null),
			'refereePhone' => $this->string(32)->defaultValue(null),
			'accepted' => $this->smallInteger(1)->defaultValue(0),
			'team_id' => $this->integer()->defaultValue(null),
			'rejected' => $this->smallInteger(1)->defaultValue(0),
			'rejectedReason' => $this->text()->defaultValue(null),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions);
	}

	protected function commitmentTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%commitment}}');
			return;
		}

		$this->createTable('{{%commitment}}', [
			'id' => $this->primaryKey(),
			'user_id' => $this->integer()->notNull(),
			'application_id' => $this->integer()->defaultValue(null),
			'team_id' => $this->integer()->defaultValue(0),
			'year' => 'year(4) not null',
			'job' => $this->string(48)->notNull(),
			'hours' => $this->smallInteger(6)->defaultValue(0),
			'report' => $this->text()->defaultValue(null),
			'reinvite' => $this->smallInteger(1)->defaultValue(0),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
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
			'user_id' => $this->integer()->notNull(),
			'givenName' => $this->string(32)->notNull(),
			'familyName' => $this->string(32)->notNull(),
			'preferredName' => $this->string(32)->defaultValue(null),
			'email' => $this->string(64)->notNull(),
			'phone1' => $this->string(24)->defaultValue(null),
			'phone2' => $this->string(24)->defaultValue(null),
			'address1' => $this->string(255)->defaultValue(null),
			'address2' => $this->string(255)->defaultValue(null),
			'locality' => $this->string(64)->notNull(),
			'state' => $this->string(16)->defaultValue('Qld'),
			'postcode' => $this->string(12)->defaultValue(null),
			'country' => $this->string(32)->defaultValue('Australia'),
			'emergencyContact' => $this->string(64)->notNull(),
			'emergencyPhone1' => $this->string(24)->notNull(),
			'emergencyPhone2' => $this->string(24)->defaultValue(null),
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
			'commentsInfo' => $this->text()->defaultValue(null),
			'discovery' => $this->text()->defaultValue(null),
			'id_orig' => $this->integer()->notNull(),
			'ip' => $this->string(16)->notNull(),
			'key_orig' => $this->string(8)->notNull(),
			'created_orig' => $this->timestamp()->notNull(),
			'updated_orig' => $this->timestamp()->notNull(),
			'created_at' => $this->timestamp()->defaultValue(null),
			'created_by' => $this->integer()->defaultValue(0),
			'updated_at' => $this->timestamp()->defaultValue(null),
			'updated_by' => $this->integer()->defaultValue(0),
		], $this->tableOptions);
	}

	protected function indexes()
	{
		// add indexes for performance optimization
		$this->createIndex('user_email', '{{%user}}', 'email', true);
		$this->createIndex('user_username', '{{%user}}', 'username', true);
		$this->createIndex('profile_givenName', '{{%profile}}', 'givenName');
		$this->createIndex('profile_familyName', '{{%profile}}', 'familyName');
		$this->createIndex('profile_preferredName', '{{%profile}}', 'preferredName');
		$this->createIndex('profile_phone1', '{{%profile}}', 'phone1');
		$this->createIndex('user_token_token', '{{%user_token}}', 'token', true);
		$this->createIndex('user_auth_provider_id', '{{%user_auth}}', 'provider_id');
	}

	protected function foreignKeys($down = false)
	{
		if($down) {
			$this->dropForeignKey('history_user_id', '{{%history}}');
			$this->dropForeignKey('commitment_user_id', '{{%commitment}}');
			$this->dropForeignKey('application_job_choice_3', '{{%application}}');
			$this->dropForeignKey('application_job_choice_2', '{{%application}}');
			$this->dropForeignKey('application_job_choice_1', '{{%application}}');
			$this->dropForeignKey('application_user_id', '{{%application}}');
			$this->dropForeignKey('job_group_id', '{{%job}}');
			$this->dropForeignKey('job_team_id', '{{%job}}');
			$this->dropForeignKey('team_head_id', '{{%team}}');
			$this->dropForeignKey('user_auth_user_id', '{{%user_auth}}');
			$this->dropForeignKey('user_token_user_id', '{{%user_token}}');
			$this->dropForeignKey('profile_user_id', '{{%profile}}');
			$this->dropForeignKey('user_role_id', '{{%user}}');

			return;
		}

		// add foreign keys for data integrity
		$this->addForeignKey('user_role_id',
			'{{%user}}', 'role_id', '{{%role}}', 'id'
		);
		$this->addForeignKey('profile_user_id',
			'{{%profile}}', 'user_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('user_token_user_id',
			'{{%user_token}}', 'user_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('user_auth_user_id',
			'{{%user_auth}}', 'user_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('team_head_id',
			'{{%team}}', 'head_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('job_team_id',
			'{{%job}}', 'team_id', '{{%team}}', 'id'
		);
		$this->addForeignKey('job_group_id',
			'{{%job}}', 'group_id', '{{%menu_group}}', 'id'
		);
		$this->addForeignKey('application_user_id',
			'{{%application}}', 'user_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('application_job_choice_1',
			'{{%application}}', 'job_choice_1', '{{%job}}', 'id'
		);
		$this->addForeignKey('application_job_choice_2',
			'{{%application}}', 'job_choice_2', '{{%job}}', 'id'
		);
		$this->addForeignKey('application_job_choice_3',
			'{{%application}}', 'job_choice_3', '{{%job}}', 'id'
		);
		$this->addForeignKey('commitment_user_id',
			'{{%commitment}}', 'user_id', '{{%user}}', 'id'
		);
		$this->addForeignKey('history_user_id',
			'{{%history}}', 'user_id', '{{%user}}', 'id'
		);
	}

	protected function addRoleData()
	{
		// insert role data
		$columns = ['name', 'can_admin', 'created_at'];
		$this->batchInsert('{{%role}}', $columns, [
			['Admin', 1, gmdate('Y-m-d H:i:s')],
			['Department Head', 1, gmdate('Y-m-d H:i:s')],
			['Vollie', 0, gmdate('Y-m-d H:i:s')],
		]);
	}

	protected function addAdminData()
	{
		$security = Yii::$app->security;

		// insert admin user data
		$columns = [
			'role_id', 'email', 'username',
			'password', 'status',
			'created_at',
			'access_token', 'auth_key'
		];
		$this->batchInsert('{{%user}}', $columns, [
			[
				1, 'vollies@malenymusicfestival.com', 'vollies',
				$security->generatePasswordHash('mffMerrigaL1941'),
				1, gmdate('Y-m-d H:i:s'),
				$security->generateRandomString(), $security->generateRandomString(),
			],
			[
				2, 'info@noelgardner.com', 'info',
				$security->generatePasswordHash('RKYYtVumL3RipfaA'),
				1, gmdate('Y-m-d H:i:s'),
				$security->generateRandomString(), $security->generateRandomString(),
			],
			[
				2, 'joanchenery54@gmail.com', 'joanchenery54',
				$security->generatePasswordHash('Rlnd2g3Gfgbiu6J7'),
				1, gmdate('Y-m-d H:i:s'),
				$security->generateRandomString(), $security->generateRandomString(),
			],
			[
				2, 'brett@mosaics.com.au', 'brett',
				$security->generatePasswordHash('RRAkSnVhFwCXKB3Z'),
				1, gmdate('Y-m-d H:i:s'),
				$security->generateRandomString(), $security->generateRandomString(),
			],
			[
				2, 'me@pedro.id.au', 'pedro',
				$security->generatePasswordHash('mffMerrigaL1941'),
				1, gmdate('Y-m-d H:i:s'),
				$security->generateRandomString(), $security->generateRandomString(),
			],
			[
				2, 'design@workingplanet.com.au', 'design',
				$security->generatePasswordHash('m1s3jpc7y1xi14wD'),
				1, gmdate('Y-m-d H:i:s'),
				$security->generateRandomString(), $security->generateRandomString(),
			],
		]);

		// insert admin profile data
		$columns = [
			'user_id', 'givenName', 'familyName', 'preferredName', 'phone1', 'phone2',
			'address1', 'address2', 'locality', 'state', 'postcode', 'country',
			'emergencyContact', 'emergencyPhone1', 'emergencyPhone2',
			'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'vol', 'mmfVol', 'mmfAtt',
			'discovery', 'returned', 'created_at', 'created_by', 'updated_at', 'updated_by'
		];
		$this->batchInsert('{{%profile}}', $columns, [
			[
				1, 'Vollies', 'Coordinator', 'Pedro', '0400 473 376', '07 5476 0901',
				'42 Reilly Rd', '', 'Nambour', 'Qld', '4560', 'Australia',
				'Jacqui Plowman', '07 5476 0901', '', 0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1, gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				2, 'Noel', 'Gardner', 'Noel', '0428 459 615', '07 5412 0408',
				'', '', 'Maleny', 'Qld', '4552', 'Australia',
				'Alex', '0438 763 373', '', 0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1, gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				3, 'Joan', 'Chenery', 'Joan',
				'', '', '', '', 'Maleny', 'Qld', '4552', 'Australia',
				'', '', '', 0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1, gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				4, 'Brett', 'Campbell', 'Brett', '07 5435 2951', '',
				'', '', 'Maleny', 'Qld', '4552', 'Australia',
				'', '', '', 0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1, gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				5, 'Pedro', 'Plowman', 'Pedro', '0400 473 376', '07 5476 0901',
				'42 Reilly Rd', '', 'Nambour', 'Qld', '4560', 'Australia',
				'Jacqui Plowman', '07 5476 0901', '', 0, 1, 0, 1, 0, 1, 1, 1,
				'Previous Volunteer', 1, gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				6, 'Nahum', 'Szumer', 'Nahum', '0412 767 978', '07 5445 2699',
				'14 Cottman St', '', 'Buderim', 'Qld', '4556', 'Australia',
				'', '', '', 1, 1, 0, 1, 0, 1, 1, 1,
				'Previous Volunteer', 1, gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
		]);
	}

	public function addJobsData()
	{
		// insert teams data
		$columns = ['head_id', 'sequence', 'name', 'description'];
		$this->batchInsert('{{%team}}', $columns, [
			[null, 3, 'Setup & Bump Out', null],
			[null, 6, 'Site', null],
			[null, 9, 'Stages', null],
			[3, 12, 'Bars', null],
			[null, 15, 'Treasury', null],
			[null, 18, 'Ticket Gates', null],
			[null, 21, 'Childrens Festival', null],
			[1, 24, 'Vollies', null],
			[null, 27, 'Other', null],
		]);

		// insert menu groups data
		$columns = ['sequence', 'name'];
		$this->batchInsert('{{%menu_group}}', $columns, [
			[3, 'Setup & Bump Out'],
			[6, 'Children’s Festival'],
			[9, 'Hospitality'],
			[12, 'Around the Site'],
			[15, 'Stages'],
			[18, 'Other'],
		]);

		// insert jobs data
		$columns = ['team_id', 'group_id', 'sequence', 'name', 'description'];
		$this->batchInsert('{{%job}}', $columns, [
			[1, 3, 27, 'Bar Doors', null],
			[1, 3, 30, 'Bar Service', null],
			[1, 1, 12, 'Bar Setup', null],
			[3, 1, 18, 'Bump Out', null],
			[4, 4, 36, 'Campground', null],
			[2, 1, 15, 'Children’s Festival Setup', null],
			[4, 4, 39, 'Cleaning', null],
			[3, 1, 9, 'Decor', null],
			[3, 1, 6, 'Fencing', null],
			[3, 1, 3, 'General Setup', null],
			[2, 2, 24, 'Helper', null],
			[7, 6, 54, 'Instrument Lockup', null],
			[5, 5, 48, 'MC', null],
			[2, 2, 21, 'Presenter', null],
			[7, 6, 57, 'Shop', null],
			[5, 5, 51, 'Stage Manager', null],
			[6, 4, 42, 'Ticket Gates', null],
			[4, 4, 45, 'Traffic', null],
			[7, 6, 60, 'Treasury', null],
			[8, 3, 33, 'Vollies Tent', null],
			[9, 6, 63, 'I will do anything', null],
			[9, 6, 66, 'Special', 'People asked to do a specific job as vollies.'],
		]);
	}
}
