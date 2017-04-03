<?php

use yii\db\Schema;
use yii\db\Migration;

class m170324_094719_add_commitments extends Migration
{
	protected $options = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';
	protected $auditTime = Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP';
	protected $auditUser = 'INT(11) NOT NULL DEFAULT 0';
	protected $aboutField = 'TEXT DEFAULT NULL COLLATE utf8_unicode_ci';
	protected $valueField = 'TINYINT(3) NOT NULL UNIQUE';
	protected $activeField = 'TINYINT(1) DEFAULT 1';

	public function safeUp()
	{
		$this->applicationTable();
		$this->commitmentTable();
		$this->applicationJobTable();
		$this->foreignKeys();
		$this->insertCommitmentData();
	}

	public function safeDown()
	{
		echo "Add Commitments (down) destroys existing data!\n";

		$this->foreignKeys(true);
		$this->applicationJobTable(true);
		$this->commitmentTable(true);
		$this->applicationTable(true);
	}

	protected function applicationTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%application}}');
			return;
		}

		$this->createTable('{{%application}}', [
			'id' => Schema::TYPE_PK,
			'user_id' => Schema::TYPE_INTEGER . ' not null',
			'availableFromDate' => 'DATE DEFAULT NULL',
			'availableFromTime' => 'tinyint(3) UNSIGNED DEFAULT NULL',
			'availableToDate' => 'DATE DEFAULT NULL',
			'availableToTime' => 'tinyint(3) UNSIGNED DEFAULT NULL',
			'earlyLate' => 'tinyint(1) DEFAULT NULL',
			'availabilityNotes' => $this->aboutField,
			'double' => 'tinyint(1) DEFAULT 0',
			'closed' => 'tinyint(1) DEFAULT 0',
			'rejected' => 'tinyint(1) DEFAULT 0',
			'rejectedReason' => $this->aboutField,
			'created_at' => $this->auditTime, 'created_by' => $this->auditUser,
			'updated_at' => $this->auditTime, 'updated_by' => $this->auditUser,
		], $this->options);
	} // application

	protected function commitmentTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%commitment}}');
			return;
		}

		$this->createTable('{{%commitment}}', [
			'id' => Schema::TYPE_PK,
			'user_id' => Schema::TYPE_INTEGER . ' not null',
			'appl_id' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
			'dept_id' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
			'year' => 'YEAR NOT NULL',
			'job' => 'varchar(64) CHARACTER SET utf8 NOT NULL',
			'hours' => 'SMALLINT(6) UNSIGNED DEFAULT NULL',
			'report' => $this->aboutField,
			'reinvite' => 'tinyint(1) NOT NULL DEFAULT 1',
			'created_at' => $this->auditTime, 'created_by' => $this->auditUser,
			'updated_at' => $this->auditTime, 'updated_by' => $this->auditUser,
		], $this->options);
	} // commitment

	protected function applicationJobTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%application_job}}');
			return;
		}

		$this->createTable('{{%application_job}}', [
			'id' => Schema::TYPE_PK,
			'appl_id' => Schema::TYPE_INTEGER . ' not null',
			'job_id' => Schema::TYPE_INTEGER . ' not null',
			'preference' => 'tinyint(2) DEFAULT 0',
		], $this->options);
	} // commitment

	protected function foreignKeys($down = false)
	{
		if($down) {
			$this->dropForeignKey('{{%application_job_id}}', '{{%application_job}}');
			$this->dropForeignKey('{{%job_application_id}}', '{{%application_job}}');
			$this->dropForeignKey('{{%commitment_department_id}}', '{{%commitment}}');
			$this->dropForeignKey('{{%commitment_application_id}}', '{{%commitment}}');
			$this->dropForeignKey('{{%commitment_user_id}}', '{{%commitment}}');
			$this->dropForeignKey('{{%application_user_id}}', '{{%application}}');
			return;
		}

		$this->addForeignKey('{{%application_user_id}}', '{{%application}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%commitment_user_id}}', '{{%commitment}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%commitment_application_id}}', '{{%commitment}}', 'appl_id', '{{%application}}', 'id');
		$this->addForeignKey('{{%commitment_department_id}}', '{{%commitment}}', 'dept_id', '{{%department}}', 'id');
		$this->addForeignKey('{{%job_application_id}}', '{{%application_job}}', 'appl_id', '{{%application}}', 'id');
		$this->addForeignKey('{{%application_job_id}}', '{{%application_job}}', 'job_id', '{{%job}}', 'id');
	} // add foreign keys for data integrity

	protected function insertCommitmentData()
	{
		$this->insert('{{%commitment}}', [
			'user_id' => 2, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 3, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 4, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 5, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 6, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 7, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 8, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 9, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 10, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 11, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 12, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 13, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 13, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 14, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 15, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 15, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 16, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 17, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 18, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 20, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 21, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 22, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 25, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 25, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 26, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 27, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 28, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Floater', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 28, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 28, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 30, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Billeting', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 30, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 31, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 32, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 33, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 36, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 37, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Floater', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 37, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 38, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 39, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 41, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 43, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 43, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 44, 'dept_id' => 2, 'year' => 2015,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 45, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 46, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 46, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 47, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 47, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 48, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 49, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 50, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 51, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 53, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 55, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 55, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 56, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 59, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 61, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 64, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 64, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 65, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 66, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 67, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 68, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 70, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 70, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 71, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 72, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 76, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 76, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 77, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 79, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 84, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 85, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 86, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 87, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 88, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 89, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 90, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 91, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 93, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 96, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 97, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 98, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 100, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 101, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 102, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 105, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 105, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 105, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 106, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 107, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 108, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 109, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 110, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 110, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 111, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 112, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 113, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 115, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 117, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 118, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 121, 'year' => 2015,
			'job' => '', 'reinvite' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 122, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 122, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 123, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 124, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 125, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 126, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 127, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 128, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 129, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 132, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 133, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 134, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 135, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 138, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 138, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 140, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 141, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 142, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 143, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 144, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 146, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 147, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 149, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 152, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 154, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 155, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 156, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 157, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 158, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 160, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 161, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 163, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 166, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 166, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 166, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 167, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 168, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 170, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 170, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 171, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 172, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 172, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 173, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 174, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 174, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 176, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 176, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 177, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Bump Out', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 182, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 183, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 184, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 184, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 184, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 185, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 186, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 186, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 190, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 194, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 195, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 197, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 201, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 204, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 205, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 206, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 210, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 212, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 214, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Performer', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'dept_id' => 3, 'year' => 2015,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 217, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 217, 'dept_id' => 6, 'year' => 2015,
			'job' => 'Vollies Tent', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 220, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 220, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 221, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 222, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 224, 'year' => 2015,
			'job' => '', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 229, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 238, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 246, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 247, 'year' => 2015,
			'job' => '', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 249, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 252, 'dept_id' => 5, 'year' => 2015,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 253, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 254, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 257, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 267, 'dept_id' => 2, 'year' => 2015,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 268, 'dept_id' => 2, 'year' => 2015,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 285, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 287, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 318, 'dept_id' => 5, 'year' => 2015,
			'job' => 'MC', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 328, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 329, 'dept_id' => 7, 'year' => 2015,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 331, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 332, 'dept_id' => 1, 'year' => 2015,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 333, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 334, 'dept_id' => 4, 'year' => 2015,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 2, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 3, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 4, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 5, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 6, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 7, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 10, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 11, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 17, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 18, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 20, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 22, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 23, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 26, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 27, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 31, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 32, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 33, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 35, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 37, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 40, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 44, 'dept_id' => 2, 'year' => 2016,
			'job' => 'Children’s Fest - Dept head', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 46, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 50, 'dept_id' => 2, 'year' => 2016,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 62, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 63, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 67, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 68, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 72, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 79, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 84, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 87, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 90, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Camp Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 91, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 100, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 102, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 109, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 110, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 111, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 126, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 129, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 132, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 134, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 140, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 143, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 146, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Lockup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 152, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 155, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 156, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 175, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 176, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Camp Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 180, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 182, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 193, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 196, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 198, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 199, 'dept_id' => 2, 'year' => 2016,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 201, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 202, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 203, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 204, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 207, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Decor', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 208, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 209, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 209, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Bar Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 210, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 210, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 212, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 213, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 214, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 215, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Fencing', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 216, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 218, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 219, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 223, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 227, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 228, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 229, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 230, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 231, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 232, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 233, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 234, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 235, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 236, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 237, 'dept_id' => 2, 'year' => 2016,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 239, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 241, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 242, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 244, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 245, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 248, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 249, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 251, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 255, 'dept_id' => 2, 'year' => 2016,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 256, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 258, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 259, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 260, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 261, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Shop', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 264, 'dept_id' => 2, 'year' => 2016,
			'job' => 'Children’s Fest', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 269, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 270, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 274, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 275, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 277, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 278, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 282, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 283, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 284, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 286, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 288, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 289, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 290, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 292, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 293, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 294, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 295, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 297, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 298, 'dept_id' => 3, 'year' => 2016,
			'job' => 'Setup', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 299, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 300, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 303, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Camp Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 311, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 313, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 314, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Security', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 315, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 316, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 318, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Committee', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 324, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 325, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 326, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 327, 'dept_id' => 1, 'year' => 2016,
			'job' => 'Bar Service', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 329, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 330, 'dept_id' => 5, 'year' => 2016,
			'job' => 'Stage Manager', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 331, 'dept_id' => 4, 'year' => 2016,
			'job' => 'Gates', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 333, 'dept_id' => 7, 'year' => 2016,
			'job' => 'President', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%commitment}}', [
			'user_id' => 334, 'dept_id' => 7, 'year' => 2016,
			'job' => 'Treasury', 'reinvite' => 1,
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
	} // insert commitment data
}
