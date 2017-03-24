<?php

use yii\db\Schema;
use yii\db\Migration;

class m170324_090055_add_departments_jobs extends Migration
{
	protected $options = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';
	protected $auditTime = Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP';
	protected $auditUser = 'INT(11) NOT NULL DEFAULT 0';
	protected $aboutField = 'TEXT DEFAULT NULL COLLATE utf8_unicode_ci';
	protected $valueField = 'TINYINT(3) NOT NULL UNIQUE';
	protected $activeField = 'TINYINT(1) DEFAULT 1';

	public function safeUp()
	{
		$this->departmentTable();
		$this->jobTable();
		$this->foreignKeys();
		$this->insertDepartmentData();
		$this->insertJobData();
	}

	public function safeDown()
	{
		echo "Add Departments & Jobs (down) destroys existing data!\n";

		$this->foreignKeys(true);
		$this->jobTable(true);
		$this->departmentTable(true);
	}

	protected function departmentTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%department}}');
			return;
		}

		$this->createTable('{{%department}}', [
			'id' => Schema::TYPE_PK,
			'head_id' => Schema::TYPE_INTEGER . ' DEFAULT NULL',
			'sequence' => 'SMALLINT(6) UNSIGNED NOT NULL',
			'name' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'description' => $this->aboutField,
			'created_at' => $this->auditTime, 'created_by' => $this->auditUser,
			'updated_at' => $this->auditTime, 'updated_by' => $this->auditUser,
		], $this->options);
	} // department

	protected function jobTable($down = false)
	{
		if($down) {
			$this->dropTable('{{%job}}');
			return;
		}

		$this->createTable('{{%job}}', [
			'id' => Schema::TYPE_PK,
			'dept_id' => Schema::TYPE_INTEGER . ' not null',
			'sequence' => 'SMALLINT(6) UNSIGNED NOT NULL',
			'name' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'menuGroup' => 'varchar(24) CHARACTER SET utf8 NOT NULL',
			'description' => $this->aboutField,
			'created_at' => $this->auditTime, 'created_by' => $this->auditUser,
			'updated_at' => $this->auditTime, 'updated_by' => $this->auditUser,
		], $this->options);
	} // job

	protected function foreignKeys($down = false)
	{
		if($down) {
			$this->dropForeignKey('{{%job_department_id}}', '{{%job}}');
			$this->dropForeignKey('{{%department_head_id}}', '{{%department}}');
			return;
		}

		$this->addForeignKey('{{%department_head_id}}', '{{%department}}', 'head_id', '{{%user}}', 'id');
		$this->addForeignKey('{{%job_department_id}}', '{{%job}}', 'dept_id', '{{%department}}', 'id');
	} // add foreign keys for data integrity

	protected function insertDepartmentData()
	{
		$this->insert('{{%department}}', [
			'head_id' => 3, 'sequence' => 5, 'name' => 'Bars', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%department}}', [
			'sequence' => 4, 'name' => 'Childrens Festival', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%department}}', [
			'sequence' => 1, 'name' => 'Setup / Bump Out', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%department}}', [
			'sequence' => 2, 'name' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%department}}', [
			'sequence' => 3, 'name' => 'Stages', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%department}}', [
			'head_id' => 1, 'sequence' => 6, 'name' => 'Vollies', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%department}}', [
			'sequence' => 7, 'name' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
	} // insert department data

	protected function insertJobData()
	{
		$this->insert('{{%job}}', [
			'dept_id' => 1, 'sequence' => 20, 'name' => 'Bar Manager',
			'menuGroup' => 'Hospitality', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 1, 'sequence' => 21, 'name' => 'Bar Security',
			'menuGroup' => 'Hospitality', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 1, 'sequence' => 22, 'name' => 'Bar Service',
			'menuGroup' => 'Hospitality', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 1, 'sequence' => 23, 'name' => 'Bar Ticketing',
			'menuGroup' => 'Hospitality', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 2, 'sequence' => 19, 'name' => 'Childrens Festival',
			'menuGroup' => 'Childrens Festival', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 3, 'sequence' => 2, 'name' => 'Bamboo',
			'menuGroup' => 'Setup & Bump Out', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 3, 'sequence' => 5, 'name' => 'Bar Setup',
			'menuGroup' => 'Setup & Bump Out', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 3, 'sequence' => 6, 'name' => 'Bump Out',
			'menuGroup' => 'Setup & Bump Out', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 3, 'sequence' => 4, 'name' => 'Decor',
			'menuGroup' => 'Setup & Bump Out', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 3, 'sequence' => 3, 'name' => 'Fencing',
			'menuGroup' => 'Setup & Bump Out', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 3, 'sequence' => 1, 'name' => 'Setup',
			'menuGroup' => 'Setup & Bump Out', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 7, 'name' => 'Assistant Site Manager',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 8, 'name' => 'Bins',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 9, 'name' => 'Campground',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 10, 'name' => 'Cleaning',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 11, 'name' => 'Gates',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 12, 'name' => 'Parking',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 13, 'name' => 'Security',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 4, 'sequence' => 14, 'name' => 'Traffic',
			'menuGroup' => 'Site', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 5, 'sequence' => 18, 'name' => 'Lighting',
			'menuGroup' => 'Stages', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 5, 'sequence' => 15, 'name' => 'MC',
			'menuGroup' => 'Stages', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 5, 'sequence' => 24, 'name' => 'Performer Hospitality',
			'menuGroup' => 'Hospitality', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 5, 'sequence' => 17, 'name' => 'Stage Assistant',
			'menuGroup' => 'Stages', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 5, 'sequence' => 16, 'name' => 'Stage Manager',
			'menuGroup' => 'Stages', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 6, 'sequence' => 25, 'name' => 'Vollies Tent',
			'menuGroup' => 'Hospitality', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 28, 'name' => 'Billeting',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 29, 'name' => 'Door Security',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 30, 'name' => 'Gofer',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 26, 'name' => 'Lockup',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 31, 'name' => 'Performer',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 27, 'name' => 'Photographer',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 32, 'name' => 'Shop',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 33, 'name' => 'Ticket Checking',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 34, 'name' => 'Ticketing',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
		$this->insert('{{%job}}', [
			'dept_id' => 7, 'sequence' => 35, 'name' => 'Treasury',
			'menuGroup' => 'Other', 'description' => '',
			'created_at' => gmdate('Y-m-d H:i:s'), 'created_by' => 0,
			'updated_at' => gmdate('Y-m-d H:i:s'), 'updated_by' => 0,
		]);
	} // insert job data
}
