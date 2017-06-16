<?php

use yii\db\Schema;
use yii\base\InvalidConfigException;
use yii\rbac\DbManager;

class m170525_191631_mmf_init_data extends \yii\db\Migration
{
	public function up()
	{
		$security = Yii::$app->security;

		// insert admin user data
		$this->insert('{{%user}}', [
			'email' => 'vollies@malenymusicfestival.com', 'username' => 'vollies', 'password_hash' => $security->generatePasswordHash('mffMerrigaL1941'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 1, 'givenName' => 'Volunteer', 'familyName' => 'Coordinator', 'preferredName' => 'Vollies', 'address1' => 'somewhere in', 'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia', 'discovery' => 'Volunteer Coordinator', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'info@noelgardner.com', 'username' => 'noel', 'password_hash' => $security->generatePasswordHash('996MNX82NlE0jtK5'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 2, 'givenName' => 'Noel', 'familyName' => 'Gardner', 'preferredName' => 'Noel', 'phone1' => '0428 459 615', 'phone2' => '07 5412 0408', 'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia', 'emergencyContact' => 'Alex', 'emergencyPhone1' => '0438 763 373', 'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'discovery' => 'Team Leader', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'joanchenery54@gmail.com', 'username' => 'joan', 'password_hash' => $security->generatePasswordHash('Dv50xC7GPPKGPNcA'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 3, 'givenName' => 'Joan', 'familyName' => 'Chenery', 'preferredName' => 'Joan', 'phone1' => '0438 401 828', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia', 'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'discovery' => 'Team Leader', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'jwrig46@hotmail.com', 'username' => 'john', 'password_hash' => $security->generatePasswordHash('UNUP3PzIFnPFfUwJ'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 4, 'givenName' => 'John', 'familyName' => 'Wright', 'preferredName' => 'John', 'phone1' => '0424 936 432', 'phone2' => '07 5435 0278', 'address1' => 'Lot 62 Crystal Waters', 'address2' => '65 Kilcoy Lane', 'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia', 'emergencyContact' => 'Tom Neilsen', 'emergencyPhone1' => '07 5494 4590', 'dl_c' => 1, 'cse' => 1, 'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'discovery' => 'Team Leader', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'lisa.reye@hotmail.com', 'username' => 'lisa', 'password_hash' => $security->generatePasswordHash('Xx4AdDYkqAy56Mma'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 5, 'givenName' => 'Lisa', 'familyName' => 'Reye', 'preferredName' => 'Lisa', 'state' => 'Qld ', 'country' => 'Australia', 'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'discovery' => 'Team Leader', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'tnealson@gmail.com', 'username' => 'tom', 'password_hash' => $security->generatePasswordHash('eaTSVARTSPYGbI6J'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 6, 'givenName' => 'Thomas', 'familyName' => 'Nealson', 'preferredName' => 'Tom', 'phone1' => '0437 279 505', 'phone2' => '07 5494 4590', 'address1' => 'Lot 81 Crystal Waters', 'address2' => '65 Kilcoy Lane', 'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia', 'emergencyContact' => 'Sybil MacLure', 'emergencyPhone1' => '07 5494 4590', 'dl_c' => 1, 'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'discovery' => 'Team Leader', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'me@pedro.id.au', 'username' => 'pedro', 'password_hash' => $security->generatePasswordHash('mffMerrigaL1941'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 7, 'givenName' => 'Pedro', 'familyName' => 'Plowman', 'preferredName' => 'Pedro', 'phone1' => '0400 473 376', 'phone2' => '07 5476 0901', 'address1' => '42 Reilly Rd', 'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia', 'emergencyContact' => 'Jacqui Plowman', 'emergencyPhone1' => '07 5476 0901', 'dl_c' => 1, 'cse' => 1, 'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 1, 'discovery' => 'Team Leader', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'design@workingplanet.com.au', 'username' => 'nahum', 'password_hash' => $security->generatePasswordHash('AKlBZLMqXTNdNX0U'), 'auth_key' => $security->generateRandomString(), 'confirmed_at' => gmdate('Y-m-d H:i:s'), 'registration_ip' => '127.0.0.1', 'admin' => 1, 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 8, 'givenName' => 'Nahum', 'familyName' => 'Szumer', 'preferredName' => 'Nahum', 'phone1' => '0412 767 978', 'phone2' => '07 5445 2699', 'address1' => '14 Cottman St', 'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia', 'rsa' => 1, 'dl_c' => 1, 'cse' => 1, 'discovery' => 'Webmaster', 'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);

		// insert teams data
		$columns = ['head_id', 'sequence', 'name', 'created_at', 'updated_at'];
		$this->batchInsert('{{%team}}', $columns, [
			[3, 12, 'Bars', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 21, 'Children’s Festival', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 3, 'Setup & Bump Out', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 6, 'Site', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[4, 9, 'Stages', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 18, 'Ticket Gates', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[5, 15, 'Treasury', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 15, 'Shop', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 24, 'Vollies’ Tent', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[1, 27, 'Other', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
		]);

		// insert menu groups data
		$columns = ['sequence', 'name', 'created_at', 'updated_at'];
		$this->batchInsert('{{%menu_group}}', $columns, [
			[3, 'Setup & Bump Out', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[6, 'Children’s Festival', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[9, 'Hospitality', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[12, 'Around the Site', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[15, 'Stages', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[18, 'Other', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
		]);

		// insert jobs data
		$columns = ['team_id', 'group_id', 'sequence', 'name', 'description', 'created_at', 'updated_at'];
		$this->batchInsert('{{%job}}', $columns, [
			[1, 3, 27, 'Bar Doors', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[1, 3, 30, 'Bar Service', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[1, 1, 12, 'Bar Setup', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[3, 1, 18, 'Bump Out', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[4, 4, 36, 'Campground', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[2, 1, 15, 'Children’s Festival Setup', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[4, 4, 39, 'Cleaning', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[3, 1, 9, 'Decor', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[3, 1, 6, 'Fencing', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[3, 1, 3, 'General Setup', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[2, 2, 24, 'Children’s Festival Helper', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[7, 6, 54, 'Instrument Lockup', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[5, 5, 48, 'MC', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[2, 2, 21, 'Children’s Festival Presenter', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[8, 6, 57, 'Shop', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[5, 5, 51, 'Stage Manager', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[6, 4, 42, 'Ticket Gates', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[4, 4, 45, 'Traffic', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[7, 6, 60, 'Treasury', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[9, 3, 33, 'Vollies’ Tent', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[10, 6, 63, 'I will do anything', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[10, 6, 66, 'Special', 'People asked to do a specific job as vollies.', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
		]);
	}

	public function down()
	{
		return true;
	}

}
