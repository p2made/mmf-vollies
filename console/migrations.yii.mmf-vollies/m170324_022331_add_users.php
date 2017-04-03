<?php

use yii\db\Migration;

class m170324_022331_add_users extends Migration
{
	public function safeUp()
	{
		$security = Yii::$app->security;

		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'catbirdgal@gmail.com',
			'username' => 'catbirdgal', 'password' => $security->generatePasswordHash('7UjYo5GPF2iLUVW6'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 300, 'givenName' => 'Helen', 'familyName' => 'Graham',
			'preferredName' => 'Helen', 'phone1' => '0428 923 448', 'phone2' => '',
			'address1' => '127 Kemp St', 'address2' => '',
			'locality' => 'Hamilton South', 'state' => 'NSW', 'postcode' => '2303', 'country' => 'Australia',
			'emergencyContact' => 'Emmanuel McClintock', 'emergencyPhone1' => '0413 896 525', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'punyaji@gmail.com',
			'username' => 'punyaji', 'password' => $security->generatePasswordHash('0Z0ymTAEAiNYavr5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 301, 'givenName' => 'Pierre', 'familyName' => 'Nicol',
			'preferredName' => 'Pierre', 'phone1' => '0418 782 784', 'phone2' => '',
			'address1' => '92 Gillies St', 'address2' => '',
			'locality' => 'Zillmere', 'state' => 'Qld', 'postcode' => '4034', 'country' => 'Australia',
			'emergencyContact' => 'Mr Renzo Nicol', 'emergencyPhone1' => '07 3846 3114', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rossiebarr@hotmail.com',
			'username' => 'rossiebarr', 'password' => $security->generatePasswordHash('Dmw93EzCGALGaPlo'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 302, 'givenName' => 'Ros', 'familyName' => 'Barr',
			'preferredName' => 'Ros', 'phone1' => '0408 632 192', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'clarebeverly@hotmail.com',
			'username' => 'clarebeverly', 'password' => $security->generatePasswordHash('9mkEeQTlnJ9blpzE'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 303, 'givenName' => 'Clare', 'familyName' => 'Beverly',
			'preferredName' => 'Clare', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'windmilldc@yahoo.com',
			'username' => 'windmilldc', 'password' => $security->generatePasswordHash('rFPGykhQAM5PhpmC'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 304, 'givenName' => 'Donna', 'familyName' => 'Cervantes',
			'preferredName' => 'Donna', 'phone1' => '0416 865 263', 'phone2' => '',
			'address1' => '93A Obi Lane', 'address2' => '',
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'orecrystaltheatre@live.com',
			'username' => 'orecrystaltheatre', 'password' => $security->generatePasswordHash('DKGQDyw6FSZoEtj5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 305, 'givenName' => 'Glenn', 'familyName' => 'Christie',
			'preferredName' => 'Glenn', 'phone1' => '0408 157 895', 'phone2' => '07 5445 7936',
			'address1' => '15 Carrington Dr', 'address2' => '',
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Lisa Rosso', 'emergencyPhone1' => '0432 762 033', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'markocimesa@yahoo.com.au',
			'username' => 'markocimesa', 'password' => $security->generatePasswordHash('v2SN5qU76QVdGcq5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 306, 'givenName' => 'Marko', 'familyName' => 'Cimesa',
			'preferredName' => 'Marko', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bdelaney@pacluth.qld.edu.au',
			'username' => 'bdelaney', 'password' => $security->generatePasswordHash('uZPMhiLyNravB96p'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 307, 'givenName' => 'Brendan', 'familyName' => 'Delaney',
			'preferredName' => 'Brendan', 'phone1' => '0402 825 065', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'toddfauser@bigpond.com',
			'username' => 'toddfauser', 'password' => $security->generatePasswordHash('pYmLBve7x0xlsTeP'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 308, 'givenName' => 'Todd', 'familyName' => 'Fauser',
			'preferredName' => 'Todd', 'phone1' => '', 'phone2' => '07 5499 9313',
			'address1' => '19 Cedar Grove Crt', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Julie Fauser', 'emergencyPhone1' => '07 5499 9313', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'theasbook@gmail.com',
			'username' => 'theasbook', 'password' => $security->generatePasswordHash('kRzoEh5M7mOTiGyw'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 309, 'givenName' => 'Thea', 'familyName' => 'Fietje',
			'preferredName' => 'Thea', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hintertech@gmail.com',
			'username' => 'hintertech', 'password' => $security->generatePasswordHash('zvlVl9p26Oo7YIe7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 310, 'givenName' => 'Kevin', 'familyName' => 'Finney',
			'preferredName' => 'Kevin', 'phone1' => '0427 345 033', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mike-fitzpatrick@hotmail.com',
			'username' => 'mike-fitzpatrick', 'password' => $security->generatePasswordHash('ajtW4YsQhQrF7y7r'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 311, 'givenName' => 'Mike', 'familyName' => 'Fitzpatrick',
			'preferredName' => 'Michael', 'phone1' => '0450 965 780', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lesleymaureen@gmail.com',
			'username' => 'lesleymaureen', 'password' => $security->generatePasswordHash('LAv5yIIPtRdkyOkh'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 312, 'givenName' => 'Lesley', 'familyName' => 'Halliday',
			'preferredName' => 'Lesley', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kimh@goggo.com.au',
			'username' => 'kimh', 'password' => $security->generatePasswordHash('lcxreULs6B5VwUs8'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 313, 'givenName' => 'Kim', 'familyName' => 'Holcroft',
			'preferredName' => 'Kim', 'phone1' => '0438 714 770', 'phone2' => '07 5429 6402',
			'address1' => '1153 Maleny-Kenilworth Rd', 'address2' => '',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Paul Magee', 'emergencyPhone1' => '0438 766 896', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'arisacarol@gmail.com',
			'username' => 'arisacarol', 'password' => $security->generatePasswordHash('DT8kUpyFqoNlL122'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 314, 'givenName' => 'Arisa', 'familyName' => 'Inlakesh',
			'preferredName' => 'Arisa', 'phone1' => '0413 461 178', 'phone2' => '',
			'address1' => '42 Brooks Rd', 'address2' => '',
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Terry Bishop', 'emergencyPhone1' => '0409 262 858', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mjeff43@gmail.com.',
			'username' => 'mjeff43', 'password' => $security->generatePasswordHash('DvuYfJT1lpBEsifZ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 315, 'givenName' => 'Morgan', 'familyName' => 'Jeffrey',
			'preferredName' => 'Morgan', 'phone1' => '0403 458 559', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'johannalacy82@gmail.com',
			'username' => 'johannalacy82', 'password' => $security->generatePasswordHash('oHLawTB3iRcQu4sD'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 316, 'givenName' => 'Johanna', 'familyName' => 'Lacy',
			'preferredName' => 'Johanna', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'visionpower@aapt.net.au',
			'username' => 'visionpower', 'password' => $security->generatePasswordHash('hj5IrS1qtCnjwa24'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 317, 'givenName' => 'Gay', 'familyName' => 'Liddington',
			'preferredName' => 'Gay', 'phone1' => '0424 379 338', 'phone2' => '07 5422 9525',
			'address1' => 'PO Box 664', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Phil Hands', 'emergencyPhone1' => '0416 500 596', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'margrl135@gmail.com',
			'username' => 'margrl135', 'password' => $security->generatePasswordHash('8ljuCUgI1w0gv4eU'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 318, 'givenName' => 'Margaret', 'familyName' => 'Longworth',
			'preferredName' => 'Margaret', 'phone1' => '0438 794 252', 'phone2' => '07 5435 2856',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cobhearthome@gmail.com',
			'username' => 'cobhearthome', 'password' => $security->generatePasswordHash('MglweFHGIddCifen'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 319, 'givenName' => 'Jodie', 'familyName' => 'Lyn',
			'preferredName' => 'Jodie', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gavanmck@yahoo.com.au',
			'username' => 'gavanmck', 'password' => $security->generatePasswordHash('hsmiEzerHKowjMJD'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 320, 'givenName' => 'Leanne', 'familyName' => 'McKew',
			'preferredName' => 'Gavan', 'phone1' => '0439 856 890', 'phone2' => '',
			'address1' => '565 Maleny-Montville Rd', 'address2' => '',
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gavin Mckew', 'emergencyPhone1' => '0439 856 890', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tombow51@hotmail.com',
			'username' => 'tombow51', 'password' => $security->generatePasswordHash('bFIj7SrnGKM3d6yI'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 321, 'givenName' => 'Tom', 'familyName' => 'Nealson',
			'preferredName' => 'Tom', 'phone1' => '0437 279 505', 'phone2' => '07 5494 4590',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'rayloo@bigpond.net.au',
			'username' => 'rayloo', 'password' => $security->generatePasswordHash('mRhh3P20rHEMlDKj'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 322, 'givenName' => 'Ray', 'familyName' => 'Oldfield',
			'preferredName' => 'Ray', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jqk6448@yahoo.com.au',
			'username' => 'jqk6448', 'password' => $security->generatePasswordHash('pHshWQDz4cA3jeDt'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 323, 'givenName' => 'June', 'familyName' => 'Quinn-Kirk',
			'preferredName' => 'June', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lisa.reye@hotmail.com',
			'username' => 'lisa.reye', 'password' => $security->generatePasswordHash('SLgqpKjLdRJRVDVZ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 324, 'givenName' => 'Lisa', 'familyName' => 'Reye',
			'preferredName' => 'Lisa', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lyndasimpson@bigpond.com',
			'username' => 'lyndasimpson', 'password' => $security->generatePasswordHash('TTkGYgifHTtexAS3'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 325, 'givenName' => 'Lynda', 'familyName' => 'Simpson',
			'preferredName' => 'Lynda', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'squiresinn@hotmail.com',
			'username' => 'squiresinn', 'password' => $security->generatePasswordHash('Z4g3rljzhhyBCXuF'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 326, 'givenName' => 'Squire', 'familyName' => 'Skinner',
			'preferredName' => 'John', 'phone1' => '0427 231052', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'iansmith0802@gmail.com',
			'username' => 'iansmith0802', 'password' => $security->generatePasswordHash('M0wQMItdX7Ngzre8'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 327, 'givenName' => 'Ian', 'familyName' => 'Smith',
			'preferredName' => 'Ian', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'teekah@gmail.com',
			'username' => 'teekah', 'password' => $security->generatePasswordHash('Eqk4NSlpLc94lcYQ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 328, 'givenName' => 'Natika', 'familyName' => 'Storey',
			'preferredName' => 'Teekah', 'phone1' => '0481 546 328', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suskaj@yahoo.com',
			'username' => 'suskaj', 'password' => $security->generatePasswordHash('fo0C61KvWZ1TBS5x'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 329, 'givenName' => 'Jason', 'familyName' => 'Suska',
			'preferredName' => 'Paul', 'phone1' => '0467 274 138', 'phone2' => '07 4978 1322',
			'address1' => '49 Butler St', 'address2' => '',
			'locality' => 'New Auckland', 'state' => 'Qld', 'postcode' => '4680', 'country' => 'Australia',
			'emergencyContact' => 'Michael Suska', 'emergencyPhone1' => '0407 859 206', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'susie-t015@bigpond.com',
			'username' => 'susie-t015', 'password' => $security->generatePasswordHash('MUKwWOgoirvFHpQA'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 330, 'givenName' => 'Susan', 'familyName' => 'Tanner',
			'preferredName' => 'Sue', 'phone1' => '', 'phone2' => '07 5435 9348',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cmaryt17@yahoo.com',
			'username' => 'cmaryt17', 'password' => $security->generatePasswordHash('EPNbvQvMB2sueKWI'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 331, 'givenName' => 'Cath', 'familyName' => 'Thomson',
			'preferredName' => 'Cath', 'phone1' => '0468 374 221', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'phil.watts@lwb.org.au',
			'username' => 'phil.watts', 'password' => $security->generatePasswordHash('fgzaSiWscP2VhfxW'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 332, 'givenName' => 'Phil', 'familyName' => 'Watts',
			'preferredName' => 'Phil', 'phone1' => '0467 749 404', 'phone2' => '02 4934 5617',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'cowboyconnection@bigpond.com',
			'username' => 'cowboyconnection', 'password' => $security->generatePasswordHash('AOK9v2d3agNiBjPE'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 333, 'givenName' => 'Mark', 'familyName' => 'White',
			'preferredName' => 'Cowboy', 'phone1' => '0418 762 440', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'allstringsattachedband@gmail.com',
			'username' => 'allstringsattachedband', 'password' => $security->generatePasswordHash('pnL3MU8szFnY7FTu'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 334, 'givenName' => 'Emily', 'familyName' => 'Willis',
			'preferredName' => 'Emily', 'phone1' => '', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
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
