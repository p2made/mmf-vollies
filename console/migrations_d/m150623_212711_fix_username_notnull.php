<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use dektrium\user\migrations\Migration;

class m150623_212711_fix_username_notnull extends Migration
{
    public function up()
    {
        if ($this->dbType == 'pgsql') {
            $this->alterColumn('{{%user}}', 'username', 'SET NOT NULL');
        } else {
            if ($this->dbType == 'sqlsrv') {
                $this->dropIndex('{{%user_unique_username}}', '{{%user}}');
            }
            $this->alterColumn('{{%user}}', 'username', $this->string(255)->notNull());
            if ($this->dbType == 'sqlsrv') {
                $this->createIndex('{{%user_unique_username}}', '{{%user}}', 'username', true);
            }
        }
    }

    public function down()
    {
        if ($this->dbType == "pgsql") {
            $this->alterColumn('{{%user}}', 'username', 'DROP NOT NULL');
        } else {
            if ($this->dbType == 'sqlsrv') {
                $this->dropIndex('{{%user_unique_username}}', '{{%user}}');
            }
            $this->alterColumn('{{%user}}', 'username', $this->string(255)->null());
            if ($this->dbType == 'sqlsrv') {
                $this->createIndex('{{%user_unique_username}}', '{{%user}}', 'username', true);
            }
        }
    }
}
?>

<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use dektrium\user\migrations\Migration;

class m151218_234654_add_timezone_to_profile extends Migration
{
	public function up()
	{
		$this->addColumn('{{%profile}}', 'timezone', $this->string(40)->null());
	}

	public function down()
	{
		$this->dropcolumn('{{%profile}}', 'timezone');
	}
}
?>

<?php

use yii\db\Migration;

class m160929_103127_add_last_login_at_to_user_table extends Migration
{
  public function up()
  {
	$this->addColumn('{{%user}}', 'last_login_at', $this->integer());

  }

  public function down()
  {
	$this->dropColumn('{{%user}}', 'last_login_at');
  }
}
