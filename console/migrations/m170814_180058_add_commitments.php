<?php

use yii\db\Migration;

class m170814_180058_add_commitments extends Migration
{
	public function safeUp()
	{
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 139]);
		$this->insert('{{%commitment}}', [
			'application_id' => 139, 'user_id' => 435,
			'job_id' => 1, 'team_id' => 1,
			'jobName' => 'Bar Doors', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 121]);
		$this->insert('{{%commitment}}', [
			'application_id' => 121, 'user_id' => 296,
			'job_id' => 2, 'team_id' => 1,
			'jobName' => 'Bar Service', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 127]);
		$this->insert('{{%commitment}}', [
			'application_id' => 127, 'user_id' => 424,
			'job_id' => 2, 'team_id' => 1,
			'jobName' => 'Bar Service', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 128]);
		$this->insert('{{%commitment}}', [
			'application_id' => 128, 'user_id' => 425,
			'job_id' => 2, 'team_id' => 1,
			'jobName' => 'Bar Service', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 132]);
		$this->insert('{{%commitment}}', [
			'application_id' => 132, 'user_id' => 429,
			'job_id' => 2, 'team_id' => 1,
			'jobName' => 'Bar Service', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 140]);
		$this->insert('{{%commitment}}', [
			'application_id' => 140, 'user_id' => 436,
			'job_id' => 38, 'team_id' => 1,
			'jobName' => 'Bar Ticketing', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 143]);
		$this->insert('{{%commitment}}', [
			'application_id' => 143, 'user_id' => 439,
			'job_id' => 10, 'team_id' => 3,
			'jobName' => 'General Setup', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 142]);
		$this->insert('{{%commitment}}', [
			'application_id' => 142, 'user_id' => 438,
			'job_id' => 13, 'team_id' => 5,
			'jobName' => 'MC', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 131]);
		$this->insert('{{%commitment}}', [
			'application_id' => 131, 'user_id' => 428,
			'job_id' => 16, 'team_id' => 5,
			'jobName' => 'Stage Manager', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 133]);
		$this->insert('{{%commitment}}', [
			'application_id' => 133, 'user_id' => 396,
			'job_id' => 16, 'team_id' => 5,
			'jobName' => 'Stage Manager', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 123]);
		$this->insert('{{%commitment}}', [
			'application_id' => 123, 'user_id' => 359,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 124]);
		$this->insert('{{%commitment}}', [
			'application_id' => 124, 'user_id' => 317,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 125]);
		$this->insert('{{%commitment}}', [
			'application_id' => 125, 'user_id' => 398,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 126]);
		$this->insert('{{%commitment}}', [
			'application_id' => 126, 'user_id' => 423,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 129]);
		$this->insert('{{%commitment}}', [
			'application_id' => 129, 'user_id' => 426,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 130]);
		$this->insert('{{%commitment}}', [
			'application_id' => 130, 'user_id' => 427,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 136]);
		$this->insert('{{%commitment}}', [
			'application_id' => 136, 'user_id' => 432,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 137]);
		$this->insert('{{%commitment}}', [
			'application_id' => 137, 'user_id' => 433,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 144]);
		$this->insert('{{%commitment}}', [
			'application_id' => 144, 'user_id' => 440,
			'job_id' => 17, 'team_id' => 6,
			'jobName' => 'Ticket Gates', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 122]);
		$this->insert('{{%commitment}}', [
			'application_id' => 122, 'user_id' => 17,
			'job_id' => 19, 'team_id' => 7,
			'jobName' => 'Treasury', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
		$this->update('{{%application}}', [
			'status' => 1,
		], ['id' => 141]);
		$this->insert('{{%commitment}}', [
			'application_id' => 141, 'user_id' => 437,
			'job_id' => 19, 'team_id' => 7,
			'jobName' => 'Treasury', 'year' => 2017,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
		]);
	}

	public function safeDown()
	{
		return true;
	}
}
