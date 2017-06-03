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
		$columns = ['email', 'username', 'password_hash', 'auth_key', 'confirmed_at', 'registration_ip', 'created_at', 'updated_at'];
		$this->batchInsert('{{%user}}', $columns, [
			[
				'vollies@malenymusicfestival.com', 'vollies',
				$security->generatePasswordHash('mffMerrigaL1941'),
				$security->generateRandomString(),
				gmdate('Y-m-d H:i:s'), '127.0.0.1',
				gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')
			],
			[
				'info@noelgardner.com', 'noel',
				$security->generatePasswordHash('RKYYtVumL3RipfaA'),
				$security->generateRandomString(),
				gmdate('Y-m-d H:i:s'), '127.0.0.1',
				gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')
			],
			[
				'joanchenery54@gmail.com', 'joanchenery54',
				$security->generatePasswordHash('Rlnd2g3Gfgbiu6J7'),
				$security->generateRandomString(),
				gmdate('Y-m-d H:i:s'), '127.0.0.1',
				gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')
			],
			[
				'brett@mosaics.com.au', 'brett',
				$security->generatePasswordHash('RRAkSnVhFwCXKB3Z'),
				$security->generateRandomString(),
				gmdate('Y-m-d H:i:s'), '127.0.0.1',
				gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')
			],
			[
				'me@pedro.id.au', 'pedro',
				$security->generatePasswordHash('mffMerrigaL1941'),
				$security->generateRandomString(),
				gmdate('Y-m-d H:i:s'), '127.0.0.1',
				gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')
			],
			[
				'design@workingplanet.com.au', 'design',
				$security->generatePasswordHash('m1s3jpc7y1xi14wD'),
				$security->generateRandomString(),
				gmdate('Y-m-d H:i:s'), '127.0.0.1',
				gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')
			],
		]);

		// insert admin profile data
		$columns = ['user_id', 'state', 'country', 'created_at', 'updated_at'];
		$this->batchInsert('{{%profile}}', $columns, [
			[1, 'Qld', 'Australia', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[2, 'Qld', 'Australia', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[3, 'Qld', 'Australia', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[4, 'Qld', 'Australia', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[5, 'Qld', 'Australia', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[6, 'Qld', 'Australia', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
		]);

		// insert teams data
		$columns = ['head_id', 'sequence', 'name', 'created_at', 'updated_at'];
		$this->batchInsert('{{%team}}', $columns, [
			[null, 3, 'Setup & Bump Out', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 6, 'Site', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 9, 'Stages', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[3, 12, 'Bars', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 15, 'Treasury', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 18, 'Ticket Gates', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 21, 'Childrens Festival', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[1, 24, 'Vollies', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[null, 27, 'Other', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
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
			[2, 2, 24, 'Helper', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[7, 6, 54, 'Instrument Lockup', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[5, 5, 48, 'MC', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[2, 2, 21, 'Presenter', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[7, 6, 57, 'Shop', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[5, 5, 51, 'Stage Manager', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[6, 4, 42, 'Ticket Gates', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[4, 4, 45, 'Traffic', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[7, 6, 60, 'Treasury', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[8, 3, 33, 'Vollies Tent', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[9, 6, 63, 'I will do anything', null, gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
			[9, 6, 66, 'Special', 'People asked to do a specific job as vollies.', gmdate('Y-m-d H:i:s'), gmdate('Y-m-d H:i:s')],
		]);
	}

	public function down()
	{
		return true;
	}

}
