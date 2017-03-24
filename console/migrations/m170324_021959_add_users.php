<?php

use yii\db\Migration;

class m170324_021959_add_users extends Migration
{
	public function safeUp()
	{
		$security = Yii::$app->security;

		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'annmorris_oz@yahoo.com',
			'username' => 'annmorris_oz', 'password' => $security->generatePasswordHash('sEI6yy3JlKKWxIh0'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 7, 'givenName' => 'Ann', 'familyName' => 'Morris',
			'preferredName' => 'Ann', 'phone1' => '0409 629 602', 'phone2' => '',
			'address1' => 'PO Box 257', 'address2' => '',
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Bill Ross', 'emergencyPhone1' => '0438 154 144', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'benjiridoo@yahoo.ca',
			'username' => 'benjiridoo', 'password' => $security->generatePasswordHash('jNPOFwrNHbDzQJ5b'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 8, 'givenName' => 'Ben', 'familyName' => 'Davison',
			'preferredName' => 'Bennybowen', 'phone1' => '0432 185 760', 'phone2' => '',
			'address1' => '69 Remington Shute Rd', 'address2' => '',
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Jon', 'emergencyPhone1' => '0431 203 675', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fringedwellers@live.com',
			'username' => 'fringedwellers', 'password' => $security->generatePasswordHash('pTM6QzwV0ToX3BUQ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 9, 'givenName' => 'Deborah', 'familyName' => 'Watson',
			'preferredName' => 'Arabella', 'phone1' => '0481 541 504', 'phone2' => '',
			'address1' => '27 Bergin St', 'address2' => '',
			'locality' => 'Booval', 'state' => 'Qld', 'postcode' => '4304', 'country' => 'Australia',
			'emergencyContact' => 'Margaret', 'emergencyPhone1' => '07 3282 9148', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ireallylovethose@gmail.com',
			'username' => 'ireallylovethose', 'password' => $security->generatePasswordHash('dxAiKAgh2z2L2vyy'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 10, 'givenName' => 'Natalie', 'familyName' => 'Brown',
			'preferredName' => 'Natty', 'phone1' => '0467 958 057', 'phone2' => '',
			'address1' => '1/24 Cedar Grove Ct', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Brown', 'emergencyPhone1' => '0439 413 480', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'christopher.gwin@bigpond.com',
			'username' => 'christopher.gwin', 'password' => $security->generatePasswordHash('We0ViLuaEOteI8AT'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 11, 'givenName' => 'Christopher', 'familyName' => 'Gwin',
			'preferredName' => 'Chris', 'phone1' => '07 5494 4743', 'phone2' => '',
			'address1' => 'Lot 46 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ela Linwood', 'emergencyPhone1' => '07 5499 9685', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'susan.ferrar7@bigpond.com',
			'username' => 'susan.ferrar7', 'password' => $security->generatePasswordHash('mEa69JBdRtGWOHhu'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 12, 'givenName' => 'Susan', 'familyName' => 'Ferrar',
			'preferredName' => 'Susan', 'phone1' => '0419 776 088', 'phone2' => '',
			'address1' => '2687 Gympie Rd', 'address2' => '',
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Lee Nash', 'emergencyPhone1' => '07 4979 4106', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dominic@numbernine.com.au',
			'username' => 'dominic', 'password' => $security->generatePasswordHash('fuMoEt7kODKVbgx5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 13, 'givenName' => 'Dominic', 'familyName' => 'Posner',
			'preferredName' => 'Dominic', 'phone1' => '0419 439 034', 'phone2' => '07 5499 9135',
			'address1' => 'PO Box 1250', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tanya Posner', 'emergencyPhone1' => '0438 255 077', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kenmain1@optusnet.com.au',
			'username' => 'kenmain1', 'password' => $security->generatePasswordHash('AeZq0aYXKvZ383Q8'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 14, 'givenName' => 'Kenneth', 'familyName' => 'Main',
			'preferredName' => 'Ken', 'phone1' => '0429 345 617', 'phone2' => '07 5326 3086',
			'address1' => '33 Palm Dr', 'address2' => '',
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Carole', 'emergencyPhone1' => '0409 585 166', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suzannec7@optusnet.com.au',
			'username' => 'suzannec7', 'password' => $security->generatePasswordHash('Xt747EnxZrfn0LpE'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 15, 'givenName' => 'Suzanne', 'familyName' => 'Chumbley',
			'preferredName' => 'Suzanne', 'phone1' => '0428 745 498', 'phone2' => '07 5309 5710',
			'address1' => '2/11 Suller St', 'address2' => '',
			'locality' => 'Caloundra', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Sam Dougall', 'emergencyPhone1' => '0408 671 583', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gabyluft@hotmail.com',
			'username' => 'gabyluft', 'password' => $security->generatePasswordHash('lnF9hzOPak77O88O'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 16, 'givenName' => 'Gabrielle', 'familyName' => 'Luft',
			'preferredName' => 'Gaby', 'phone1' => '0434 039 452', 'phone2' => '',
			'address1' => '21 Tamarind St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Koa Wilmott', 'emergencyPhone1' => '0427 608 848', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gabriel.monson@gmail.com',
			'username' => 'gabriel.monson', 'password' => $security->generatePasswordHash('Y5stx2bdVTGzydTv'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 17, 'givenName' => 'Gabriel', 'familyName' => 'Monson',
			'preferredName' => 'Gabe', 'phone1' => '0477 008 518', 'phone2' => '',
			'address1' => 'Dicky Beach Park', 'address2' => '',
			'locality' => 'Dicky Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'allyson.williams007@gmail.com',
			'username' => 'allyson.williams007', 'password' => $security->generatePasswordHash('xD1lMOo6z88ie4hU'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 18, 'givenName' => 'Allyson', 'familyName' => 'Williams',
			'preferredName' => 'Allyson', 'phone1' => '0428 942 224', 'phone2' => '',
			'address1' => '45 Mountain View Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Thompson', 'emergencyPhone1' => '0429 061 444', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tanya@numbernine.com.au',
			'username' => 'tanya', 'password' => $security->generatePasswordHash('MyuKlRzSADJTR3J7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 19, 'givenName' => 'Cvetanka', 'familyName' => 'Posner',
			'preferredName' => 'Tanya', 'phone1' => '0438 255 077', 'phone2' => '07 5499 9135',
			'address1' => '51 Murer Dr', 'address2' => '',
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Dominic Posner', 'emergencyPhone1' => '0419 439 034', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'debrataylor@me.com',
			'username' => 'debrataylor', 'password' => $security->generatePasswordHash('yN1ieZQodKYDtVcQ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 20, 'givenName' => 'Debra', 'familyName' => 'Taylor',
			'preferredName' => 'Debbie', 'phone1' => '', 'phone2' => '',
			'address1' => '19 Oxenham Lane', 'address2' => '',
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Philtaylor', 'emergencyPhone1' => '0427 636 720', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jacqui@studiohorizon.com',
			'username' => 'jacqui', 'password' => $security->generatePasswordHash('u5kLzzxdPiZNBvMl'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 21, 'givenName' => 'Jacqueline', 'familyName' => 'O\'Connor',
			'preferredName' => 'Jacqui', 'phone1' => '0409 059 131', 'phone2' => '07 5445 7916',
			'address1' => '188 Flaxton Mill Rd', 'address2' => '',
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Lesley Campbell', 'emergencyPhone1' => '0432 507 228', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lotussseed@gmail.com',
			'username' => 'lotussseed', 'password' => $security->generatePasswordHash('eGoZK7PAwX31JTu0'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 22, 'givenName' => 'Michaela Rose', 'familyName' => 'Walker',
			'preferredName' => 'Mikayla', 'phone1' => '0468 326 962', 'phone2' => '07 5641 4624',
			'address1' => '776 Browns Creek Rd', 'address2' => '',
			'locality' => 'Eerwah Vale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Walker', 'emergencyPhone1' => '0458 487 865', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suz_mcevoy@hotmail.com',
			'username' => 'suz_mcevoy', 'password' => $security->generatePasswordHash('kKfnLjCzHkRMKs19'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 23, 'givenName' => 'Suzanne', 'familyName' => 'L',
			'preferredName' => 'Suzanne', 'phone1' => '0414 762 517', 'phone2' => '07 5445 7514',
			'address1' => '20 Nimbus Dr', 'address2' => '',
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Meagan & Michael McEvoy', 'emergencyPhone1' => '07 5445 7514', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'christopher.marsh@bigpond.com',
			'username' => 'christopher.marsh', 'password' => $security->generatePasswordHash('H95TQTuEkr8lfmXK'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 24, 'givenName' => 'Chris', 'familyName' => 'Marsh',
			'preferredName' => 'Chris', 'phone1' => '0400 029 406', 'phone2' => '',
			'address1' => '6 Downward Pl', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Petrina Daniel', 'emergencyPhone1' => '07 4574 6090', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'shezoffice@gmail.com',
			'username' => 'shezoffice', 'password' => $security->generatePasswordHash('BzCLL4FFotctSk4a'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 25, 'givenName' => 'Sheryll', 'familyName' => 'Wright',
			'preferredName' => 'Shez', 'phone1' => '0407 964 948', 'phone2' => '',
			'address1' => '407 Cedar Creek Rd', 'address2' => '',
			'locality' => 'Cedar Creek', 'state' => 'Qld', 'postcode' => '4520', 'country' => 'Australia',
			'emergencyContact' => 'Laurie Kelly', 'emergencyPhone1' => '0414 671 990', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marie.nicholette@gmail.com',
			'username' => 'marie.nicholette', 'password' => $security->generatePasswordHash('3Ord80McJV4qxLOw'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 26, 'givenName' => 'Marie', 'familyName' => 'Blanch',
			'preferredName' => 'Marie', 'phone1' => '07 5435 2130', 'phone2' => '',
			'address1' => '3 Jabiru Ct', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Deborah Yffer', 'emergencyPhone1' => '0411 389 727', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'chanteuse@xancorp.com.au',
			'username' => 'chanteuse', 'password' => $security->generatePasswordHash('yP9LDVAe6CuhGFIX'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 27, 'givenName' => 'Kelli', 'familyName' => 'Dendle',
			'preferredName' => 'Kelli', 'phone1' => '0488 952 722', 'phone2' => '07 5435 2939',
			'address1' => 'PO Box 867', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Greg', 'emergencyPhone1' => '07 5435 2939', 'emergencyPhone2' => '0418 127 342',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'clayton@claytonstorey.com',
			'username' => 'clayton', 'password' => $security->generatePasswordHash('2YDMusB1Xaz2bNmQ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 28, 'givenName' => 'Clayton', 'familyName' => 'Storey',
			'preferredName' => 'Clayton', 'phone1' => '0497 564 064', 'phone2' => '07 5499 9161',
			'address1' => '34 Bunya St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tika', 'emergencyPhone1' => '0481 546 328', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cardieboydell@bigpond.com',
			'username' => 'cardieboydell', 'password' => $security->generatePasswordHash('76115uOOWxt0CfMf'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 29, 'givenName' => 'Caroline', 'familyName' => 'Boydell',
			'preferredName' => 'Cardie', 'phone1' => '0400 101 797', 'phone2' => '',
			'address1' => '100 Kings Lane', 'address2' => '',
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Pete Davies', 'emergencyPhone1' => '0457 085 198', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => '4peacenlove@gmail.com',
			'username' => '4peacenlove', 'password' => $security->generatePasswordHash('eC6nnSTL8v8GAI3H'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 30, 'givenName' => 'Sonia', 'familyName' => 'Russell',
			'preferredName' => 'Sonia', 'phone1' => '0448 606 591', 'phone2' => '',
			'address1' => '52 Park Rd', 'address2' => '',
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marleyfrance1707@gmail.com',
			'username' => 'marleyfrance1707', 'password' => $security->generatePasswordHash('TVQ64mZ2IfVIthmw'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 31, 'givenName' => 'Valery', 'familyName' => 'France',
			'preferredName' => 'Val', 'phone1' => '0419 599 042', 'phone2' => '',
			'address1' => 'Lot 8 349 Balmoral Rd', 'address2' => '',
			'locality' => 'Montville', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Barbara Jones', 'emergencyPhone1' => '0439 660 458', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'terrybishop42@gmail.com',
			'username' => 'terrybishop42', 'password' => $security->generatePasswordHash('aszvGKECUmka0rSt'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 32, 'givenName' => 'Terrence Michael', 'familyName' => 'Bishop',
			'preferredName' => 'Terrence', 'phone1' => '0409 262 858', 'phone2' => '',
			'address1' => '42 Brooks Rd', 'address2' => '',
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Arisa Inlakesh', 'emergencyPhone1' => '0413 461 178', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cherylvivian@gmail.com',
			'username' => 'cherylvivian', 'password' => $security->generatePasswordHash('tEApb9XyqrtpUuUg'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 33, 'givenName' => 'Cheryl', 'familyName' => 'Vivian',
			'preferredName' => 'Cheryl', 'phone1' => '0400 551 919', 'phone2' => '',
			'address1' => '4/29 Russell St', 'address2' => '',
			'locality' => 'South Brisbane', 'state' => 'Qld', 'postcode' => '4101', 'country' => 'Australia',
			'emergencyContact' => 'Dan Raymond', 'emergencyPhone1' => '0400 551 920', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'juliapeddie@icloud.com',
			'username' => 'juliapeddie', 'password' => $security->generatePasswordHash('kNAOpSqT7Xh4Oz9v'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 34, 'givenName' => 'Julia', 'familyName' => 'Peddie',
			'preferredName' => 'Julia', 'phone1' => '0405 331 584', 'phone2' => '',
			'address1' => '35 Aquarius St', 'address2' => '',
			'locality' => 'North Lakes', 'state' => 'Qld', 'postcode' => '4509', 'country' => 'Australia',
			'emergencyContact' => 'Liz Peddie', 'emergencyPhone1' => '0429 878 041', 'emergencyPhone2' => '03 5772 2432',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'goodwills@ozemail.com.au',
			'username' => 'goodwills', 'password' => $security->generatePasswordHash('f9mK2tPJEo8WqbOW'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 35, 'givenName' => 'Laurel', 'familyName' => 'Wilson',
			'preferredName' => 'Laurel', 'phone1' => '0418 187 104', 'phone2' => '07 5435 2333',
			'address1' => '34 Palm St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Bob Wilson', 'emergencyPhone1' => '0438 525 119', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mail@womenforchange.com',
			'username' => 'mail', 'password' => $security->generatePasswordHash('Qok1j4Ny9zFnESEc'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 36, 'givenName' => 'Arcadia', 'familyName' => 'Love',
			'preferredName' => 'Arcadia', 'phone1' => '0427 296 572', 'phone2' => '',
			'address1' => '14/395 Zillmere Rd', 'address2' => '',
			'locality' => 'Zillmere', 'state' => 'Qld', 'postcode' => '4034', 'country' => 'Australia',
			'emergencyContact' => 'Shaay Menay', 'emergencyPhone1' => '0457 968 875', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'adpedler@gmail.com',
			'username' => 'adpedler', 'password' => $security->generatePasswordHash('448iRzoyX6WhfuJp'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 37, 'givenName' => 'Andrew', 'familyName' => 'Pedler',
			'preferredName' => 'Andrew', 'phone1' => '0412 122 778', 'phone2' => '07 5435 2856',
			'address1' => '135 Stanley River Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Margaret Longworth', 'emergencyPhone1' => '0438 794 252', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'peter.cartwright@iinet.net.au',
			'username' => 'peter.cartwright', 'password' => $security->generatePasswordHash('HImQHqpXkeVLlE6G'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 38, 'givenName' => 'Peter', 'familyName' => 'Cartwright',
			'preferredName' => 'Pete', 'phone1' => '0438 432 909', 'phone2' => '',
			'address1' => '15 Robbies Ave', 'address2' => '',
			'locality' => 'Carina', 'state' => 'Qld', 'postcode' => '4152', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'amandala44@hotmail.com',
			'username' => 'amandala44', 'password' => $security->generatePasswordHash('u96lqNvhykLqtxMb'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 39, 'givenName' => 'Amanda', 'familyName' => 'Bailey',
			'preferredName' => 'Amanda', 'phone1' => '0409 066 180', 'phone2' => '',
			'address1' => '2/89 Albert St', 'address2' => '',
			'locality' => 'Kings Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Angeline Medland', 'emergencyPhone1' => '0409 066 180', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kari@karicelebrations.com',
			'username' => 'kari', 'password' => $security->generatePasswordHash('Vb2Ec6JZTrZ0dtmO'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 40, 'givenName' => 'Kari', 'familyName' => '-',
			'preferredName' => 'Kari', 'phone1' => '0437 714 965', 'phone2' => '07 5445 0622',
			'address1' => '39 Jubilee Dr', 'address2' => '',
			'locality' => 'Palmwoods', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Jessi Dunbar', 'emergencyPhone1' => '0402 374 846', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'deborahnewyou@gmail.com',
			'username' => 'deborahnewyou', 'password' => $security->generatePasswordHash('TLjD6RlkPH8hk1P5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 41, 'givenName' => 'Deborah', 'familyName' => 'Yffer',
			'preferredName' => 'Deb', 'phone1' => '0411 389 727', 'phone2' => '07 5494 2179',
			'address1' => '1 Jabiru Ct', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tony Glazebrook', 'emergencyPhone1' => '0408 684 482', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'daveandmanda@gmail.com',
			'username' => 'daveandmanda', 'password' => $security->generatePasswordHash('xFc9ntOoJJVBb3da'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 42, 'givenName' => 'Amanda', 'familyName' => 'McGrath',
			'preferredName' => 'Amanda', 'phone1' => '0435 232 451', 'phone2' => '',
			'address1' => '1/31 Saleng Cres', 'address2' => '',
			'locality' => 'Warana', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0435 232 451', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'angellove12@bigpond.com',
			'username' => 'angellove12', 'password' => $security->generatePasswordHash('oOmiWHCtH2QvjbOM'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 43, 'givenName' => 'Angel', 'familyName' => 'Love',
			'preferredName' => 'Angel', 'phone1' => '0431 673 16?', 'phone2' => '',
			'address1' => '251 Hardwood Rd', 'address2' => '',
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Nicol', 'emergencyPhone1' => '0415 635 992', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'angela1freedom@yahoo.com.au',
			'username' => 'angela1freedom', 'password' => $security->generatePasswordHash('Xw8AZByaY4GTzq2P'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 44, 'givenName' => 'Angela', 'familyName' => 'May',
			'preferredName' => 'Angela', 'phone1' => '0459 495 650', 'phone2' => '',
			'address1' => 'Hooper Rd', 'address2' => '',
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Spencer Underwood', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'judithbacon@optusnet.com.au',
			'username' => 'judithbacon', 'password' => $security->generatePasswordHash('7NB1Xy3P9J3Ej5i7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 45, 'givenName' => 'Judith', 'familyName' => 'Bacon',
			'preferredName' => 'Juda', 'phone1' => '0407 583 490', 'phone2' => '',
			'address1' => '8 Emu Creek Rd', 'address2' => '',
			'locality' => 'Crows Nest', 'state' => 'Qld', 'postcode' => '4355', 'country' => 'Australia',
			'emergencyContact' => 'Ryk Rostron', 'emergencyPhone1' => '07 4698 1831', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ben@ecourban.com.au',
			'username' => 'ben', 'password' => $security->generatePasswordHash('LnRKC3SZ1yelLgs0'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 46, 'givenName' => 'Ben', 'familyName' => 'McGhee',
			'preferredName' => 'Ben', 'phone1' => '0428 752 958', 'phone2' => '',
			'address1' => 'Unit 4/29 Russell St', 'address2' => '',
			'locality' => 'South Brisbane', 'state' => 'Qld', 'postcode' => '4101', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Vivian', 'emergencyPhone1' => '0400 551 919', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'riccolclough@gmail.com',
			'username' => 'riccolclough', 'password' => $security->generatePasswordHash('cYLUJPcU0j0Jr2za'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 47, 'givenName' => 'Richard', 'familyName' => 'Colclough',
			'preferredName' => 'Ric, Ricco N .....', 'phone1' => '0418 298 506', 'phone2' => '',
			'address1' => '24 Kings Lane', 'address2' => '',
			'locality' => 'Reesville', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Nick Francis', 'emergencyPhone1' => '0409 050 837', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'meander123@gmail.com',
			'username' => 'meander123', 'password' => $security->generatePasswordHash('Vm603xenXVuLTlQu'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 48, 'givenName' => 'Julie', 'familyName' => 'Fullerton',
			'preferredName' => 'Julie', 'phone1' => '0467 550 029', 'phone2' => '',
			'address1' => 'PO Box 1002', 'address2' => '',
			'locality' => 'Tewantin', 'state' => 'Qld', 'postcode' => '4565', 'country' => 'Australia',
			'emergencyContact' => 'Ray Jack', 'emergencyPhone1' => '0467 550 049', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'becky@woodfordia.com',
			'username' => 'becky', 'password' => $security->generatePasswordHash('2LG76DQvvDYCZWHL'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 49, 'givenName' => 'Becky', 'familyName' => 'Wandell',
			'preferredName' => 'Becky', 'phone1' => '0418 782 489', 'phone2' => '',
			'address1' => '106 Evans Rd', 'address2' => '',
			'locality' => 'Black Mountain', 'state' => 'Qld', 'postcode' => '4563', 'country' => 'Australia',
			'emergencyContact' => 'Zak Burvill', 'emergencyPhone1' => '0411 846 561', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'seedwalkabout@rediffmail.com',
			'username' => 'seedwalkabout', 'password' => $security->generatePasswordHash('v2JOCNyASyb2vhTU'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 50, 'givenName' => 'Julia', 'familyName' => 'Desbrosses',
			'preferredName' => 'Julz', 'phone1' => '0457 955 685', 'phone2' => '',
			'address1' => '13 Maipu Ct', 'address2' => '',
			'locality' => 'Eagle Heights', 'state' => 'Qld', 'postcode' => '4271', 'country' => 'Australia',
			'emergencyContact' => 'Sue Desbrosses', 'emergencyPhone1' => '0410 408 588', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kim@kimbanffy.com.au',
			'username' => 'kim', 'password' => $security->generatePasswordHash('ERIg0LpKosJHcne5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 51, 'givenName' => 'Kim', 'familyName' => 'Banffy',
			'preferredName' => 'Kim!', 'phone1' => '0425 363 589', 'phone2' => '',
			'address1' => '1/5 Barkala Ct', 'address2' => '',
			'locality' => 'Ocean Shores', 'state' => 'NSW', 'postcode' => '2483', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sharynne.durbidge@au.nestle.com',
			'username' => 'sharynne.durbidge', 'password' => $security->generatePasswordHash('xBCrGheafvjyHc1O'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 52, 'givenName' => 'Sharynne', 'familyName' => 'Durbidge',
			'preferredName' => 'Sharynne', 'phone1' => '0418 742 449', 'phone2' => '',
			'address1' => '91 Stratford Park Dr', 'address2' => '',
			'locality' => 'Pomona', 'state' => 'Qld', 'postcode' => '4568', 'country' => 'Australia',
			'emergencyContact' => 'Ken Caven', 'emergencyPhone1' => '0404 074 661', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'michelle.bragg@epicentre.com.au',
			'username' => 'michelle.bragg', 'password' => $security->generatePasswordHash('wpnQ5GiZUTnaNZJJ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 53, 'givenName' => 'Michelle', 'familyName' => 'Bragg',
			'preferredName' => 'Michelle', 'phone1' => '0407 152 182', 'phone2' => '07 3204 8118',
			'address1' => '8 Anembo Ct', 'address2' => '',
			'locality' => 'Deception Bay', 'state' => 'Qld', 'postcode' => '4508', 'country' => 'Australia',
			'emergencyContact' => 'Elaine Bragg', 'emergencyPhone1' => '07 3204 8118', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kg4005@hotmail.com',
			'username' => 'kg4005', 'password' => $security->generatePasswordHash('PUR86nVGrrahjGz4'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 54, 'givenName' => 'Kerry', 'familyName' => 'Germain',
			'preferredName' => 'Kerry', 'phone1' => '0406 866 800', 'phone2' => '',
			'address1' => '9 Ingle Ct', 'address2' => '',
			'locality' => 'Bli Bli', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Tay Germain', 'emergencyPhone1' => '0433 294 183', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suec28@gmail.com',
			'username' => 'suec28', 'password' => $security->generatePasswordHash('b6sBaeQ5E4aly6oD'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 55, 'givenName' => 'Susan', 'familyName' => 'Collins',
			'preferredName' => 'Sue', 'phone1' => '0405 558 153', 'phone2' => '07 5442 3441',
			'address1' => '40 Reids Rd', 'address2' => '',
			'locality' => 'Woombye', 'state' => 'Qld', 'postcode' => '4559', 'country' => 'Australia',
			'emergencyContact' => 'Daniel Collins', 'emergencyPhone1' => '07 5442 3441', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'resolve@tpg.com.au',
			'username' => 'resolve', 'password' => $security->generatePasswordHash('Mm42aUhg7oCm5Bbh'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 56, 'givenName' => 'Katherine', 'familyName' => 'Webb',
			'preferredName' => 'Vici', 'phone1' => '0412 170 669', 'phone2' => '07 5485 0260',
			'address1' => '13 Edward St', 'address2' => '',
			'locality' => 'Cooran', 'state' => 'Qld', 'postcode' => '4569', 'country' => 'Australia',
			'emergencyContact' => 'Madeleine Webb', 'emergencyPhone1' => '0423 433 889', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dawson_lyn@hotmail.com',
			'username' => 'dawson_lyn', 'password' => $security->generatePasswordHash('TpsP7EgNnpmobrWD'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 57, 'givenName' => 'Lynette', 'familyName' => 'Dawson',
			'preferredName' => 'Lyn', 'phone1' => '0409 628 261', 'phone2' => '07 3286 4781',
			'address1' => 'Unit 6/96 Wynyard St', 'address2' => '',
			'locality' => 'Cleveland', 'state' => 'Qld', 'postcode' => '4163', 'country' => 'Australia',
			'emergencyContact' => 'Kimberley Simmons', 'emergencyPhone1' => '0478 056 202', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'liran.s@hotmail.com',
			'username' => 'liran.s', 'password' => $security->generatePasswordHash('ns6pVSdWrxjPWmqI'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 58, 'givenName' => 'Liran', 'familyName' => 'Shachar',
			'preferredName' => 'Precious', 'phone1' => '0421 746 910', 'phone2' => '',
			'address1' => '63 Lynden St', 'address2' => '',
			'locality' => 'Camberwell', 'state' => 'Vic', 'postcode' => '3124', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lindystemp@gmail.com',
			'username' => 'lindystemp', 'password' => $security->generatePasswordHash('unVpMzc7Cs8a8rgN'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 59, 'givenName' => 'Linda', 'familyName' => 'Stemp',
			'preferredName' => 'Linda', 'phone1' => '0414 505 444', 'phone2' => '07 3342 4807',
			'address1' => '18 Joywood St', 'address2' => '',
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Yazmin Stemp', 'emergencyPhone1' => '0435 639 133', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jeanette@lifestreamassociates.com.au',
			'username' => 'jeanette', 'password' => $security->generatePasswordHash('ewmkzf8bxKid7mTz'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 60, 'givenName' => 'Jeanette', 'familyName' => 'Isaacs-Young',
			'preferredName' => 'Jeanette', 'phone1' => '0438 562 118', 'phone2' => '07 5442 2484',
			'address1' => 'PO Box 134', 'address2' => '',
			'locality' => 'Woombye', 'state' => 'Qld', 'postcode' => '4559', 'country' => 'Australia',
			'emergencyContact' => 'John Isaacs-Young', 'emergencyPhone1' => '0468 333 137', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'maynard678@gmail.com',
			'username' => 'maynard678', 'password' => $security->generatePasswordHash('EynMooTf3hvv6mLr'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 61, 'givenName' => 'David', 'familyName' => 'Maynard',
			'preferredName' => 'Dave', 'phone1' => '0459 597 617', 'phone2' => '',
			'address1' => '8 Mellumview Dr', 'address2' => '',
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Rose Maynard', 'emergencyPhone1' => '0448 633 470', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sharriefair@yahoo.com',
			'username' => 'sharriefair', 'password' => $security->generatePasswordHash('L6LE55HbJd8Mbwg3'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
			'banned_at' => gmdate('Y-m-d H:i:s'), 'banned_reason' => 'DNR',
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 62, 'givenName' => 'Sharrie', 'familyName' => 'Fair',
			'preferredName' => 'Shazzy', 'phone1' => '0413 469 687', 'phone2' => '',
			'address1' => '43A/23 Scholars Dr', 'address2' => '',
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Timothy Sima', 'emergencyPhone1' => '0413 469 687', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0, 'dnr' => 2020,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'timsima@hotmail.com',
			'username' => 'timsima', 'password' => $security->generatePasswordHash('whlJ1Bny4DLKCtud'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
			'banned_at' => gmdate('Y-m-d H:i:s'), 'banned_reason' => 'DNR',
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 63, 'givenName' => 'Timothy', 'familyName' => 'Sima',
			'preferredName' => 'Tim', 'phone1' => '0413 469 687', 'phone2' => '',
			'address1' => '43A/23 Scholars Dr', 'address2' => '',
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Carol Sima', 'emergencyPhone1' => '07 5483 8810', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0, 'dnr' => 2020,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jbillings477@gmail.com',
			'username' => 'jbillings477', 'password' => $security->generatePasswordHash('THpHcJvgtYBYL4PH'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 64, 'givenName' => 'Joy', 'familyName' => 'Billings',
			'preferredName' => 'Joy', 'phone1' => '0409 477 651', 'phone2' => '',
			'address1' => '6 Oceanic Dr', 'address2' => '',
			'locality' => 'Buddina', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Lisa McBurnie', 'emergencyPhone1' => '0405 102 102', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jessomine@westnet.com.au',
			'username' => 'jessomine', 'password' => $security->generatePasswordHash('Dp9Kw4yRIU5EnrA7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 65, 'givenName' => 'Lani', 'familyName' => 'Mercer',
			'preferredName' => 'Lani', 'phone1' => '0411 076 585', 'phone2' => '',
			'address1' => '44 Buzaki Rd', 'address2' => '',
			'locality' => 'Glass House Mountains', 'state' => 'Qld', 'postcode' => '4518', 'country' => 'Australia',
			'emergencyContact' => 'Craig', 'emergencyPhone1' => '0411 076 586', 'emergencyPhone2' => '07 5438 7795',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'clayton.d.otoole@gmail.com',
			'username' => 'clayton.d.otoole', 'password' => $security->generatePasswordHash('pr6tg2ECPlu20sme'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 66, 'givenName' => 'Clayton', 'familyName' => 'O\'Toole',
			'preferredName' => 'Clayton', 'phone1' => '0467 081 178', 'phone2' => '07 5492 9467',
			'address1' => '43 Paget St', 'address2' => '',
			'locality' => 'Mooloolah Valley', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => 'Lynda O\'Toole', 'emergencyPhone1' => '0420 455 260', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rl.weston89@gmail.com',
			'username' => 'rl.weston89', 'password' => $security->generatePasswordHash('IkI1bLhCvyQv2Drr'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 67, 'givenName' => 'Rochelle', 'familyName' => 'Ragless',
			'preferredName' => 'Shell', 'phone1' => '0423 882 389', 'phone2' => '07 3272 7108',
			'address1' => '7 Bidder St', 'address2' => '',
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Danny Ragless', 'emergencyPhone1' => '0447 120 013', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dp.ragless@gmail.com',
			'username' => 'dp.ragless', 'password' => $security->generatePasswordHash('vAMe2F0mhR1vG8GE'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 68, 'givenName' => 'Daniel', 'familyName' => 'Ragless',
			'preferredName' => 'Danny', 'phone1' => '0447 120 013', 'phone2' => '07 3272 7108',
			'address1' => '7 Bidder St', 'address2' => '',
			'locality' => 'Salisbury', 'state' => 'Qld', 'postcode' => '4107', 'country' => 'Australia',
			'emergencyContact' => 'Rochelle Ragless', 'emergencyPhone1' => '0423 882 389', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'zenkenmassage@gmail.com',
			'username' => 'zenkenmassage', 'password' => $security->generatePasswordHash('EJeWn9ZQDjN1cM1h'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 69, 'givenName' => 'Kendrick', 'familyName' => 'Gleeson',
			'preferredName' => 'Ken', 'phone1' => '0437 738 712', 'phone2' => '',
			'address1' => '1/41 Hynes St', 'address2' => '',
			'locality' => 'Fortitude Valley', 'state' => 'Qld', 'postcode' => '4006', 'country' => 'Australia',
			'emergencyContact' => 'Simon Gleeson', 'emergencyPhone1' => '0448 098 697', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'leoniew73@gmail.com',
			'username' => 'leoniew73', 'password' => $security->generatePasswordHash('OXDANyypOBSGRnBo'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 70, 'givenName' => 'Leonie', 'familyName' => 'Wilson',
			'preferredName' => 'Le', 'phone1' => '0420 929 860', 'phone2' => '07 5456 1525',
			'address1' => '101 Lindsay Rd', 'address2' => '',
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'John Grove', 'emergencyPhone1' => '07 5456 1525', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'carlabananas@hotmail.com',
			'username' => 'carlabananas', 'password' => $security->generatePasswordHash('QO6pImL4as6ULJ5G'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 71, 'givenName' => 'Carla', 'familyName' => 'Sculthorpe',
			'preferredName' => 'Carla', 'phone1' => '0411 577 892', 'phone2' => '',
			'address1' => 'Unit 7/60 Edward St', 'address2' => '',
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Joshua Byrne', 'emergencyPhone1' => '0474 728 901', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'andylivesinoz@gmail.com',
			'username' => 'andylivesinoz', 'password' => $security->generatePasswordHash('0GZ5ds7ULJ5GVpID'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 72, 'givenName' => 'Andrew', 'familyName' => 'Makin',
			'preferredName' => 'Andy', 'phone1' => '0490 366 148', 'phone2' => '',
			'address1' => '5 Prince St', 'address2' => '',
			'locality' => 'Dinmore', 'state' => 'Qld', 'postcode' => '4303', 'country' => 'Australia',
			'emergencyContact' => 'James Makin', 'emergencyPhone1' => '0457 329 343', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jennyparenteau@gmail.com',
			'username' => 'jennyparenteau', 'password' => $security->generatePasswordHash('ts3BXxfegxho4dl7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 73, 'givenName' => 'Jennifer', 'familyName' => 'Parenteau',
			'preferredName' => 'Jenny', 'phone1' => '0403 646 899', 'phone2' => '',
			'address1' => '28A Hardy Ave', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Mary Sterling', 'emergencyPhone1' => '0417 605 655', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'steve@serendigity.net',
			'username' => 'steve', 'password' => $security->generatePasswordHash('SEQNnfhwBi4Rohrc'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 74, 'givenName' => 'Setphen', 'familyName' => 'Swayne',
			'preferredName' => 'Steve', 'phone1' => '0479 041 957', 'phone2' => '07 5435 2685',
			'address1' => '43 Tallowwood St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Karen Arnold', 'emergencyPhone1' => '0479 087 771', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'meefeefee@yahoo.co.uk',
			'username' => 'meefeefee', 'password' => $security->generatePasswordHash('CjTyGKSDgia3zeq7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 75, 'givenName' => 'Fiona', 'familyName' => 'Gray',
			'preferredName' => 'Fiona', 'phone1' => '0466 469 228', 'phone2' => '',
			'address1' => '12 Woodville Pl', 'address2' => '',
			'locality' => 'Annerley', 'state' => 'Qld', 'postcode' => '4103', 'country' => 'Australia',
			'emergencyContact' => 'Lawrence Agar', 'emergencyPhone1' => '0421 650 487', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hicksstephanie@optusnet.com.au',
			'username' => 'hicksstephanie', 'password' => $security->generatePasswordHash('acpA2VYLwVHVrFoK'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 76, 'givenName' => 'Stephanie', 'familyName' => 'Hicks',
			'preferredName' => 'Stephanie', 'phone1' => '0401 650 704', 'phone2' => '07 3352 5576',
			'address1' => '21 Bally St', 'address2' => '',
			'locality' => 'Kelvin Grove', 'state' => 'Qld', 'postcode' => '4059', 'country' => 'Australia',
			'emergencyContact' => 'Ed Wrigley', 'emergencyPhone1' => '07 3150 7547', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'smnwlls58@gmail.com',
			'username' => 'smnwlls58', 'password' => $security->generatePasswordHash('9DhrWFsxvlpiSkEl'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 77, 'givenName' => 'Simon', 'familyName' => 'Wells',
			'preferredName' => 'Simon', 'phone1' => '0408 762 473', 'phone2' => '',
			'address1' => '88 Cambridge St', 'address2' => '',
			'locality' => 'Carina Heights', 'state' => 'Qld', 'postcode' => '4152', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0408 762 473', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'yazistemp@gmail.com',
			'username' => 'yazistemp', 'password' => $security->generatePasswordHash('5yrXEA3iFm5nbPwA'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 78, 'givenName' => 'Yazmin', 'familyName' => 'Stemp Yacoubi',
			'preferredName' => 'Yazmin', 'phone1' => '0435 639 133', 'phone2' => '07 3342 4807',
			'address1' => '18 Joywood St', 'address2' => '',
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Linda Stemp', 'emergencyPhone1' => '0414 505 444', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'casslloyd2@yahoo.com.au',
			'username' => 'casslloyd2', 'password' => $security->generatePasswordHash('mVlZF4Way4nwx37T'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 79, 'givenName' => 'Caroline', 'familyName' => 'Lloyd',
			'preferredName' => 'Cass', 'phone1' => '0468 453 344', 'phone2' => '',
			'address1' => 'PO Box 1987', 'address2' => '',
			'locality' => 'Byron Bay', 'state' => 'NSW', 'postcode' => '2481', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Parenteau', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'karla.quinn@uqconnect.edu.au',
			'username' => 'karla.quinn', 'password' => $security->generatePasswordHash('iDRTdfAdWo4BttyA'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 80, 'givenName' => 'Karla', 'familyName' => 'Quinn',
			'preferredName' => 'Karla', 'phone1' => '0419 653 502', 'phone2' => '07 3876 2569',
			'address1' => '4/13 Clermont St', 'address2' => '',
			'locality' => 'Bardon', 'state' => 'Qld', 'postcode' => '4065', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Quinn', 'emergencyPhone1' => '0419 653 340', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'davo101lap@gmail.com',
			'username' => 'davo101lap', 'password' => $security->generatePasswordHash('AKtEqHQgJgnER9ez'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 81, 'givenName' => 'David', 'familyName' => 'Lapsley',
			'preferredName' => 'David', 'phone1' => '07 5494 4827', 'phone2' => '',
			'address1' => '186 Jager Dr', 'address2' => '',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Cheryl Laizans', 'emergencyPhone1' => '07 5429 6065', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'glenda-eade@hotmail.com',
			'username' => 'glenda-eade', 'password' => $security->generatePasswordHash('jTmR3WoGUQPQgS0P'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 82, 'givenName' => 'Glenda', 'familyName' => 'Eade',
			'preferredName' => 'Glenda', 'phone1' => '0432 713 456', 'phone2' => '',
			'address1' => 'PO Box 200', 'address2' => '',
			'locality' => 'Eudlo', 'state' => 'Qld', 'postcode' => '4554', 'country' => 'Australia',
			'emergencyContact' => 'Laura Mahadevan', 'emergencyPhone1' => '0423 437 031', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'caztpix@gmail.com',
			'username' => 'caztpix', 'password' => $security->generatePasswordHash('m9dZuRo90xtVovDm'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 83, 'givenName' => 'Carole', 'familyName' => 'Thomas',
			'preferredName' => 'Caz', 'phone1' => '0402 245 476', 'phone2' => '',
			'address1' => '57 Frederick St', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Matt Thomas', 'emergencyPhone1' => '0414 243 883', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 't.maree@hotmail.co.nz',
			'username' => 't.maree', 'password' => $security->generatePasswordHash('6bLHswfle5l9MgTu'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 84, 'givenName' => 'Tamara', 'familyName' => 'Tilling',
			'preferredName' => 'Tamara', 'phone1' => '0428 821 575', 'phone2' => '',
			'address1' => '34 Water Gum Cres', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sharon Ward', 'emergencyPhone1' => '0411 856 877', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kathydavis1@bigpond.com',
			'username' => 'kathydavis1', 'password' => $security->generatePasswordHash('l83WSQ48CXXZW0lC'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 85, 'givenName' => 'Kathleen', 'familyName' => 'Davis',
			'preferredName' => 'Kathy', 'phone1' => '0408 833 156', 'phone2' => '07 5435 2782',
			'address1' => '14 Ash St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Luke Grimshaw', 'emergencyPhone1' => '0422 694 079', 'emergencyPhone2' => '07 5435 2782',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suzy@freeorganic.com.au',
			'username' => 'suzy', 'password' => $security->generatePasswordHash('UfSL2voUGR7BaD96'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 86, 'givenName' => 'Suzy', 'familyName' => 'Barry',
			'preferredName' => 'Suzy', 'phone1' => '0448 002 422', 'phone2' => '07 5435 0045',
			'address1' => '902 Aherns Rd', 'address2' => '',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Mark Kempster', 'emergencyPhone1' => '0417 722 995', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'trevjfranklin@gmail.com',
			'username' => 'trevjfranklin', 'password' => $security->generatePasswordHash('hEonsGbjVdPh02SV'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 87, 'givenName' => 'Trevor', 'familyName' => 'Franklin',
			'preferredName' => 'Trev', 'phone1' => '0419 667 269', 'phone2' => '07 4128 6672',
			'address1' => 'PO Box 5487', 'address2' => '',
			'locality' => 'Torquay', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Erin Franklin', 'emergencyPhone1' => '0458 942 094', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mark@foodsourcegroup.com.au',
			'username' => 'mark', 'password' => $security->generatePasswordHash('edZ8JuJgNx8Lwc2r'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 88, 'givenName' => 'Mark', 'familyName' => 'Kempster',
			'preferredName' => 'Mark', 'phone1' => '0417 722 995', 'phone2' => '07 5435 0045',
			'address1' => '902 Aherns Rd', 'address2' => '',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Suzy Barry', 'emergencyPhone1' => '0448 002 422', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bibianastanfield@yahoo.de',
			'username' => 'bibianastanfield', 'password' => $security->generatePasswordHash('7bx6JSOoiqXyXNmP'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 89, 'givenName' => 'Bibiana', 'familyName' => 'Stanfield',
			'preferredName' => 'Bibi', 'phone1' => '0437 238 223', 'phone2' => '',
			'address1' => 'Mossybank Rd', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rodneystoddart@gmail.com',
			'username' => 'rodneystoddart', 'password' => $security->generatePasswordHash('sROQPbxTC4iNW2bG'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
			'banned_at' => gmdate('Y-m-d H:i:s'), 'banned_reason' => 'DNR',
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 90, 'givenName' => 'Rodney', 'familyName' => 'Stoddart',
			'preferredName' => 'Rodney', 'phone1' => '0420 824 173', 'phone2' => '',
			'address1' => 'PO Box 671', 'address2' => '',
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Pam Dodson', 'emergencyPhone1' => '0407 955 480', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0, 'dnr' => 2020,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'barrym53@gmail.com',
			'username' => 'barrym53', 'password' => $security->generatePasswordHash('OE1jO5vACVndFoDp'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 91, 'givenName' => 'Barry', 'familyName' => 'Munyard',
			'preferredName' => 'Barry', 'phone1' => '0447 130 453', 'phone2' => '',
			'address1' => '18 Gardenvale St', 'address2' => '',
			'locality' => 'Holland Park West', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Darcy Munyard', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kennyo@westnet.com.au',
			'username' => 'kennyo', 'password' => $security->generatePasswordHash('dUkUbrSUmtpMrgKf'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 92, 'givenName' => 'Kenneth', 'familyName' => 'O\'Flaherty',
			'preferredName' => 'Ken', 'phone1' => '0417 646 759', 'phone2' => '07 5476 9533',
			'address1' => '58 Townsend Rd', 'address2' => '',
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Lois O\'Flaherty', 'emergencyPhone1' => '07 5476 8533', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'syawruss@yahoo.com.au',
			'username' => 'syawruss', 'password' => $security->generatePasswordHash('0SlmQDM3EFx33OHq'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 93, 'givenName' => 'Sya', 'familyName' => 'Wiersma',
			'preferredName' => 'Sya', 'phone1' => '0432 795 549', 'phone2' => '',
			'address1' => '572 Coolabine Creek Rd', 'address2' => '',
			'locality' => 'Coolabine', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Paul Russell', 'emergencyPhone1' => '07 5472 3416', 'emergencyPhone2' => '0432 526 874',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lovefromsarika@hotmail.com',
			'username' => 'lovefromsarika', 'password' => $security->generatePasswordHash('oU9W27NRY1rIEMhl'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 94, 'givenName' => 'Cecilie', 'familyName' => 'Schiotz',
			'preferredName' => 'Cecilie', 'phone1' => '0437 080 050', 'phone2' => '07 5429 6670',
			'address1' => '1/10 Cherry St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Peter Schiotz', 'emergencyPhone1' => '0407 942 428', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'wattlebeeblossom@gmsil.com',
			'username' => 'wattlebeeblossom', 'password' => $security->generatePasswordHash('noZMUPcpq7If9IN8'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 95, 'givenName' => 'Joanne', 'familyName' => 'Timbs',
			'preferredName' => 'Joanne', 'phone1' => '0428 426 243', 'phone2' => '',
			'address1' => 'Lot 65 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Christine Hartley', 'emergencyPhone1' => '0428 426 243', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'a.tuddenham@yahoo.com',
			'username' => 'a.tuddenham', 'password' => $security->generatePasswordHash('teazYgh6cn54psHq'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 96, 'givenName' => 'Alicia', 'familyName' => 'Tuddenham',
			'preferredName' => 'Ali', 'phone1' => '0434 554 790', 'phone2' => '',
			'address1' => '6/15 Carinya Dr', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => 'Nils Michaelis', 'emergencyPhone1' => '0402 505 613', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'juliefauser@bigpond.com',
			'username' => 'juliefauser', 'password' => $security->generatePasswordHash('ALRtBwlncGSyBQvX'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 97, 'givenName' => 'Julie', 'familyName' => 'Fauser',
			'preferredName' => 'Julie', 'phone1' => '07 5499 9313', 'phone2' => '',
			'address1' => '19 Cedar Grove Crt', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Todd Fauser', 'emergencyPhone1' => '07 5499 9313', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'berirock@optusnet.com.au',
			'username' => 'berirock', 'password' => $security->generatePasswordHash('4krFTdq6JaRGKzDc'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 98, 'givenName' => 'Jodie', 'familyName' => 'Rockliff',
			'preferredName' => 'Jodie', 'phone1' => '0438 128 038', 'phone2' => '07 5309 5790',
			'address1' => '47 King St', 'address2' => '',
			'locality' => 'Shelly Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tim Beriman', 'emergencyPhone1' => '0413 435 160', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'whittojnr@gmail.com',
			'username' => 'whittojnr', 'password' => $security->generatePasswordHash('OwQcdfX2a2Gr0vZ2'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 99, 'givenName' => 'Jackson', 'familyName' => 'Whitton',
			'preferredName' => 'Jackson', 'phone1' => '0421 777 512', 'phone2' => '07 5445 5799',
			'address1' => '189/52 University Way', 'address2' => '',
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Noela', 'emergencyPhone1' => '07 5445 5799', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'planetbgirl@hotmail.com',
			'username' => 'planetbgirl', 'password' => $security->generatePasswordHash('S3tVdoGafFsDg2HY'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 100, 'givenName' => 'Bianka', 'familyName' => 'Paunovic',
			'preferredName' => 'B', 'phone1' => '0467 249 743', 'phone2' => '',
			'address1' => '1965 Stanley River Rd', 'address2' => '',
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Terri-Anne Goodreid', 'emergencyPhone1' => '0488 914 101', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
	}

	public function safeDown()
	{
		return true;
	}
}
