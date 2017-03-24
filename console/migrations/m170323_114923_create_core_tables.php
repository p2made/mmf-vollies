<?php

use yii\db\Schema;
use yii\db\Migration;

class m170323_114923_create_core_tables extends Migration
{
	protected $options = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';
	protected $auditTime = Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP';
	protected $auditUser = 'INT(11) NOT NULL DEFAULT 0';
	protected $aboutField = 'TEXT DEFAULT NULL COLLATE utf8_unicode_ci';
	protected $valueField = 'TINYINT(3) NOT NULL UNIQUE';
	protected $activeField = 'TINYINT(1) DEFAULT 1';

	public function safeUp()
	{
		// create tables. note the specific order
		$this->roleTable();
		$this->userTable();
		$this->userTokenTable();
		$this->profileTable();
		$this->userAuthTable();

		$this->tableIndexes();
		$this->foreignKeys();

		$this->insertRoleData();
		$this->insertAdminUserData();
		$this->insertAdminProfileData();
	}

	public function safeDown()
	{
		echo "Create Core Tables (down) destroys existing data!\n";

		$this->foreignKeys(true);
		$this->tableIndexes(true);

		// drop tables in reverse order (for foreign key constraints)
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
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' not null',
			'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
		], $this->options);
	} // role

	protected function userTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%user}}');
			return;
		}

		$this->createTable('{{%user}}', [
			'id' => Schema::TYPE_PK,
			'role_id' => Schema::TYPE_INTEGER . ' not null',
			'status' => Schema::TYPE_SMALLINT . ' not null',
			'email' => Schema::TYPE_STRING . ' null',
			'username' => Schema::TYPE_STRING . ' null',
			'password' => Schema::TYPE_STRING . ' null',
			'auth_key' => Schema::TYPE_STRING . ' null',
			'access_token' => Schema::TYPE_STRING . ' null',
			'logged_in_ip' => Schema::TYPE_STRING . ' null',
			'logged_in_at' => Schema::TYPE_TIMESTAMP . ' null',
			'created_ip' => Schema::TYPE_STRING . ' null',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
			'banned_at' => Schema::TYPE_TIMESTAMP . ' null',
			'banned_reason' => Schema::TYPE_STRING . ' null',
		], $this->options);
	} // user

	protected function userTokenTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%user_token}}');
			return;
		}

		$this->createTable('{{%user_token}}', [
			'id' => Schema::TYPE_PK,
			'user_id' => Schema::TYPE_INTEGER . ' null',
			'type' => Schema::TYPE_SMALLINT . ' not null',
			'token' => Schema::TYPE_STRING . ' not null',
			'data' => Schema::TYPE_STRING . ' null',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'expired_at' => Schema::TYPE_TIMESTAMP . ' null',
		], $this->options);
	} // user_token

	protected function profileTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%profile}}');
			return;
		}

		$this->createTable('{{%profile}}', [
			'id' => Schema::TYPE_PK,
			'user_id' => Schema::TYPE_INTEGER . ' not null',
			'givenName' => 'varchar(32) CHARACTER SET utf8 NOT NULL',
			'familyName' => 'varchar(32) CHARACTER SET utf8 NOT NULL',
			'preferredName' => 'varchar(32) CHARACTER SET utf8 DEFAULT NULL',
			'phone1' => 'varchar(24) CHARACTER SET utf8 DEFAULT NULL',
			'phone2' => 'varchar(24) CHARACTER SET utf8 DEFAULT NULL',
			'address1' => 'varchar(255) CHARACTER SET utf8 DEFAULT NULL',
			'address2' => 'varchar(255) CHARACTER SET utf8 DEFAULT NULL',
			'locality' => 'varchar(64) CHARACTER SET utf8 NOT NULL',
			'state' => 'varchar(16) CHARACTER SET utf8 DEFAULT "Qld"',
			'postcode' => 'varchar(12) CHARACTER SET utf8 DEFAULT NULL',
			'country' => 'varchar(32) CHARACTER SET utf8 DEFAULT "Australia"',
			'emergencyContact' => 'varchar(64) CHARACTER SET utf8 NOT NULL',
			'emergencyPhone1' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'emergencyPhone2' => 'varchar(24) CHARACTER SET utf8 DEFAULT NULL',
			'rsa' => 'tinyint(1) NOT NULL DEFAULT 0',
			'dl_c' => 'tinyint(1) NOT NULL DEFAULT 0',
			'dl_h' => 'tinyint(1) NOT NULL DEFAULT 0',
			'cse' => 'tinyint(1) NOT NULL DEFAULT 0',
			'ohs' => 'tinyint(1) NOT NULL DEFAULT 0',
			'vol' => 'tinyint(1) NOT NULL DEFAULT 0',
			'mmfVol' => 'tinyint(1) NOT NULL DEFAULT 0',
			'mmfAtt' => 'tinyint(1) NOT NULL DEFAULT 0',
			'discovery' => 'varchar(24) CHARACTER SET utf8 DEFAULT NULL',
			'discoveryDetail' => 'varchar(255) CHARACTER SET utf8 DEFAULT NULL',
			'returned' => 'tinyint(1) NOT NULL DEFAULT 0',
			'dnr' => 'year(4) DEFAULT NULL',
			'timezone' => Schema::TYPE_STRING . ' null',
			'created_at' => $this->auditTime, 'created_by' => $this->auditUser,
			'updated_at' => $this->auditTime, 'updated_by' => $this->auditUser,
		], $this->options);
	} // profile

	protected function userAuthTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%user_auth}}');
			return;
		}

		$this->createTable('{{%user_auth}}', [
			'id' => Schema::TYPE_PK,
			'user_id' => Schema::TYPE_INTEGER . ' not null',
			'provider' => Schema::TYPE_STRING . ' not null',
			'provider_id' => Schema::TYPE_STRING . ' not null',
			'provider_attributes' => Schema::TYPE_TEXT . ' not null',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null'
		], $this->options);
	} // user_auth

	protected function tableIndexes($down = false)
	{
		if($down) {
			$this->dropIndex('{{%user_auth_provider_id}}', '{{%user_auth}}');
			$this->dropIndex('{{%user_token_token}}', '{{%user_token}}');
			$this->dropIndex('{{%user_username}}', '{{%user}}');
			$this->dropIndex('{{%user_email}}', '{{%user}}');

			return;
		}

		$this->createIndex('{{%user_email}}', '{{%user}}', 'email', true);
		$this->createIndex('{{%user_username}}', '{{%user}}', 'username', true);
		$this->createIndex('{{%user_token_token}}', '{{%user_token}}', 'token', true);
		$this->createIndex('{{%user_auth_provider_id}}', '{{%user_auth}}', 'provider_id', false);
	} // add indexes for performance optimization

	protected function foreignKeys($down = false)
	{
		if($down) {
			$this->dropForeignKey('{{%user_auth_user_id}}', '{{%user_auth}}');
			$this->dropForeignKey('{{%user_token_user_id}}', '{{%user_token}}');
			$this->dropForeignKey('{{%profile_user_id}}', '{{%profile}}');
			$this->dropForeignKey('{{%user_role_id}}', '{{%user}}');

			return;
		}

		$this->addForeignKey('{{%user_role_id}}', '{{%user}}', 'role_id', '{{%role}}', 'id');
		$this->addForeignKey('{{%profile_user_id}}', '{{%profile}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%user_token_user_id}}', '{{%user_token}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%user_auth_user_id}}', '{{%user_auth}}', 'user_id', '{{%user}}', 'id');
	} // add foreign keys for data integrity

	protected function insertRoleData()
	{
		$columns = ['name', 'can_admin', 'created_at'];
		$this->batchInsert('{{%role}}', $columns, [
			['Admin', 1, gmdate('Y-m-d H:i:s')],
			['Department Head', 1, gmdate('Y-m-d H:i:s')],
			['User', 0, gmdate('Y-m-d H:i:s')],
		]);
	} // insert role data

	protected function insertAdminUserData()
	{
		$security = Yii::$app->security;
		$columns = ['role_id', 'email', 'username', 'password', 'status', 'created_at', 'access_token', 'auth_key'];
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
	} // insert admin user data

	protected function insertAdminProfileData()
	{
		// insert profile data
		$columns = ['user_id', 'givenName', 'familyName', 'preferredName', 'phone1', 'phone2', 'address1', 'address2', 'locality', 'state', 'postcode', 'country', 'emergencyContact', 'emergencyPhone1', 'emergencyPhone2', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'vol', 'mmfVol', 'mmfAtt', 'discovery', 'returned', 'created_at', 'created_by', 'updated_at', 'updated_by'];
		$this->batchInsert('{{%profile}}', $columns, [
			[
				1, 'Vollies', 'Coordinator', 'Pedro',
				'0400 473 376', '07 5476 0901',
				'42 Reilly Rd', '',
				'Nambour', 'Qld', '4560', 'Australia',
				'Jacqui Plowman', '07 5476 0901', '',
				0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1,
				gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				2, 'Noel', 'Gardner', 'Noel',
				'0428 459 615', '07 5412 0408',
				'', '',
				'Maleny', 'Qld', '4552', 'Australia',
				'Alex', '0438 763 373', '',
				0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1,
				gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				3, 'Joan', 'Chenery', 'Joan',
				'', '',
				'', '',
				'Maleny', 'Qld', '4552', 'Australia',
				'', '', '',
				0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1,
				gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				4, 'Brett', 'Campbell', 'Brett',
				'07 5435 2951', '',
				'', '',
				'Maleny', 'Qld', '4552', 'Australia',
				'', '', '',
				0, 0, 0, 0, 0, 1, 1, 1,
				'Previous Volunteer', 1,
				gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				5, 'Pedro', 'Plowman', 'Pedro',
				'0400 473 376', '07 5476 0901',
				'42 Reilly Rd', '',
				'Nambour', 'Qld', '4560', 'Australia',
				'Jacqui Plowman', '07 5476 0901', '',
				0, 1, 0, 1, 0, 1, 1, 1,
				'Previous Volunteer', 1,
				gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
			[
				6, 'Nahum', 'Szumer', 'Nahum',
				'0412 767 978', '07 5445 2699',
				'14 Cottman St', '',
				'Buderim', 'Qld', '4556', 'Australia',
				'', '', '',
				1, 1, 0, 1, 0, 1, 1, 1,
				'Previous Volunteer', 1,
				gmdate('Y-m-d H:i:s'), 0, gmdate('Y-m-d H:i:s'), 0,
			],
		]);
	} // insert admin profile data
}
