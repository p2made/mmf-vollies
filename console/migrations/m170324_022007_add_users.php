<?php

use yii\db\Migration;

class m170324_022007_add_users extends Migration
{
	public function safeUp()
	{
		$security = Yii::$app->security;

		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'skye.ba.leong@gmail.com',
			'username' => 'skye.ba.leong', 'password' => $security->generatePasswordHash('lmUZ2Srekz2zw0vG'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 101, 'givenName' => 'Skye Leong', 'familyName' => 'Leong',
			'preferredName' => 'Skye', 'phone1' => '0438 486 666', 'phone2' => '',
			'address1' => '7-19 Beechwood Rd', 'address2' => '',
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'June Leong', 'emergencyPhone1' => '0438 872 571', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sarah_ann_m@hotmail.com',
			'username' => 'sarah_ann_m', 'password' => $security->generatePasswordHash('JWnWD3ZCcb20TOKW'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 102, 'givenName' => 'Kathleen', 'familyName' => 'McGovern',
			'preferredName' => 'Sarah', 'phone1' => '0434 809 316', 'phone2' => '07 5445 6064',
			'address1' => '31 Rim Rd', 'address2' => '',
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Jennifer Sargent', 'emergencyPhone1' => '0407 125 779', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'leigh.cam@hotmail.com',
			'username' => 'leigh.cam', 'password' => $security->generatePasswordHash('TT5BoEv1Q5qYshmS'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 103, 'givenName' => 'Leigh', 'familyName' => 'Campbell',
			'preferredName' => 'Leigh', 'phone1' => '0413 755 850', 'phone2' => '',
			'address1' => '35 Parkyn Parade', 'address2' => '',
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Georgia Campbell', 'emergencyPhone1' => '0406 007 794', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'janeyonearth@yahoo.com',
			'username' => 'janeyonearth', 'password' => $security->generatePasswordHash('GahyRz2qscMc35G1'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 104, 'givenName' => 'Janey', 'familyName' => 'Monaghan',
			'preferredName' => 'Janey', 'phone1' => '0404 119 345', 'phone2' => '07 5429 6502',
			'address1' => 'PO Box 716', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Santosh Broom', 'emergencyPhone1' => '0415 103 882', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'colleen66cv@gmail.com',
			'username' => 'colleen66cv', 'password' => $security->generatePasswordHash('vIzfAmPtrfGL56up'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 105, 'givenName' => 'Colleen', 'familyName' => 'Verhaaren',
			'preferredName' => 'Gumala', 'phone1' => '0448 845 266', 'phone2' => '',
			'address1' => '25 Cedar Grove Ct', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Linda Williams', 'emergencyPhone1' => '0404 012 898', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'brendan1968@gmail.com',
			'username' => 'brendan1968', 'password' => $security->generatePasswordHash('ZemySvMA2stdKYQo'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 106, 'givenName' => 'Brendan', 'familyName' => 'O\'Shea',
			'preferredName' => 'Brendan', 'phone1' => '0422 885 954', 'phone2' => '',
			'address1' => '19 Ash St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kerry Laizans', 'emergencyPhone1' => '0411 488 291', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'purplefeather15@bigpond.com',
			'username' => 'purplefeather15', 'password' => $security->generatePasswordHash('s8z510s304Oex22n'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 107, 'givenName' => 'Heather', 'familyName' => 'Nurser',
			'preferredName' => 'Heather', 'phone1' => '0413 223 031', 'phone2' => '',
			'address1' => '2/25 Iluka Ave', 'address2' => '',
			'locality' => 'Buddina', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Jessica North', 'emergencyPhone1' => '0420 722 028', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'allan.norman@live.com.au',
			'username' => 'allan.norman', 'password' => $security->generatePasswordHash('0cCePJMFNxpcr48O'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 108, 'givenName' => 'Allan', 'familyName' => 'Norman',
			'preferredName' => 'Al', 'phone1' => '0407 626 246', 'phone2' => '',
			'address1' => 'Lot 308 Arborseven Rd', 'address2' => '',
			'locality' => 'Glenwood', 'state' => 'Qld', 'postcode' => '4570', 'country' => 'Australia',
			'emergencyContact' => 'Debra McKay', 'emergencyPhone1' => '0408 630 477', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suerobs43@gmail.com',
			'username' => 'suerobs43', 'password' => $security->generatePasswordHash('DWeQyklkmRSHXZJS'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 109, 'givenName' => 'Sue', 'familyName' => 'Robson',
			'preferredName' => 'Sue', 'phone1' => '0407 076 555', 'phone2' => '',
			'address1' => '411B', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0407 076 555', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'carsten@lifejoy.info',
			'username' => 'carsten', 'password' => $security->generatePasswordHash('Vtx1D0LYndIAhk9N'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 110, 'givenName' => 'Carsten', 'familyName' => 'Nielsen',
			'preferredName' => 'Carsten', 'phone1' => '07 5315 5445', 'phone2' => '',
			'address1' => '114 Browns Rd', 'address2' => '',
			'locality' => 'Belli Park', 'state' => 'Qld', 'postcode' => '4652', 'country' => 'Australia',
			'emergencyContact' => 'Joan McVilly', 'emergencyPhone1' => '07 5447 0181', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'garrywayne50@gmail.com',
			'username' => 'garrywayne50', 'password' => $security->generatePasswordHash('q9hRSFOtatos0vDC'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 111, 'givenName' => 'Garry', 'familyName' => 'Johnson',
			'preferredName' => 'Garry', 'phone1' => '0467 272 516', 'phone2' => '07 5429 6492',
			'address1' => '19 Rosella Rd', 'address2' => '',
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Johnson', 'emergencyPhone1' => '0467 244 712', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'brendaholligan@yahoo.com.au',
			'username' => 'brendaholligan', 'password' => $security->generatePasswordHash('JKh0BLFhnfaBUV5x'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 112, 'givenName' => 'Brenda', 'familyName' => 'Holligan',
			'preferredName' => 'Bren', 'phone1' => '07 5494 4769', 'phone2' => '',
			'address1' => 'Lot 2 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Neil Commins', 'emergencyPhone1' => '0404 146 319', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'carmelstrphenson@gmail.com0',
			'username' => 'carmelstrphenson', 'password' => $security->generatePasswordHash('yj8KFAau6lo0Lcmi'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 113, 'givenName' => 'Carmel', 'familyName' => 'Stephenson',
			'preferredName' => 'Carmel', 'phone1' => '0432 605 751', 'phone2' => '',
			'address1' => '99 Yelgun Rd', 'address2' => '',
			'locality' => 'Yelgun', 'state' => 'NSW', 'postcode' => '2483', 'country' => 'Australia',
			'emergencyContact' => 'Rosemary Mitchell', 'emergencyPhone1' => '07 5445 7472', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'roydenfagan@gmail.com',
			'username' => 'roydenfagan', 'password' => $security->generatePasswordHash('aPxEVBOrcE5z6j3P'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
			'banned_at' => gmdate('Y-m-d H:i:s'), 'banned_reason' => 'DNR',
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 114, 'givenName' => 'Royden', 'familyName' => 'Fagan',
			'preferredName' => 'Royden', 'phone1' => '0413 166 198', 'phone2' => '07 3299 4418',
			'address1' => '33 Minoa St', 'address2' => '',
			'locality' => 'Woodridge', 'state' => 'Qld', 'postcode' => '4114', 'country' => 'Australia',
			'emergencyContact' => 'Deanne Minniecon', 'emergencyPhone1' => '0423 072 836', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0, 'dnr' => 2020,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'heidi@eclecticdreams.com.au',
			'username' => 'heidi', 'password' => $security->generatePasswordHash('Y4Fg2joZm95nrKba'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 115, 'givenName' => 'Heidi', 'familyName' => 'Lawrence',
			'preferredName' => 'Heidi', 'phone1' => '0408 740 089', 'phone2' => '',
			'address1' => '14 Graham Dr', 'address2' => '',
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Het Warrell', 'emergencyPhone1' => '07 5493 7901', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lschofield007@gmail.com',
			'username' => 'lschofield007', 'password' => $security->generatePasswordHash('zRnKTzDZU9HFjbkY'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 116, 'givenName' => 'Lynette', 'familyName' => 'Schofield',
			'preferredName' => 'Leah', 'phone1' => '0429 680 656', 'phone2' => '',
			'address1' => '130 Havava Rd West', 'address2' => '',
			'locality' => 'Peregian Springs', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Aaron Thomas', 'emergencyPhone1' => '0411 136 925', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'eeco@bikerider.com',
			'username' => 'eeco', 'password' => $security->generatePasswordHash('DBAUuOHuRxt98Sq3'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 117, 'givenName' => 'Nerissa', 'familyName' => 'Dowling',
			'preferredName' => 'Neri/ Niz', 'phone1' => '0420 887 886', 'phone2' => '',
			'address1' => '46B Water St', 'address2' => '',
			'locality' => 'Caringbah South', 'state' => 'NSW', 'postcode' => '2229', 'country' => 'Australia',
			'emergencyContact' => 'Nerissa Dowling', 'emergencyPhone1' => '07 9523 7587', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'deanneminniecon@hotmail.com',
			'username' => 'deanneminniecon', 'password' => $security->generatePasswordHash('37XqNh1e0n5Nmri6'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 118, 'givenName' => 'Deanne', 'familyName' => 'Minniecon',
			'preferredName' => 'Deanne', 'phone1' => '0423 072 836', 'phone2' => '07 3299 4418',
			'address1' => '33 Minoa St', 'address2' => '',
			'locality' => 'Woodridge', 'state' => 'Qld', 'postcode' => '4114', 'country' => 'Australia',
			'emergencyContact' => 'Royden Fagan', 'emergencyPhone1' => '0413 166 198', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hannahcondie@gmail.com',
			'username' => 'hannahcondie', 'password' => $security->generatePasswordHash('tduNUDUSzAY2KJJq'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 119, 'givenName' => 'Hannah', 'familyName' => 'Condie',
			'preferredName' => 'Hannah', 'phone1' => '0475 523 301', 'phone2' => '',
			'address1' => '43C/23 Scholars Dr', 'address2' => '',
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Anne Pickering', 'emergencyPhone1' => '0400 181 107', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jenniharmony@hotmail.com',
			'username' => 'jenniharmony', 'password' => $security->generatePasswordHash('xlrCapudUyGFAEl5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 120, 'givenName' => 'Jenni', 'familyName' => 'Harmony',
			'preferredName' => 'Jenni', 'phone1' => '0435 128 421', 'phone2' => '07 5435 2357',
			'address1' => '11 Tamarind St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ernie Marcum', 'emergencyPhone1' => '0432 914 469', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jinnyzkec@outlook.com',
			'username' => 'jinnyzkec', 'password' => $security->generatePasswordHash('NfQzdOtMswLtdCLq'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
			'banned_at' => gmdate('Y-m-d H:i:s'), 'banned_reason' => 'DNR',
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 121, 'givenName' => 'Jeanette', 'familyName' => 'Roach',
			'preferredName' => 'Jinny', 'phone1' => '0481 122 173', 'phone2' => '',
			'address1' => '6A Myrtle St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kami Blok', 'emergencyPhone1' => '0423 796 845', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0, 'dnr' => 2020,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'damionwhite40@gmail.com',
			'username' => 'damionwhite40', 'password' => $security->generatePasswordHash('GLE6MqWd7xria0xS'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 122, 'givenName' => 'Damion', 'familyName' => 'Star',
			'preferredName' => 'Starman', 'phone1' => '', 'phone2' => '',
			'address1' => '44 Tamarind St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ode.c.smith@gmail.com',
			'username' => 'ode.c.smith', 'password' => $security->generatePasswordHash('wc9gPy01ZAsgHRp3'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 123, 'givenName' => 'Ode', 'familyName' => 'Claxton-Smith',
			'preferredName' => 'Ode', 'phone1' => '0467 753 705', 'phone2' => '',
			'address1' => 'Unit 2/1334 Landsborough-Maleny Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Smith', 'emergencyPhone1' => '0429 621 362', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ottolechner52@gmail.com',
			'username' => 'ottolechner52', 'password' => $security->generatePasswordHash('NxoeEQuvGexJHSFx'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 124, 'givenName' => 'Otto', 'familyName' => 'Lechner',
			'preferredName' => 'Otto', 'phone1' => '0412 273 211', 'phone2' => '07 5478 6818',
			'address1' => '18 Old Mill Lane', 'address2' => '',
			'locality' => 'Flaxton', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Phillipa Robertson', 'emergencyPhone1' => '0422 411 778', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'annicha09@gmail.com',
			'username' => 'annicha09', 'password' => $security->generatePasswordHash('SmFa0HfdVpNx1ptl'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 125, 'givenName' => 'Sonja', 'familyName' => 'Andrey',
			'preferredName' => 'Sonja', 'phone1' => '0433 804 389', 'phone2' => '',
			'address1' => 'Lot 25 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Rob Morrell', 'emergencyPhone1' => '07 5435 0142', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'atccontractors@hotmail.com',
			'username' => 'atccontractors', 'password' => $security->generatePasswordHash('NUa3QYxMzXi5hoZt'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 126, 'givenName' => 'Tim', 'familyName' => 'Clark',
			'preferredName' => 'Tim', 'phone1' => '0412 854 222', 'phone2' => '',
			'address1' => '651 Bald Knob Rd', 'address2' => '',
			'locality' => 'Bald Knob', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sharon Ward', 'emergencyPhone1' => '0411 856 877', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'shazward@hotmail.com.au',
			'username' => 'shazward', 'password' => $security->generatePasswordHash('996MNX82NlE0jtK5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 127, 'givenName' => 'Sharon', 'familyName' => 'Ward',
			'preferredName' => 'Sharon', 'phone1' => '0411 856 877', 'phone2' => '07 5429 6787',
			'address1' => '34 Water Gum Cres', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tim Clark', 'emergencyPhone1' => '0412 854 222', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sheiladuncan2010@hotmail.com',
			'username' => 'sheiladuncan2010', 'password' => $security->generatePasswordHash('Dv50xC7GPPKGPNcA'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 128, 'givenName' => 'Sheila', 'familyName' => 'Duncan',
			'preferredName' => 'Sheila', 'phone1' => '0459 453 358', 'phone2' => '',
			'address1' => '7 Russell St', 'address2' => '',
			'locality' => 'Caboolture', 'state' => 'Qld', 'postcode' => '4510', 'country' => 'Australia',
			'emergencyContact' => 'Heather Cameron', 'emergencyPhone1' => '07 5435 8978', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'iangordon2323@yahoo.com.au',
			'username' => 'iangordon2323', 'password' => $security->generatePasswordHash('UNUP3PzIFnPFfUwJ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 129, 'givenName' => 'Ian', 'familyName' => 'Hitchcock',
			'preferredName' => 'Ian', 'phone1' => '0435 872 411', 'phone2' => '',
			'address1' => '47 Scotts Rd', 'address2' => '',
			'locality' => 'Wootha', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Baden Hitchcock', 'emergencyPhone1' => '07 5492 4880', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lushcottage@gmail.com',
			'username' => 'lushcottage', 'password' => $security->generatePasswordHash('Xx4AdDYkqAy56Mma'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 130, 'givenName' => 'Lea', 'familyName' => 'Bracker',
			'preferredName' => 'Lea', 'phone1' => '0488 679 880', 'phone2' => '07 5499 9405',
			'address1' => '2/24 Teak St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sue Johnson', 'emergencyPhone1' => '0467 244 712', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'mochelle@acenet.net.au',
			'username' => 'mochelle', 'password' => $security->generatePasswordHash('4qW5RTXCRI9vC1hU'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 131, 'givenName' => 'Richard', 'familyName' => 'Mochelle',
			'preferredName' => 'Richard', 'phone1' => '07 5435 0378', 'phone2' => '',
			'address1' => 'Lot 7 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Sandra Ferguson', 'emergencyPhone1' => '07 5435 0378', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bdk.gardens@gmail.com',
			'username' => 'bdk.gardens', 'password' => $security->generatePasswordHash('AKlBZLMqXTNdNX0U'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 132, 'givenName' => 'Bruce', 'familyName' => 'King',
			'preferredName' => 'Bruce', 'phone1' => '0418 700 946', 'phone2' => '07 3285 6116',
			'address1' => '31 Rue Montaigne', 'address2' => '',
			'locality' => 'Petrie', 'state' => 'Qld', 'postcode' => '4502', 'country' => 'Australia',
			'emergencyContact' => 'Pauline King', 'emergencyPhone1' => '0418 700 986', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gaymliddington@gmail.com',
			'username' => 'gaymliddington', 'password' => $security->generatePasswordHash('pFXq638KJFiA1yrO'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 133, 'givenName' => 'Ben', 'familyName' => 'Lyne',
			'preferredName' => 'Ben', 'phone1' => '0478 065 063', 'phone2' => '',
			'address1' => '1965 Stanley River Rd', 'address2' => '',
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'annetterichardson27@gmail.com',
			'username' => 'annetterichardson27', 'password' => $security->generatePasswordHash('mnIHrJ46jFNO1RHc'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 134, 'givenName' => 'Annette', 'familyName' => 'Richardson',
			'preferredName' => 'Annie', 'phone1' => '0409 125 779', 'phone2' => '',
			'address1' => '62 Burgum Rd', 'address2' => '',
			'locality' => 'North Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gabby Jackson', 'emergencyPhone1' => '0417 337 234', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'david.crowden.music@gmail.com',
			'username' => 'david.crowden.music', 'password' => $security->generatePasswordHash('AdeblKYlsIXisVQ7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 135, 'givenName' => 'David', 'familyName' => 'Crowden',
			'preferredName' => 'David', 'phone1' => '0457 311 388', 'phone2' => '07 5429 6653',
			'address1' => '498 Mountain View Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrew Crowden', 'emergencyPhone1' => '0429 801 465', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tneira@gmail.com',
			'username' => 'tneira', 'password' => $security->generatePasswordHash('TJE0GhRoZwEt3dy5'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 136, 'givenName' => 'Tom S Pablo', 'familyName' => 'Neira Iturrieta',
			'preferredName' => 'Tom S', 'phone1' => '0452 259 280', 'phone2' => '',
			'address1' => '251 Bridge Creek Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kamala Alister', 'emergencyPhone1' => '0400 222 887', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'stuart452@gmail.com',
			'username' => 'stuart452', 'password' => $security->generatePasswordHash('S1OGhGvcnK6MRPqr'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 137, 'givenName' => 'Stuart', 'familyName' => 'Duncan',
			'preferredName' => 'Stu', 'phone1' => '0434 406 591', 'phone2' => '07 5435 2556',
			'address1' => '9 Mclean Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Duncan', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'elleamani@gmail.com',
			'username' => 'elleamani', 'password' => $security->generatePasswordHash('C2ckpqa4v3Rv0YVo'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 138, 'givenName' => 'Elle', 'familyName' => 'Hughes',
			'preferredName' => 'Elle', 'phone1' => '0425 151 788', 'phone2' => '',
			'address1' => '43 Stanley River Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suzannemm01@gmail.com',
			'username' => 'suzannemm01', 'password' => $security->generatePasswordHash('YqlvkE7z37qXzPfs'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 139, 'givenName' => 'Suzanne', 'familyName' => 'Mustard',
			'preferredName' => 'Suzanne', 'phone1' => '0414 388 499', 'phone2' => '07 5435 2048',
			'address1' => '21 Mary Cairncross Ave', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jeff Mustard', 'emergencyPhone1' => '0405 182 796', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'snovak@raq.org.au',
			'username' => 'snovak', 'password' => $security->generatePasswordHash('yH1SMg8fZnlIKg9i'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 140, 'givenName' => 'Steven', 'familyName' => 'Novak',
			'preferredName' => 'Steve', 'phone1' => '0431 925 771', 'phone2' => '',
			'address1' => '11 Davis St', 'address2' => '',
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Eileen Gilbert', 'emergencyPhone1' => '0413 223 090', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'coughlanpa@yahoo.com.au',
			'username' => 'coughlanpa', 'password' => $security->generatePasswordHash('hmqjTiu8w8ooPFTs'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 141, 'givenName' => 'Paul', 'familyName' => 'Coughlan',
			'preferredName' => 'Paul', 'phone1' => '0438 111 525', 'phone2' => '07 5400 1643',
			'address1' => '7/52 School Rd', 'address2' => '',
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => 'Joan Coughlan', 'emergencyPhone1' => '07 5494 7498', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lachlan.smith184@hotmail.com',
			'username' => 'lachlan.smith184', 'password' => $security->generatePasswordHash('jv7FKqqLPLDtt6RO'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 142, 'givenName' => 'Lachlan', 'familyName' => 'Smith',
			'preferredName' => 'Lachi', 'phone1' => '0413 221 798', 'phone2' => '',
			'address1' => '32 Tallebudgera Dr', 'address2' => '',
			'locality' => 'Palm Beach', 'state' => 'Qld', 'postcode' => '4221', 'country' => 'Australia',
			'emergencyContact' => 'Belinda Hodgkins', 'emergencyPhone1' => '0448 855 204', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'vparl1@yahoo.com.au',
			'username' => 'vparl1', 'password' => $security->generatePasswordHash('Jjtqyv5jHn0XUlTP'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 143, 'givenName' => 'Vanessa', 'familyName' => 'Parle',
			'preferredName' => 'Vanessa', 'phone1' => '0434 997 575', 'phone2' => '',
			'address1' => 'PO Box 617', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Amanda Parle', 'emergencyPhone1' => '07 4630 3843', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ecmod123@gmail.com',
			'username' => 'ecmod123', 'password' => $security->generatePasswordHash('5kBeJu4LJ97t9eQZ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 144, 'givenName' => 'Ernest', 'familyName' => 'Marcum',
			'preferredName' => 'Ernie', 'phone1' => '0432 914 469', 'phone2' => '07 5435 2357',
			'address1' => '11 Tamarind St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jenni Harmony', 'emergencyPhone1' => '0435 128 421', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jem_laur@hotmail.com',
			'username' => 'jem_laur', 'password' => $security->generatePasswordHash('RKFVgRAk6Aid4MWE'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 145, 'givenName' => 'Jemma', 'familyName' => 'Laurie',
			'preferredName' => 'Jemma', 'phone1' => '0423 138 837', 'phone2' => '',
			'address1' => '21 Ballybritt St', 'address2' => '',
			'locality' => 'The Gap', 'state' => 'Qld', 'postcode' => '4061', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'emmasheppard1984@yahoo.co.uk',
			'username' => 'emmasheppard1984', 'password' => $security->generatePasswordHash('I3SbTuVMumwZhBj2'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 146, 'givenName' => 'Emma', 'familyName' => 'Sheppard',
			'preferredName' => 'Emma', 'phone1' => '0435 840 991', 'phone2' => '',
			'address1' => '99 Weller Rd', 'address2' => '',
			'locality' => 'Tarragindi', 'state' => 'Qld', 'postcode' => '4121', 'country' => 'Australia',
			'emergencyContact' => 'Matthew Sheppard', 'emergencyPhone1' => '0478 592 543', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'morgan.mchugh@hotmail.com',
			'username' => 'morgan.mchugh', 'password' => $security->generatePasswordHash('trK1ApJHziXFU9Ff'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 147, 'givenName' => 'Morgan', 'familyName' => 'McHugh',
			'preferredName' => 'Morgan', 'phone1' => '0423 180 522', 'phone2' => '',
			'address1' => '108 Schultz Rd', 'address2' => '',
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Kim Brooks', 'emergencyPhone1' => '0414 623 734', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jannyduff@gmail.com',
			'username' => 'jannyduff', 'password' => $security->generatePasswordHash('MrrxUJJzIBYmdCe7'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 148, 'givenName' => 'Jan', 'familyName' => 'Duffield',
			'preferredName' => 'Jan', 'phone1' => '0427 834 649', 'phone2' => '07 5429 6570',
			'address1' => '68A Palm St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jon Woodlands', 'emergencyPhone1' => '07 5429 6570', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'keirapeace1@bigpond.com',
			'username' => 'keirapeace1', 'password' => $security->generatePasswordHash('bcx7ObK4Fk23yl6D'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 149, 'givenName' => 'Keira', 'familyName' => 'Peace',
			'preferredName' => 'Keira', 'phone1' => '0459 175 111', 'phone2' => '07 5494 4518',
			'address1' => 'Lot xx Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jadeconboy@hotmail.com',
			'username' => 'jadeconboy', 'password' => $security->generatePasswordHash('24om8hf8xHkqZUgY'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 150, 'givenName' => 'Jade', 'familyName' => 'Nicole',
			'preferredName' => 'Jade', 'phone1' => '0450 979 939', 'phone2' => '',
			'address1' => '', 'address2' => '',
			'locality' => 'Kenilworth', 'state' => 'Qld', 'postcode' => '4574', 'country' => 'Australia',
			'emergencyContact' => 'Shaun', 'emergencyPhone1' => '0450 979 939', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jennyangel89@hotmail.com',
			'username' => 'jennyangel89', 'password' => $security->generatePasswordHash('eIrobxrlk3aldM42'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 151, 'givenName' => 'Jennifer', 'familyName' => 'Smith',
			'preferredName' => 'Jenny', 'phone1' => '0414 976 319', 'phone2' => '',
			'address1' => '26 Peninsular Dr', 'address2' => '',
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Daniel Giles', 'emergencyPhone1' => '0415 529 413', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'staceyfamily@hotmail.com',
			'username' => 'staceyfamily', 'password' => $security->generatePasswordHash('DstemqNyuiBfdn7m'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 152, 'givenName' => 'Danielle', 'familyName' => 'Thomson',
			'preferredName' => 'Danielle', 'phone1' => '0452 389 424', 'phone2' => '',
			'address1' => '8 Chantilly Cres', 'address2' => '',
			'locality' => 'Beerwah', 'state' => 'Qld', 'postcode' => '4519', 'country' => 'Australia',
			'emergencyContact' => 'Chloe Stacey', 'emergencyPhone1' => '0473 929 188', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'pomei2888@gmail.com',
			'username' => 'pomei2888', 'password' => $security->generatePasswordHash('Gek7QNTLLX4MTdU6'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 153, 'givenName' => 'Po Me', 'familyName' => 'Kwong',
			'preferredName' => 'Pomei (Paul May)', 'phone1' => '07 5435 0288', 'phone2' => '',
			'address1' => 'Lot 38 Crystal Waters', 'address2' => '65 Kilcoy Lane',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Silvia Chan', 'emergencyPhone1' => '0408 781 304', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ali.maclean@hotmail.com',
			'username' => 'ali.maclean', 'password' => $security->generatePasswordHash('D3UqFLjdihtJpUzD'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 154, 'givenName' => 'Alison', 'familyName' => 'MacLean',
			'preferredName' => 'Ali', 'phone1' => '0429 988 100', 'phone2' => '',
			'address1' => '3 Lark Circuit', 'address2' => '',
			'locality' => 'Mountain Creek', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Sam Maclean', 'emergencyPhone1' => '07 4654 8067', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'georgia_sykes@hotmail.com',
			'username' => 'georgia_sykes', 'password' => $security->generatePasswordHash('jfARFicB2qKmAlNv'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 155, 'givenName' => 'Georgia', 'familyName' => 'Sykes',
			'preferredName' => 'Georgia', 'phone1' => '0439 986 960', 'phone2' => '',
			'address1' => '3 Naroo Ct', 'address2' => '',
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Kerry Lade', 'emergencyPhone1' => '0488 636 311', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'claudia.oberholzer@yahoo.com.au',
			'username' => 'claudia.oberholzer', 'password' => $security->generatePasswordHash('BVHgRj2VXreMGxWI'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 156, 'givenName' => 'Claudia', 'familyName' => 'Oberholzer',
			'preferredName' => 'Claudia', 'phone1' => '0448 847 290', 'phone2' => '',
			'address1' => '7 Juan St', 'address2' => '',
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Lucas Neilsen', 'emergencyPhone1' => '0428 158 609', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'l_n022@student.usc.edu.au',
			'username' => 'l_n022', 'password' => $security->generatePasswordHash('bvj9ZyrrtoT0bxBB'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 157, 'givenName' => 'Levi', 'familyName' => 'Needham',
			'preferredName' => 'Levi/Levius/ Pedro', 'phone1' => '0409 619 333', 'phone2' => '',
			'address1' => '87 Creekside Rd', 'address2' => '',
			'locality' => 'Sippy Downs', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Madonna Bryant', 'emergencyPhone1' => '0402 564 162', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'om3gad@hotmail.com',
			'username' => 'om3gad', 'password' => $security->generatePasswordHash('XlEutDUroh6oKuhE'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 158, 'givenName' => 'Daniel', 'familyName' => 'Giles',
			'preferredName' => 'Dan', 'phone1' => '0415 529 413', 'phone2' => '',
			'address1' => '26 Peninsular Dr', 'address2' => '',
			'locality' => 'Surfers Paradise', 'state' => 'Qld', 'postcode' => '4217', 'country' => 'Australia',
			'emergencyContact' => 'Jenny Smith', 'emergencyPhone1' => '0414 976 319', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'barbie.dee@hotmail.com.au',
			'username' => 'barbie.dee', 'password' => $security->generatePasswordHash('Q0lD0mPPhsklXKUX'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 159, 'givenName' => 'Barbara', 'familyName' => 'Dancey',
			'preferredName' => 'Barb', 'phone1' => '0437 766 659', 'phone2' => '',
			'address1' => '34 Water Gum Cres', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Tamara Tilling', 'emergencyPhone1' => '0428 821 575', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'dicollier@hotmail.com',
			'username' => 'dicollier', 'password' => $security->generatePasswordHash('bNuX7yBCSayIVLyV'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 160, 'givenName' => 'Dianne', 'familyName' => 'Collier',
			'preferredName' => 'Di', 'phone1' => '07 5494 4552', 'phone2' => '',
			'address1' => '430 Policeman Spur Rd', 'address2' => '',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Zahra Chaudhry', 'emergencyPhone1' => '07 5494 4552', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'soula.giannitis@yahoo.com',
			'username' => 'soula.giannitis', 'password' => $security->generatePasswordHash('1L1kTuMmaIAmyRN1'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 161, 'givenName' => 'Soula', 'familyName' => 'Giannitis',
			'preferredName' => 'Soula', 'phone1' => '0416 578 771', 'phone2' => '',
			'address1' => '6 Pacey St', 'address2' => '',
			'locality' => 'Eumundi', 'state' => 'Qld', 'postcode' => '4562', 'country' => 'Australia',
			'emergencyContact' => 'Guenara Meril', 'emergencyPhone1' => '0481 088 853', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'bushy.bensheppard@gmail.com',
			'username' => 'bushy.bensheppard', 'password' => $security->generatePasswordHash('KYVwgLj9xXr5Pi79'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 162, 'givenName' => 'Ben', 'familyName' => 'Sheppard',
			'preferredName' => 'Ben', 'phone1' => '0447 154 580', 'phone2' => '',
			'address1' => '40 Victoria St', 'address2' => '',
			'locality' => 'Kelvin Grove', 'state' => 'Qld', 'postcode' => '4059', 'country' => 'Australia',
			'emergencyContact' => 'Derek & Jo Sheppard', 'emergencyPhone1' => '07 5441 3275', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fruityjune2@gmail.com',
			'username' => 'fruityjune2', 'password' => $security->generatePasswordHash('eWhdx3EIxPpJM69C'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 163, 'givenName' => 'June', 'familyName' => 'Doyle',
			'preferredName' => 'June', 'phone1' => '0422 617 365', 'phone2' => '',
			'address1' => 'PO Box 664', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gay Liddington', 'emergencyPhone1' => '0424 379 338', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'hlangfield1@gmail.com',
			'username' => 'hlangfield1', 'password' => $security->generatePasswordHash('dWBoeFUJiYAKKHPC'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 164, 'givenName' => 'Holly', 'familyName' => 'Langfield',
			'preferredName' => 'Holly', 'phone1' => '0427 112 174', 'phone2' => '',
			'address1' => '111/15 Esplanade', 'address2' => '',
			'locality' => 'Bulcock Beach', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tosh Broom', 'emergencyPhone1' => '07 5429 6502', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'christine55g@optusnet.com.au',
			'username' => 'christine55g', 'password' => $security->generatePasswordHash('mvrNnUyFIOvYAqDe'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 165, 'givenName' => 'Christine', 'familyName' => 'Golab',
			'preferredName' => 'Christine', 'phone1' => '0429 872 268', 'phone2' => '',
			'address1' => '21 Coolana St', 'address2' => '',
			'locality' => 'Lota', 'state' => 'Qld', 'postcode' => '4179', 'country' => 'Australia',
			'emergencyContact' => 'Dave Cleary', 'emergencyPhone1' => '0408 654 807', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'liana.vermast.95@live.com.au',
			'username' => 'liana.vermast.95', 'password' => $security->generatePasswordHash('9OOUS84drdle5k4y'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 166, 'givenName' => 'Liana', 'familyName' => 'Vermast',
			'preferredName' => 'Liana', 'phone1' => '0403 436 068', 'phone2' => '',
			'address1' => '27 Koala Ct', 'address2' => '',
			'locality' => 'Little Mountain', 'state' => 'Qld', 'postcode' => '4551', 'country' => 'Australia',
			'emergencyContact' => 'Tanya Vermast', 'emergencyPhone1' => '0412 866 401', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'leeza@peacockpaper.com.au',
			'username' => 'leeza', 'password' => $security->generatePasswordHash('o9a2RkXkPRqYnNFo'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 167, 'givenName' => 'Leeza', 'familyName' => 'Stratford',
			'preferredName' => 'Leeza', 'phone1' => '0408 065 110', 'phone2' => '',
			'address1' => '464 Maleny-Kenilworth Rd', 'address2' => '',
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Paul Stratford', 'emergencyPhone1' => '0417 643 988', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'chris_riordan@hotmail.com',
			'username' => 'chris_riordan', 'password' => $security->generatePasswordHash('5jzZTOwxZgINEb3n'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 168, 'givenName' => 'Christine', 'familyName' => 'Riordan',
			'preferredName' => 'Chris', 'phone1' => '0421 173 868', 'phone2' => '07 4124 2432',
			'address1' => '43 Long St', 'address2' => '',
			'locality' => 'Point Vernon', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Joan Chenery', 'emergencyPhone1' => '0438 401 828', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tammynyree@hotmail.com',
			'username' => 'tammynyree', 'password' => $security->generatePasswordHash('QsV4BXZ7k8rXLAJK'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 169, 'givenName' => 'Tammy', 'familyName' => 'Walker',
			'preferredName' => 'Tam', 'phone1' => '0447 353 109', 'phone2' => '',
			'address1' => '5/12 Rakumba Pl', 'address2' => '',
			'locality' => 'Mountain Creek', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Vicki Mitchell', 'emergencyPhone1' => '0405 156 846', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'contact.ntn@gmail.com',
			'username' => 'contact.ntn', 'password' => $security->generatePasswordHash('3lb9A1nC1FSggk39'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 170, 'givenName' => 'Tyrone', 'familyName' => 'Evans',
			'preferredName' => 'Ty', 'phone1' => '0420 308 897', 'phone2' => '',
			'address1' => '5 Hovea Ct', 'address2' => '',
			'locality' => 'Shailer Park', 'state' => 'Qld', 'postcode' => '4128', 'country' => 'Australia',
			'emergencyContact' => 'Gordon', 'emergencyPhone1' => '0428 787 079', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'jordan.austin27@gmail.com',
			'username' => 'jordan.austin27', 'password' => $security->generatePasswordHash('TggjYSlfn9qTA7tq'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 171, 'givenName' => 'Jordan', 'familyName' => 'Austin',
			'preferredName' => 'Jordan', 'phone1' => '0457 269 350', 'phone2' => '',
			'address1' => '26 Gympie Rd', 'address2' => '',
			'locality' => 'Tin Can Bay', 'state' => 'Qld', 'postcode' => '4580', 'country' => 'Australia',
			'emergencyContact' => 'Cinda Austin', 'emergencyPhone1' => '0428 583 727', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fun@playlearnplay.com.au',
			'username' => 'fun', 'password' => $security->generatePasswordHash('EPZX1d1xlJjaLPa1'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 172, 'givenName' => 'Callie', 'familyName' => 'Fitzgibbon',
			'preferredName' => 'Victoria', 'phone1' => '0455 304 313', 'phone2' => '07 5494 3220',
			'address1' => 'PO Box 824', 'address2' => '',
			'locality' => '', 'state' => '', 'postcode' => '', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0455 304 313', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'gnott47@gmail.com',
			'username' => 'gnott47', 'password' => $security->generatePasswordHash('mAICF8bKZHFuGMVG'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 173, 'givenName' => 'Graham', 'familyName' => 'Nott',
			'preferredName' => 'Graham', 'phone1' => '0419 020 868', 'phone2' => '07 5494 2343',
			'address1' => '314 Burgum Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'chevera1950@hotmail.com',
			'username' => 'chevera1950', 'password' => $security->generatePasswordHash('tNYWSGnONNGMpSzM'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 174, 'givenName' => 'Carlos', 'familyName' => 'Sanchez',
			'preferredName' => 'Carlos', 'phone1' => '0405 563 749', 'phone2' => '07 5445 9417',
			'address1' => '189 Lower Landershoot Rd', 'address2' => '',
			'locality' => 'Landers Shoot', 'state' => 'Qld', 'postcode' => '4555', 'country' => 'Australia',
			'emergencyContact' => 'Paco Sanchez', 'emergencyPhone1' => '0455 500 223', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'callingdave@hotmail.com',
			'username' => 'callingdave', 'password' => $security->generatePasswordHash('s0ZhMs6Um9WE1yXS'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 175, 'givenName' => 'David', 'familyName' => 'Handley',
			'preferredName' => 'Dave', 'phone1' => '0417 130 556', 'phone2' => '',
			'address1' => '73 Mountain View Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Diane', 'emergencyPhone1' => '0438 538 389', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'diane.somers-cook@bigpond.com',
			'username' => 'diane.somers-cook', 'password' => $security->generatePasswordHash('46epXpjIdDYohGvR'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 176, 'givenName' => 'Diane', 'familyName' => 'Somers-Cook',
			'preferredName' => 'Diane', 'phone1' => '0438 538 389', 'phone2' => '',
			'address1' => 'C/- 13 Cedar Grove Ct', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'David Handley', 'emergencyPhone1' => '0417 130 556', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'nemiliajohnstone@gmail.com',
			'username' => 'nemiliajohnstone', 'password' => $security->generatePasswordHash('OnbtyChYxouPJ1V9'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 177, 'givenName' => 'Ninindi', 'familyName' => 'Johnstone',
			'preferredName' => 'Ninindi', 'phone1' => '0499 983 902', 'phone2' => '',
			'address1' => '23 Coral St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Yughali', 'emergencyPhone1' => '0490 178 867', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'nicolebachler@live.com.au',
			'username' => 'nicolebachler', 'password' => $security->generatePasswordHash('rX271M21Djv0Gbir'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 178, 'givenName' => 'Nicole', 'familyName' => 'Bachler',
			'preferredName' => 'Nicole', 'phone1' => '0422 506 824', 'phone2' => '',
			'address1' => '1734 David Low Way', 'address2' => '',
			'locality' => 'Coolum Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Ray Bachler', 'emergencyPhone1' => '0418 782 0300?', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'lark19@live.com.au',
			'username' => 'lark19', 'password' => $security->generatePasswordHash('QEyEDhCcblbGRul4'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 179, 'givenName' => 'Lyndelle', 'familyName' => 'Lark',
			'preferredName' => 'Lyndelle', 'phone1' => '0425 393 014', 'phone2' => '',
			'address1' => '1/252 Alexandra Pde', 'address2' => '',
			'locality' => 'Alexandra Headland', 'state' => 'Qld', 'postcode' => '4572', 'country' => 'Australia',
			'emergencyContact' => 'Michael Recchia', 'emergencyPhone1' => '0410 258 802', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'angus.rotherham@live.com',
			'username' => 'angus.rotherham', 'password' => $security->generatePasswordHash('okFCoSSSFlFkpPgd'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 180, 'givenName' => 'Angus', 'familyName' => 'Rotherham',
			'preferredName' => 'Angus', 'phone1' => '0434 876 885', 'phone2' => '',
			'address1' => '6 Carapook Cres', 'address2' => '',
			'locality' => 'Tallebudgera', 'state' => 'Qld', 'postcode' => '4228', 'country' => 'Australia',
			'emergencyContact' => 'Dave Rotherham', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'nikkoraffin@hotmail.com',
			'username' => 'nikkoraffin', 'password' => $security->generatePasswordHash('jpUw1fXLIdBdurFJ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
			'banned_at' => gmdate('Y-m-d H:i:s'), 'banned_reason' => 'DNR',
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 181, 'givenName' => 'Nikko', 'familyName' => 'Raffin',
			'preferredName' => 'Nikko', 'phone1' => '0434 004 069', 'phone2' => '',
			'address1' => '12A Myrtle St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0, 'dnr' => 2020,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'maxinesmith61@hotmail.com',
			'username' => 'maxinesmith61', 'password' => $security->generatePasswordHash('HskllhUBDlkMeoNw'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 182, 'givenName' => 'Maxine', 'familyName' => 'Smith',
			'preferredName' => 'Maxine', 'phone1' => '0402 202 897', 'phone2' => '',
			'address1' => '200 Petrie Creek Rd', 'address2' => '',
			'locality' => 'Rosemount', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Hannah Fabian', 'emergencyPhone1' => '0423 389 972', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'poweritdown@hotmail.com',
			'username' => 'poweritdown', 'password' => $security->generatePasswordHash('1qJ7z5gUsOtBX3MN'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 183, 'givenName' => 'Kevin', 'familyName' => 'Timney',
			'preferredName' => 'Kevin', 'phone1' => '0458 274 128', 'phone2' => '',
			'address1' => '200 Petrie Creek Rd', 'address2' => '',
			'locality' => 'Rosemount', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => 'Maxine Smith', 'emergencyPhone1' => '0402 202 897', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'peta.goold@me.com',
			'username' => 'peta.goold', 'password' => $security->generatePasswordHash('J7lblpKp5dGsC7xa'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 184, 'givenName' => 'Peta', 'familyName' => 'Goold',
			'preferredName' => 'Peta', 'phone1' => '0474 788 540', 'phone2' => '',
			'address1' => '24 Cedar Grove Ct', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Liz Goold', 'emergencyPhone1' => '07 5426 0100', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'aquatic.antara@gmail.com',
			'username' => 'aquatic.antara', 'password' => $security->generatePasswordHash('vEmedelCkeb7tCoQ'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 185, 'givenName' => 'Antara', 'familyName' => 'May',
			'preferredName' => 'Antara', 'phone1' => '0499 731 666', 'phone2' => '07 5313 8333',
			'address1' => '390 Scotts Rd', 'address2' => '',
			'locality' => 'Booroobin', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Josh May', 'emergencyPhone1' => '0438 988 871', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'matdie@hotmail.com',
			'username' => 'matdie', 'password' => $security->generatePasswordHash('1h9YOew9y55glFnd'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 186, 'givenName' => 'Matthew', 'familyName' => 'Gillis',
			'preferredName' => 'Matt', 'phone1' => '0475 795 939', 'phone2' => '',
			'address1' => '5 Adriano Ct', 'address2' => '',
			'locality' => 'Palmview', 'state' => 'Qld', 'postcode' => '4553', 'country' => 'Australia',
			'emergencyContact' => 'Fiona Croft', 'emergencyPhone1' => '0417 992 086', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'yvonne.dipold@gmail.com',
			'username' => 'yvonne.dipold', 'password' => $security->generatePasswordHash('78p56Cyq4EdmLkHN'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 187, 'givenName' => 'Yvonne', 'familyName' => 'Dipold',
			'preferredName' => 'Moonbeam', 'phone1' => '0473 631 852', 'phone2' => '',
			'address1' => '4/1 Cherry St', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Andrea Dipold', 'emergencyPhone1' => '0409 463 674', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'suewashere@hotmail.com',
			'username' => 'suewashere', 'password' => $security->generatePasswordHash('VE6guNqLQdn5MsSO'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 188, 'givenName' => 'Susan', 'familyName' => 'Haley',
			'preferredName' => 'Sue', 'phone1' => '0417 635 703', 'phone2' => '07 3366 9078',
			'address1' => '1 Parkland Ct', 'address2' => '',
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Keith Haley', 'emergencyPhone1' => '0408 981 590', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'catt8151@gmail.com',
			'username' => 'catt8151', 'password' => $security->generatePasswordHash('JHuozY2GnvLDJbbv'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 189, 'givenName' => 'Catherine', 'familyName' => 'Elder',
			'preferredName' => 'Cat', 'phone1' => '0477 950 876', 'phone2' => '',
			'address1' => '45 Mary Cairncross Ave', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ally Walters', 'emergencyPhone1' => '', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 1,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'psmithcontact@gmail.com',
			'username' => 'psmithcontact', 'password' => $security->generatePasswordHash('gNnrrDUtoepeQev2'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 190, 'givenName' => 'Pam', 'familyName' => 'Smith',
			'preferredName' => 'Pam', 'phone1' => '0410 405 029', 'phone2' => '',
			'address1' => '540 Reeseville Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ian Smith', 'emergencyPhone1' => '0410 405 029', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'thripence44@gmail.com',
			'username' => 'thripence44', 'password' => $security->generatePasswordHash('rjUgkafeluSLWoeL'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 191, 'givenName' => 'Patricia', 'familyName' => 'Morgan',
			'preferredName' => 'Thripence', 'phone1' => '0421 181 195', 'phone2' => '',
			'address1' => 'Site 213/1 Diura St', 'address2' => '',
			'locality' => 'Maroochydore', 'state' => 'Qld', 'postcode' => '4558', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0408 801 255', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'smbrown@pghbricks.com.au',
			'username' => 'smbrown', 'password' => $security->generatePasswordHash('NnxOQqdQUg1skhqP'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 192, 'givenName' => 'Susan M', 'familyName' => 'Brown',
			'preferredName' => 'Susan', 'phone1' => '0434 940 795', 'phone2' => '07 5478 2873',
			'address1' => '5/19 Akeringa Pl', 'address2' => '',
			'locality' => 'Mooloolaba', 'state' => 'Qld', 'postcode' => '4557', 'country' => 'Australia',
			'emergencyContact' => 'Suzanne Chumbley', 'emergencyPhone1' => '0428 745 498', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'kerryannebourke@gmail.com',
			'username' => 'kerryannebourke', 'password' => $security->generatePasswordHash('ec70DH8llXovrzv8'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 193, 'givenName' => 'Kerry-Anne', 'familyName' => 'Bourke',
			'preferredName' => 'Kerry-Anne', 'phone1' => '0402 139 944', 'phone2' => '07 3161 9683',
			'address1' => 'PO Box 7748', 'address2' => '',
			'locality' => 'East Brisbane', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Narith', 'emergencyPhone1' => '07 3161 9683', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ianbbrady@gmail.com',
			'username' => 'ianbbrady', 'password' => $security->generatePasswordHash('QJ61lY3NC55PpDoR'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 194, 'givenName' => 'Ian', 'familyName' => 'Brady',
			'preferredName' => 'Ian', 'phone1' => '0400 276 110', 'phone2' => '07 3161 9683',
			'address1' => 'C/- PO Box 7748', 'address2' => '',
			'locality' => 'East Brisbane', 'state' => 'Qld', 'postcode' => '4169', 'country' => 'Australia',
			'emergencyContact' => 'Kevin Narith', 'emergencyPhone1' => '07 3161 9683', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marian@keystonearchitects.com',
			'username' => 'marian', 'password' => $security->generatePasswordHash('23NdH2ncqvWMNFPD'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 195, 'givenName' => 'Marian', 'familyName' => 'Graham',
			'preferredName' => 'Marian', 'phone1' => '0427 769 727', 'phone2' => '',
			'address1' => '43 East St', 'address2' => '',
			'locality' => 'Scarness', 'state' => 'Qld', 'postcode' => '4655', 'country' => 'Australia',
			'emergencyContact' => 'Joan Chenery', 'emergencyPhone1' => '0438 401 828', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'ellcee8@yahoo.com',
			'username' => 'ellcee8', 'password' => $security->generatePasswordHash('g0dTmrjeCMhV4RPH'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 196, 'givenName' => 'Leanne', 'familyName' => 'Philipcollins',
			'preferredName' => 'Lea', 'phone1' => '0409 753 790', 'phone2' => '',
			'address1' => '565 Maleny-Montville Rd', 'address2' => '',
			'locality' => 'Balmoral Ridge', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Gavan McKew', 'emergencyPhone1' => '0439 856 890', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'fiona.cooke92@gmail.com',
			'username' => 'fiona.cooke92', 'password' => $security->generatePasswordHash('mB6ZUgATlZRQka1Y'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 197, 'givenName' => 'Fiona', 'familyName' => 'Cooke',
			'preferredName' => 'Fiona', 'phone1' => '0402 360 444', 'phone2' => '',
			'address1' => '5/105 Vernon St', 'address2' => '',
			'locality' => 'Nundah', 'state' => 'Qld', 'postcode' => '4012', 'country' => 'Australia',
			'emergencyContact' => 'Erica', 'emergencyPhone1' => '0432 339 727', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'tracylewis007@live.com',
			'username' => 'tracylewis007', 'password' => $security->generatePasswordHash('FtkUxnBgbiPuc8YK'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 198, 'givenName' => 'Gillian Tracy', 'familyName' => 'Lewis',
			'preferredName' => 'Tracy', 'phone1' => '0476 961 932', 'phone2' => '',
			'address1' => '10/4 Meadow Lane', 'address2' => '',
			'locality' => 'Conondale', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Steve Markham', 'emergencyPhone1' => '0417 638 636', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1,
			'discovery' => 'Previous Volunteer', 'returned' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'marggrace@gmail.com',
			'username' => 'marggrace', 'password' => $security->generatePasswordHash('kRw3psaGnN8cltKe'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 199, 'givenName' => 'Margaret', 'familyName' => 'Grace',
			'preferredName' => 'Margaret', 'phone1' => '0417 724 253', 'phone2' => '07 5477 1770',
			'address1' => '6 Timbertop St', 'address2' => '',
			'locality' => 'Buderim', 'state' => 'Qld', 'postcode' => '4556', 'country' => 'Australia',
			'emergencyContact' => 'Nicholas Hendry', 'emergencyPhone1' => '0413 333 569', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
			'discovery' => 'Previous Volunteer', 'returned' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%user}}', [
			'role_id' => 3, 'email' => 'sjoyce1@bordernet.com.au',
			'username' => 'sjoyce1', 'password' => $security->generatePasswordHash('UQizMOgMDFzZIzSv'),
			'status' => 1, 'created_at' => gmdate('Y-m-d H:i:s'),
			'access_token' => $security->generateRandomString(),
			'auth_key' => $security->generateRandomString(),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 200, 'givenName' => 'Shane', 'familyName' => 'Joyce',
			'preferredName' => 'Shane', 'phone1' => '0428 931 880', 'phone2' => '',
			'address1' => '252 Mudlo Rd', 'address2' => '',
			'locality' => 'Kilkivan', 'state' => 'Qld', 'postcode' => '4600', 'country' => 'Australia',
			'emergencyContact' => 'Pomei Kwong', 'emergencyPhone1' => '07 5435 0288', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0, 'ohs' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0,
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
