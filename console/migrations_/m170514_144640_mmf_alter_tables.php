<?php

class m170514_144640_mmf_alter_tables extends \yii\db\Migration
{
	public function up()
	{
		$this->alterColumn('{{%commitment}}', 'application_id', 'int(11) not null');
		$this->alterColumn('{{%commitment}}', 'team_id', 'int(11) not null');

		$this->alterColumn('{{%profile}}', 'givenname', 'varchar(64) not null');
		$this->alterColumn('{{%profile}}', 'familyname', 'varchar(64) not null');
		$this->alterColumn('{{%profile}}', 'phone1', 'varchar(32) not null');
		$this->alterColumn('{{%profile}}', 'address2', 'varchar(255) not null');
		$this->alterColumn('{{%profile}}', 'locality', 'varchar(64) not null');
		$this->alterColumn('{{%profile}}', 'emergencycontact', 'varchar(64) not null');
		$this->alterColumn('{{%profile}}', 'emergencyphone1', 'varchar(32) not null');
		$this->alterColumn('{{%profile}}', 'discovery', 'varchar(24) not null');
	}

	public function down()
	{
		return true;
	}
}
