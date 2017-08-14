<?php


class m170805_073015_modify_commitment_table extends \yii\db\Migration
{
	public function safeUp()
	{
		$this->renameColumn('{{%commitment}}', 'job', 'job_name');
		$this->addColumn('{{%commitment}}', 'job_id', $this->integer()->null());

		$this->addForeignKey('fk_commitment_application_id',
			'{{%commitment}}', 'application_id', '{{%application}}', 'id'
		);
		$this->addForeignKey('fk_commitment_team_id',
			'{{%commitment}}', 'team_id', '{{%team}}', 'id'
		);
		$this->addForeignKey('fk_commitment_job_id',
			'{{%commitment}}', 'job_id', '{{%job}}', 'id'
		);
	}

	public function safeDown()
	{
		return true;
	}
}
