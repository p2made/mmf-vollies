<?php

use yii\db\Schema;

class m170403_172805_mmf_add_admins extends \yii\db\Migration
{
	public function up()
	{
		$security = Yii::$app->security;

		// insert admin user data
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

		// insert admin profile data
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
	}

	public function safeDown()
	{
		return true;
	}
}
