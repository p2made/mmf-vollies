<?php

class m170810_110038_modify_commitment_table extends \yii\db\Migration
{
	public function safeUp()
	{
		$this->alterColumn('{{%commitment}}', 'user_id',
			$this->integer()->notNull()
		);
		$this->alterColumn('{{%commitment}}', 'application_id',
			$this->integer()->unique()
		);
		$this->alterColumn('{{%commitment}}', 'team_id',
			$this->integer()->null()
		);
		$this->alterColumn('{{%commitment}}', 'job_id',
			$this->integer()->null()
		);
	}

	public function safeDown()
	{
		return true;
	}
}
