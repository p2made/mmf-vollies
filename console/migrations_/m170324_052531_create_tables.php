<?php

use yii\db\Schema;
use yii\db\Migration;

class m170324_052531_create_tables extends Migration
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
		$this->historyTable();
		$this->departmentTable();
		$this->applicationTable();
		$this->jobTable();
		$this->commitmentTable();
		$this->applicationJobTable();

		$this->tableIndexes();
		$this->foreignKeys();
	}

	public function safeDown()
	{
		echo "Create Core Tables (down) destroys existing data!\n";

		$this->foreignKeys(true);
		$this->tableIndexes(true);

		// drop tables in reverse order (for foreign key constraints)
		$this->applicationJobTable();
		$this->commitmentTable();
		$this->jobTable();
		$this->applicationTable();
		$this->departmentTable();
		$this->historyTable();
	}

	protected function historyTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%history}}');
			return;
		}

		$this->createTable('{{%history}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' not null',
			'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
		], $this->options);
	} // history

	protected function departmentTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%department}}');
			return;
		}

		$this->createTable('{{%department}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' not null',
			'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
		], $this->options);
	} // department

	protected function applicationTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%application}}');
			return;
		}

		$this->createTable('{{%application}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' not null',
			'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
		], $this->options);
	} // application

	protected function jobTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%job}}');
			return;
		}

		$this->createTable('{{%job}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' not null',
			'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
		], $this->options);
	} // job

	protected function commitmentTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%commitment}}');
			return;
		}

		$this->createTable('{{%commitment}}', [
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING . ' not null',
			'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
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
			'name' => Schema::TYPE_STRING . ' not null',
			'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
			'created_at' => Schema::TYPE_TIMESTAMP . ' null',
			'updated_at' => Schema::TYPE_TIMESTAMP . ' null',
		], $this->options);
	} // application_job

}
