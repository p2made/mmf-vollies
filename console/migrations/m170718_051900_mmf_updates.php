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
class m170718_051900_mmf_updates extends \yii\db\Migration
{
	protected $tableOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';

	public function up()
	{
		$this->createTable('{{%update}}', [
			'id'       => $this->primaryKey(),
			'email'    => $this->string()->unique()->notNull(),
			'name'     => $this->string(60)->notNull(),
			'other0'   => $this->string()->null(),
			'other1'   => $this->string()->null(),
			'other2'   => $this->string()->null(),
			'status0'  => 'tinyint(1) not null default 0',
			'status1'  => 'tinyint(1) not null default 0',
			'status2'  => 'tinyint(1) not null default 0',
		], $this->tableOptions);

		$this->insert('{{%update}}', [
			'name' => 'Alanna',
			'email' => 'alannamendels@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Amanda',
			'email' => 'daveandmanda@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Andrew',
			'email' => 'adpedler@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Andrew',
			'email' => 'andymet@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Andy',
			'email' => 'andylivesinoz@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Ann',
			'email' => 'annmorris_oz@yahoo.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Ash',
			'email' => 'asha-niketan@live.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Barny',
			'email' => 'Garrysouthwell@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Bella',
			'email' => 'fringedwellers@live.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Cheryl',
			'email' => 'cheryll.62@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Chris',
			'email' => 'christopher.gwin@bigpond.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Chris',
			'email' => 'christopher.marsh@bigpond.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Croc',
			'email' => 'croc.100@bigpond.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Dan',
			'email' => 'aumrah.donash@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Daniel',
			'email' => 'danieljsan@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Danielle',
			'email' => 'staceyfamily@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'David ',
			'email' => 'david@goodtunes.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Deni',
			'email' => 'awok@bigpond.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Derek',
			'email' => 'bliblifosters@aapt.net.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Des',
			'email' => 'desmundward@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Donna',
			'email' => 'windmilldc@yahoo.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Drew',
			'email' => 'phylos.fett@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Elisa',
			'email' => 'eds_elisa@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Emma',
			'email' => 'emma.j.mitch@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Esko',
			'email' => 'dipadesign@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Fran',
			'email' => 'franban4545@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Guenara',
			'email' => 'Guenara.meril@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Ian',
			'email' => 'ianbbrady@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Ian',
			'email' => 'iansmith0802@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Imogen',
			'email' => 'imogen@st.net.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Jacquie',
			'email' => 'jacquiebrydon@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Jane',
			'email' => 'janeedit@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Jen',
			'email' => 'msjen.qld@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Jennifer',
			'email' => 'jenoel155@bigpond.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Jill Walls',
			'email' => 'jillmc@optusnet.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Joan',
			'email' => 'joanchenery54@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'John',
			'email' => 'johndwoods@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Karin',
			'email' => 'kwagner.1954@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Kath',
			'email' => 'kathydavis1@bigpond.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Kerry',
			'email' => 'synergymoon1@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Kerry-Anne',
			'email' => 'kerryannebourke@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Kym',
			'email' => 'kymclasby@westnet.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Levi/Levius/Pedro',
			'email' => 'l_n022@student.usc.edu.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Linda',
			'email' => 'baberll@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Linda',
			'email' => 'pdscharf@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Lyn',
			'email' => 'lyn_57@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Lynda',
			'email' => 'lynda.rush@bigpond.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Maddy',
			'email' => 'maddyb.96@live.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Malcolm',
			'email' => 'badamanjose@yahoo.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Marc',
			'email' => 'marc@austin-zande.net',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Maria',
			'email' => 'maria.zann@uqconnect.edu.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Marian',
			'email' => 'marian@keystonearchitects.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Marilyn',
			'email' => 'mazza.727@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Marko',
			'email' => 'markocimesa@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Marsha',
			'email' => 'marshafotografie@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Michelle',
			'email' => 'michelle.bragg@epicentre.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Michelle',
			'email' => 'rrrr27au@yahoo.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Mushroom',
			'email' => 'brianleoosullivan@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Neil',
			'email' => 'karadise1@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Ninindi',
			'email' => 'nemiliajohnstone@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Noel',
			'email' => 'info@noelgardner.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Pam',
			'email' => 'psmithcontact@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Paul',
			'email' => 'coughlanpa@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Pedro',
			'email' => 'me@pedro.id.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Phil',
			'email' => 'philipjj61@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Pierre',
			'email' => 'punyaji@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Ric, Ricco',
			'email' => 'riccolclough@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Rob',
			'email' => 'robknights555@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Roger',
			'email' => 'rogergb33@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Rosemarie',
			'email' => 'straf5@live.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Shez',
			'email' => 'shezoffice@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Skin',
			'email' => 'poppyskin@live.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Sonja',
			'email' => 'annicha09@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Stephanie',
			'email' => 'hicksatmerton@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Su  ',
			'email' => 'su@wellnessonthemove.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Susan',
			'email' => 'brisbanepd@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Susan',
			'email' => 'smbrown@pghbricks.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Suzanne',
			'email' => 'suz_mcevoy@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Tahnz',
			'email' => 'tanyas_a_star@hotmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Teresa',
			'email' => 'emailteresahunt@gmail.com',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Wendy',
			'email' => 'justfirerooster@yahoo.com.au',
		]);
		$this->insert('{{%update}}', [
			'name' => 'Wes',
			'email' => 'karma30m@yahoo.com',
		]);

	}

	public function down()
	{
		$this->dropTable('{{%update}}');
	}
}
