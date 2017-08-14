<?php

use yii\db\Schema;

class m170806_033039_add_new_vollies extends \yii\db\Migration
{
	public function safeUp()
	{
		$security = Yii::$app->security;
		$this->insert('{{%user}}', [
			'email' => 'daryl.williams@fandangleproductions.com', 'username' => 'daryl.williams',
			'password_hash' => $security->generatePasswordHash('XjB0MZ9q8W2cQ5Ac0iyn'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 423, 'givenName' => 'Daryl', 'familyName' => 'Williams', 'preferredName' => 'Daryl',
			'phone1' => '0414 422 919', 'phone2' => '02 4244 8445',
			'address1' => '69 Lower Mt Mellum Rd', 'address2' => '',
			'locality' => 'Landsborough', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Nicholas Kirk', 'emergencyPhone1' => '0409 241 916', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Facebook', 'discoveryDetail' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'anita.clarke@optusnet.com.au', 'username' => 'anita.clarke',
			'password_hash' => $security->generatePasswordHash('2xrzXwprS6VX2pHDEhsW'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 424, 'givenName' => 'Anita', 'familyName' => 'Clarke', 'preferredName' => 'Anita',
			'phone1' => '0419 579 576', 'phone2' => '02 4244 8445',
			'address1' => '4/18 Park Ave', 'address2' => '',
			'locality' => 'Auchenflower', 'state' => 'Qld', 'postcode' => '4066', 'country' => 'Australia',
			'emergencyContact' => 'Denise Libien', 'emergencyPhone1' => '0402 744 106', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Friend', 'discoveryDetail' => 'and Facebook',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'crystal.bales08@hotmail.com', 'username' => 'crystal.bales08',
			'password_hash' => $security->generatePasswordHash('KN5yhFZ9MsxcpJetCEzu'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 425, 'givenName' => 'Crystal', 'familyName' => 'Bales', 'preferredName' => 'Crystal',
			'phone1' => '0423 294 074', 'phone2' => '',
			'address1' => '31 Karumba St', 'address2' => '',
			'locality' => 'Warana', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Marie Lombard', 'emergencyPhone1' => '0416 963 163', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Friend', 'discoveryDetail' => 'My friend Kanani sent me the link',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'kananitia@hotmail.com', 'username' => 'kananitia',
			'password_hash' => $security->generatePasswordHash('7cQ3kJXxarU5s9M5cx2R'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 426, 'givenName' => 'Kanani', 'familyName' => 'Lyall', 'preferredName' => 'Kanani',
			'phone1' => '0420 804 050', 'phone2' => '',
			'address1' => '9 Mulgani St', 'address2' => '',
			'locality' => 'Warana', 'state' => 'Qld', 'postcode' => '4575', 'country' => 'Australia',
			'emergencyContact' => 'Helen Lyall', 'emergencyPhone1' => '0421 087 042', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 1, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Friend', 'discoveryDetail' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'mig.doonan@gmail.com', 'username' => 'mig.doonan',
			'password_hash' => $security->generatePasswordHash('3FsD4jDpfgbel0AGWa4U'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 427, 'givenName' => 'Mikki', 'familyName' => 'Doonan', 'preferredName' => 'Mikki',
			'phone1' => '0404 698 365', 'phone2' => '07 5435 8745',
			'address1' => '137 Ansell Rd', 'address2' => '',
			'locality' => 'Witta', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Jane Everest', 'emergencyPhone1' => '0404 698 365', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'discovery' => 'Friend', 'discoveryDetail' => 'Family friends and media.',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'markanomaly@gmail.com', 'username' => 'markanomaly',
			'password_hash' => $security->generatePasswordHash('R2xaQyztOPLQnKu1hrjq'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 428, 'givenName' => 'Mark', 'familyName' => 'Anderson', 'preferredName' => 'Mark',
			'phone1' => '0435 531 861', 'phone2' => '',
			'address1' => '29/3 Polding Pl', 'address2' => '',
			'locality' => 'Telopea', 'state' => 'NSW', 'postcode' => '2117', 'country' => 'Australia',
			'emergencyContact' => 'Mary', 'emergencyPhone1' => '0407 498 658', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Noel', 'discoveryDetail' => 'Having met Noel (Gardner) 1 &amp;1/2 years ago, during an Illawarra Folkfest, where I was Mc\'ing, we conversed about different aspect of the new Maleny musicfest while there.',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'ramafilm@aol.com', 'username' => 'ramafilm',
			'password_hash' => $security->generatePasswordHash('RQoSUD020nc7LWP5eNbh'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 429, 'givenName' => 'Geoffrey', 'familyName' => 'Cantor', 'preferredName' => 'Geoff',
			'phone1' => '0417 391 532', 'phone2' => '',
			'address1' => '3 Wagtail Dr', 'address2' => '',
			'locality' => 'Peregian Beach', 'state' => 'Qld', 'postcode' => '4573', 'country' => 'Australia',
			'emergencyContact' => 'Chris Cantor', 'emergencyPhone1' => '0400 654 097', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Noel', 'discoveryDetail' => 'Noel Gardiner encouraged me to sign up and list him as my referee.',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'megebstephens@gmail.com', 'username' => 'megebstephens',
			'password_hash' => $security->generatePasswordHash('t42zxnXvkPyz9RzytsiP'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 430, 'givenName' => 'Meg', 'familyName' => 'Stephens', 'preferredName' => 'Meg',
			'phone1' => '0490 840 916', 'phone2' => '',
			'address1' => '12 Cobar St', 'address2' => '',
			'locality' => 'Lota', 'state' => 'Qld', 'postcode' => '4179', 'country' => 'Australia',
			'emergencyContact' => 'Beth Stephens', 'emergencyPhone1' => '0418 195 663', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Facebook', 'discoveryDetail' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'alysclaire@hotmail.co.uk', 'username' => 'alysclaire',
			'password_hash' => $security->generatePasswordHash('7Vww5lwHgsNzzzCMLtCO'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 431, 'givenName' => 'Alys', 'familyName' => 'Holmes', 'preferredName' => 'Alys',
			'phone1' => '0401 027 303', 'phone2' => '',
			'address1' => '2 Nautilus Dr', 'address2' => '',
			'locality' => 'Ormiston', 'state' => 'Qld', 'postcode' => '4160', 'country' => 'Australia',
			'emergencyContact' => 'Sarah Holmes', 'emergencyPhone1' => '0431 340 571', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 1, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Facebook', 'discoveryDetail' => 'A facebook post',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'indianack@gmail.comq', 'username' => 'indianack',
			'password_hash' => $security->generatePasswordHash('HWhy66LyFBqEjxqw4goc'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 432, 'givenName' => 'Indiana', 'familyName' => 'Coelho-King', 'preferredName' => 'Indy',
			'phone1' => '0431 211 482', 'phone2' => '',
			'address1' => '10 Karthina St', 'address2' => '',
			'locality' => 'Bulimba', 'state' => 'Qld', 'postcode' => '4171', 'country' => 'Australia',
			'emergencyContact' => 'Anebal Coelho', 'emergencyPhone1' => '0407 018 708', 'emergencyPhone2' => '',
			'rsa' => 1, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 1, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Facebook', 'discoveryDetail' => 'Facebook Group',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'mightybrowneyes@hotmail.com', 'username' => 'mightybrowneyes',
			'password_hash' => $security->generatePasswordHash('t7A4Ja2p9974tSNMEavq'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 433, 'givenName' => 'Ulrike', 'familyName' => 'Lynch', 'preferredName' => 'Ricky',
			'phone1' => '0439 477 823', 'phone2' => '07 5439 9556',
			'address1' => '47 Mt Mellum Rd', 'address2' => '',
			'locality' => 'Mt Mellum', 'state' => 'Qld', 'postcode' => '4550', 'country' => 'Australia',
			'emergencyContact' => 'Joe Lynch', 'emergencyPhone1' => '0439 477 820', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'discovery' => 'Folk Brisbane', 'discoveryDetail' => 'Shez\'s email list and Maleny FF news list.',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'jenissa.friend@gmail.com', 'username' => 'jenissa.friend',
			'password_hash' => $security->generatePasswordHash('b72kc3tUGRaZLeqEWUsD'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 434, 'givenName' => 'Jenissa', 'familyName' => 'Friend', 'preferredName' => 'Jeni',
			'phone1' => '0414 325 402', 'phone2' => '',
			'address1' => '40 Hooper Cr', 'address2' => '',
			'locality' => 'Tewantin', 'state' => 'Qld', 'postcode' => '4565', 'country' => 'Australia',
			'emergencyContact' => 'Grant Friend', 'emergencyPhone1' => '0414 281 776', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => '', 'discoveryDetail' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'truthunfolding@yahoo.com.au', 'username' => 'truthunfolding',
			'password_hash' => $security->generatePasswordHash('QCPelYch28WmkYhGwlcu'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 435, 'givenName' => 'Ana and Rob', 'familyName' => 'Greenfield', 'preferredName' => 'Ana & Rob',
			'phone1' => '0407 165 308', 'phone2' => '',
			'address1' => '10 Etep Crt', 'address2' => '',
			'locality' => 'Nambour', 'state' => 'Qld', 'postcode' => '4560', 'country' => 'Australia',
			'emergencyContact' => '', 'emergencyPhone1' => '0407 165 308', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'discovery' => 'Noel', 'discoveryDetail' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'riananderson@icloud.com', 'username' => 'riananderson',
			'password_hash' => $security->generatePasswordHash('TvxfOvtpGTc4nc13zLno'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 436, 'givenName' => 'Daphne', 'familyName' => 'Anderson', 'preferredName' => 'Rian',
			'phone1' => '07 3129 6020', 'phone2' => '',
			'address1' => '354 Lake Flat Rd', 'address2' => '',
			'locality' => 'Cootharaba', 'state' => 'Qld', 'postcode' => '4565', 'country' => 'Australia',
			'emergencyContact' => 'Lindsay Kopittke', 'emergencyPhone1' => '07 5485 3477', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 1, 'mmfAtt' => 1, 'returned' => 0,
			'discovery' => 'Folk Brisbane', 'discoveryDetail' => 'Shez\'s email list and Maleny FF news list.',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'nicole@cloudstreet.org', 'username' => 'nicole',
			'password_hash' => $security->generatePasswordHash('l153xM4rNZzsiUAZDP6Y'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 437, 'givenName' => 'Nicole', 'familyName' => 'Murray', 'preferredName' => 'Nicole',
			'phone1' => '0410 715 787', 'phone2' => '',
			'address1' => '56 Ashgrove Cr', 'address2' => '',
			'locality' => 'Ashgrove', 'state' => 'Qld', 'postcode' => '4060', 'country' => 'Australia',
			'emergencyContact' => 'John Thompson', 'emergencyPhone1' => '0416 032 573', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'discovery' => 'Folk Brisbane', 'discoveryDetail' => 'Shez at Folk Brisbane just sent out your call for volunteers.',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'wendyandian@internode.on.net', 'username' => 'wendyandian',
			'password_hash' => $security->generatePasswordHash('jQZWFObgevbxxGc7egV3'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 438, 'givenName' => 'Wendy', 'familyName' => 'Hodgins', 'preferredName' => 'Wendy',
			'phone1' => '07 5494 3106', 'phone2' => '',
			'address1' => '26 Murer Dr', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Ian Hodgins', 'emergencyPhone1' => '0418 943 334', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 1, 'returned' => 0,
			'discovery' => '', 'discoveryDetail' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'luan.baldwin@gmail.com', 'username' => 'luan.baldwin',
			'password_hash' => $security->generatePasswordHash('BEr4ZDIrRt0XfjNiv0p6'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 439, 'givenName' => 'Luan', 'familyName' => 'Baldwin', 'preferredName' => 'Luan',
			'phone1' => '0403 872 862', 'phone2' => '',
			'address1' => '336 Tingal Rd', 'address2' => '',
			'locality' => 'Wynnum', 'state' => 'Qld', 'postcode' => '4178', 'country' => 'Australia',
			'emergencyContact' => 'Leanne Hayman', 'emergencyPhone1' => '0459 020 040', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 1,
			'ohs' => 1, 'bc' => 0, 'fa' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Email Newsletter', 'discoveryDetail' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'Penelopenelfulloon@gmail.com', 'username' => 'Penelopenelfulloon',
			'password_hash' => $security->generatePasswordHash('Qa5JvP9V8g3WbBZZrruG'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 440, 'givenName' => 'Penelope', 'familyName' => 'Fulloon', 'preferredName' => 'Nel',
			'phone1' => '0403 779 953', 'phone2' => '',
			'address1' => '354 Payne Rd', 'address2' => '',
			'locality' => 'The Gap', 'state' => 'Qld', 'postcode' => '4061', 'country' => 'Australia',
			'emergencyContact' => 'Julie Price', 'emergencyPhone1' => '07 3300 4583', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 1, 'dl_h' => 0, 'cse' => 0,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 1, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Friend', 'discoveryDetail' => 'Emma Nixon and Celtic Fiddle Club',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%user}}', [
			'email' => 'john.barry.duthie1@gmail.com', 'username' => 'john.barry.duthie1',
			'password_hash' => $security->generatePasswordHash('GwzSsgp3eqo90iwpGsBp'), 'auth_key' => $security->generateRandomString(),
			'registration_ip' => '127.0.0.1', 'confirmed_at' => gmdate('Y-m-d H:i:s'),
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->insert('{{%profile}}', [
			'user_id' => 441, 'givenName' => 'John Barry', 'familyName' => 'Duthie', 'preferredName' => 'John',
			'phone1' => '0467 889 831', 'phone2' => '',
			'address1' => '34 Stanley River Rd', 'address2' => '',
			'locality' => 'Maleny', 'state' => 'Qld', 'postcode' => '4552', 'country' => 'Australia',
			'emergencyContact' => 'Cayman Duthie', 'emergencyPhone1' => '0439 459 975', 'emergencyPhone2' => '',
			'rsa' => 0, 'dl_c' => 0, 'dl_h' => 0, 'cse' => 0,
			'ohs' => 0, 'bc' => 0, 'fa' => 0,
			'vol' => 0, 'mmfVol' => 0, 'mmfAtt' => 0, 'returned' => 0,
			'discovery' => 'Previous Volunteer', 'discoveryDetail' => 'Volunteered last year...',
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
	}

	public function safeDown()
	{
		return true;
	}
}
