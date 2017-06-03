<?php

use yii\db\Schema;
use yii\base\InvalidConfigException;
use yii\rbac\DbManager;

/*
		$this->createTable('example_table', [
			'id' => $this->primaryKey(),
			'name' => $this->string(64)->notNull(),
			'type' => $this->integer()->notNull()->defaultValue(10),
			'description' => $this->text(),
			'rule_name' => $this->string(64),
			'data' => $this->text(),
			'created_at' => $this->datetime()->notNull(),
			'updated_at' => $this->datetime(),
		]);

	bigInteger()		Creates a bigint column.
	bigPrimaryKey()	 Creates a big primary key column.
	binary()			Creates a binary column.
	boolean()		   Creates a boolean column.
	char()			  Creates a char column.
	date()			  Creates a date column.
	dateTime()		  Creates a datetime column.
	decimal()		   Creates a decimal column.
	double()			Creates a double column.
	float()			 Creates a float column.
	integer()		   Creates an integer column.
	money()			 Creates a money column.
	primaryKey()		Creates a primary key column.
	smallInteger()	  Creates a smallint column.
	string()			Creates a string column.
	text()			  Creates a text column.
	time()			  Creates a time column.
	timestamp()		 Creates a timestamp column.

	after()			 Adds an AFTER constraint to the column.
	append()			Specify additional SQL to be appended to column definition.
	canGetProperty()	Returns a value indicating whether a property can be read.
	canSetProperty()	Returns a value indicating whether a property can be set.
	check()			 Sets a CHECK constraint for the column.
	className()		 Returns the fully qualified name of this class.
	comment()		   Specifies the comment for column.
	defaultExpression() Specify the default SQL expression for the column.
	defaultValue()	  Specify the default value for the column.
	first()			 Adds an FIRST constraint to the column.
	hasMethod()		 Returns a value indicating whether a method is defined.
	hasProperty()	   Returns a value indicating whether a property is defined.
	init()			  Initializes the object.
	notNull()		   Adds a NOT NULL constraint to the column.
	null()			  Adds a NULL constraint to the column
	unique()			Adds a UNIQUE constraint to the column.
	unsigned()		  Marks column as unsigned.
*/
class m170524_081853_mmf_init_tables extends \yii\db\Migration
{
	protected $tableOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';

	public function up()
	{
		$this->createTable('{{%invite}}', [
			'id'       => $this->primaryKey(),
			'email'    => $this->string()->unique()->notNull(),
			'name'     => $this->string(60)->unique()->notNull(),
			'password' => $this->string(60)->notNull(),
			'role'     => 'tinyint(1) not null default 0',
		], $this->tableOptions);

		$this->insert('{{%user}}', [
			'name' => 'Vollies',
			'email' => 'vollies@malenymusicfestival.com',
			'password' => 'mffMerrigaL1941', 'role' => 1,
		]);
		$this->insert('{{%user}}', [
			'name' => 'Noel',
			'email' => 'info@noelgardner.com',
			'password' => '996MNX82NlE0jtK5', 'role' => 1,
		]);

		$this->insert('{{%user}}', [
			'name' => 'Brett',
			'email' => 'brett@mosaics.com.au',
			'password' => 'pFXq638KJFiA1yrO',
		]);
		$this->insert('{{%user}}', [
			'name' => 'Ann',
			'email' => 'annmorris_oz@yahoo.com',
			'password' => 'mnIHrJ46jFNO1RHc',
		]);
	}

	public function down()
	{
		$this->dropTable('{{%invite}}');
	}

	protected function inviteTable($down = false)
	{
		if($down) {
			return;
		}

	}
}
