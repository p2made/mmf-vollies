<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}


	m140209_132017_init
	m140403_174025_create_account_table
	m140504_113157_update_tables
	m140504_130429_create_token_table
	m140830_171933_fix_ip_field
	m140830_172703_change_account_table_name
	m141222_110026_update_ip_field
	m141222_135246_alter_username_length
	m150614_103145_update_social_account_table
	m150623_212711_fix_username_notnull
	m151218_234654_add_timezone_to_profile
	m160929_103127_add_last_login_at_to_user_table
