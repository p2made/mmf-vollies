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
class m170601_054902_mmf_temp_mailout extends \yii\db\Migration
{
	protected $tableOptions = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci';

	public function up()
	{
		$this->createTable('{{%invite}}', [
			'id'       => $this->primaryKey(),
			'email'    => $this->string()->unique()->notNull(),
			'name'     => $this->string(60)->notNull(),
			'password' => $this->string(60)->notNull(),
			'role'     => 'tinyint(1) not null default 0',
		], $this->tableOptions);

		$this->insert('{{%invite}}', [
			'name' => 'Vollies',
			'email' => 'vollies@malenymusicfestival.com',
			'password' => 'mffMerrigaL1941', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Noel',
			'email' => 'info@noelgardner.com',
			'password' => '996MNX82NlE0jtK5', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Joan',
			'email' => 'joanchenery54@gmail.com',
			'password' => 'Dv50xC7GPPKGPNcA', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'John',
			'email' => 'jwrig46@hotmail.com',
			'password' => 'UNUP3PzIFnPFfUwJ', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lisa',
			'email' => 'lisa.reye@hotmail.com',
			'password' => 'Xx4AdDYkqAy56Mma', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tom',
			'email' => 'tnealson@gmail.com',
			'password' => 'eaTSVARTSPYGbI6J', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Pedro',
			'email' => 'me@pedro.id.au',
			'password' => 'mffMerrigaL1941', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Nahum',
			'email' => 'design@workingplanet.com.au',
			'password' => 'AKlBZLMqXTNdNX0U', 'role' => 1,
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lynda',
			'email' => 'lyndasimpson@bigpond.com',
			'password' => 'eaTSVARTSPYGbI6J', 'role' => 1,
		]);

		$this->insert('{{%invite}}', [
			'name' => 'Brett',
			'email' => 'brett@mosaics.com.au',
			'password' => 'pFXq638KJFiA1yrO',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ann',
			'email' => 'annmorris_oz@yahoo.com',
			'password' => 'mnIHrJ46jFNO1RHc',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bennybowen',
			'email' => 'benjiridoo@yahoo.ca',
			'password' => 'AdeblKYlsIXisVQ7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bella',
			'email' => 'fringedwellers@live.com',
			'password' => 'TJE0GhRoZwEt3dy5',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Natty',
			'email' => 'ireallylovethose@gmail.com',
			'password' => 'S1OGhGvcnK6MRPqr',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Chris',
			'email' => 'christopher.gwin@bigpond.com',
			'password' => 'C2ckpqa4v3Rv0YVo',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Dom',
			'email' => 'dominic@numbernine.com.au',
			'password' => 'YqlvkE7z37qXzPfs',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ken',
			'email' => 'kenmain1@optusnet.com.au',
			'password' => 'yH1SMg8fZnlIKg9i',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Suzanne',
			'email' => 'suzannec7@optusnet.com.au',
			'password' => 'hmqjTiu8w8ooPFTs',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Gaby',
			'email' => 'gabyluft@hotmail.com',
			'password' => 'jv7FKqqLPLDtt6RO',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Gabe',
			'email' => 'gabriel.monson@gmail.com',
			'password' => 'Jjtqyv5jHn0XUlTP',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Allyson',
			'email' => 'allyson.williams007@gmail.com',
			'password' => '5kBeJu4LJ97t9eQZ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tanya',
			'email' => 'tanya@numbernine.com.au',
			'password' => 'RKFVgRAk6Aid4MWE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Debbie',
			'email' => 'debrataylor@me.com',
			'password' => 'I3SbTuVMumwZhBj2',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jacqui',
			'email' => 'jacqui@studiohorizon.com',
			'password' => 'trK1ApJHziXFU9Ff',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Mikayla',
			'email' => 'lotussseed@gmail.com',
			'password' => 'MrrxUJJzIBYmdCe7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Suzanne',
			'email' => 'suz_mcevoy@hotmail.com',
			'password' => 'bcx7ObK4Fk23yl6D',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Chris',
			'email' => 'christopher.marsh@bigpond.com',
			'password' => '24om8hf8xHkqZUgY',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Shez',
			'email' => 'shezoffice@gmail.com',
			'password' => 'eIrobxrlk3aldM42',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Marie',
			'email' => 'marie.nicholette@gmail.com',
			'password' => 'DstemqNyuiBfdn7m',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kelli',
			'email' => 'chanteuse@xancorp.com.au',
			'password' => 'Gek7QNTLLX4MTdU6',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Clayton',
			'email' => 'clayton@claytonstorey.com',
			'password' => 'D3UqFLjdihtJpUzD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cardie',
			'email' => 'cardieboydell@bigpond.com',
			'password' => 'jfARFicB2qKmAlNv',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sonia',
			'email' => '4peacenlove@gmail.com',
			'password' => 'BVHgRj2VXreMGxWI',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Val',
			'email' => 'marleyfrance1707@gmail.com',
			'password' => 'bvj9ZyrrtoT0bxBB',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Terry',
			'email' => 'terrybishop42@gmail.com',
			'password' => 'XlEutDUroh6oKuhE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cheryl',
			'email' => 'cherylvivian@gmail.com',
			'password' => 'Q0lD0mPPhsklXKUX',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Julia',
			'email' => 'juliapeddie@icloud.com',
			'password' => 'bNuX7yBCSayIVLyV',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Le',
			'email' => 'goodwills@ozemail.com.au',
			'password' => '1L1kTuMmaIAmyRN1',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Arcadia',
			'email' => 'mail@womenforchange.com',
			'password' => 'KYVwgLj9xXr5Pi79',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Andrew',
			'email' => 'adpedler@gmail.com',
			'password' => 'eWhdx3EIxPpJM69C',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Margaret',
			'email' => 'margrl135@gmail.com',
			'password' => 'dWBoeFUJiYAKKHPC',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Pete',
			'email' => 'peter.cartwright@iinet.net.au',
			'password' => 'mvrNnUyFIOvYAqDe',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Amanda',
			'email' => 'amandala44@hotmail.com',
			'password' => '9OOUS84drdle5k4y',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kari',
			'email' => 'kari@karicelebrations.com',
			'password' => 'o9a2RkXkPRqYnNFo',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Deb',
			'email' => 'deborahnewyou@gmail.com',
			'password' => '5jzZTOwxZgINEb3n',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Amanda',
			'email' => 'daveandmanda@gmail.com',
			'password' => 'QsV4BXZ7k8rXLAJK',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Juda',
			'email' => 'judithbacon@optusnet.com.au',
			'password' => '3lb9A1nC1FSggk39',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ben',
			'email' => 'ben@ecourban.com.au',
			'password' => 'TggjYSlfn9qTA7tq',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ric, Ricco',
			'email' => 'riccolclough@gmail.com',
			'password' => 'EPZX1d1xlJjaLPa1',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Julie',
			'email' => 'meander123@gmail.com',
			'password' => 'mAICF8bKZHFuGMVG',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Becky',
			'email' => 'becky@woodfordia.com',
			'password' => 'tNYWSGnONNGMpSzM',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Julz',
			'email' => 'seedwalkabout@rediffmail.com',
			'password' => 's0ZhMs6Um9WE1yXS',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kim',
			'email' => 'kim@kimbanffy.com.au',
			'password' => 'BS8vDNzhIpEBvsYg',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sharynne',
			'email' => 'sharynne.durbidge@au.nestle.com',
			'password' => 'cG4FqoeJ1ZM0T8M6',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Michelle',
			'email' => 'michelle.bragg@epicentre.com.au',
			'password' => 'gQRDG8dRr0nBR40S',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kerry',
			'email' => 'kg4005@hotmail.com',
			'password' => 'vj8NQd1Fb3yuwK9V',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sue',
			'email' => 'suec28@gmail.com',
			'password' => 'MZ4l5jzDrd1jiA6k',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Vici',
			'email' => 'resolve@tpg.com.au',
			'password' => 'tYdY8SDvDO5keKTi',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lyn',
			'email' => 'dawson_lyn@hotmail.com',
			'password' => 'u8Kkrx7t3e486fDP',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Precious',
			'email' => 'liran.s@hotmail.com',
			'password' => 'w87g9QEdzhNBcNjh',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Linda',
			'email' => 'lindystemp@gmail.com',
			'password' => 'xk4O8pPOfttXSjmR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jeanette',
			'email' => 'jeanette@lifestreamassociates.com.au',
			'password' => 'cgpT9vmFgb5aruw2',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Dave',
			'email' => 'maynard678@gmail.com',
			'password' => '9vChzS1JP9O3to1c',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Joy',
			'email' => 'jbillings477@gmail.com',
			'password' => 'Hb1U6WQqvblrtMjI',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lani',
			'email' => 'jessomine@westnet.com.au',
			'password' => 'tXticANHCyUyaV86',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Clayton',
			'email' => 'clayton.d.otoole@gmail.com',
			'password' => 'qMqyWcuaSpjBI08P',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Shell',
			'email' => 'rl.weston89@gmail.com',
			'password' => 'LSRNKVVmLaLysZry',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Danny',
			'email' => 'dp.ragless@gmail.com',
			'password' => 'dtPi6w9gR1jTzaCU',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ken',
			'email' => 'zenkenmassage@gmail.com',
			'password' => 'mrXGtxtaMOSfIkHL',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Le',
			'email' => 'leoniew73@gmail.com',
			'password' => 'JWmkdgisLueysmm8',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Carla',
			'email' => 'carlabananas@hotmail.com',
			'password' => 'YzeTR3e7G8E73SWg',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Andy',
			'email' => 'andylivesinoz@gmail.com',
			'password' => '12cOIdtL4sJihp64',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jenny',
			'email' => 'jennyparenteau@gmail.com',
			'password' => '8lXJDVrEeagSPSTS',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Steve',
			'email' => 'steve@serendigity.net',
			'password' => '2ilge7S2G7p5I3ty',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Fiona',
			'email' => 'meefeefee@yahoo.co.uk',
			'password' => 'FnDoL68isV43KLU6',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Stephanie',
			'email' => 'hicksatmerton@hotmail.com',
			'password' => 'x33V9WGF40kY73nh',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Yazmin',
			'email' => 'yazistemp@gmail.com',
			'password' => 'USY9ZzagxNowZxHU',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cass',
			'email' => 'casslloyd2@yahoo.com.au',
			'password' => 'Rxp2UnhnBv9KhdQ6',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Karla',
			'email' => 'karla.quinn@uqconnect.edu.au',
			'password' => 'boXZGoEe0AGjcfCM',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'David',
			'email' => 'davo101lap@gmail.com',
			'password' => '4NMG2uqZVwVr3HQO',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Glenda',
			'email' => 'glenda-eade@hotmail.com',
			'password' => 'gRl63gdaJqwFciXm',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Caz',
			'email' => 'caztpix@gmail.com',
			'password' => 'biKmVCSisYUfThw5',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tamara',
			'email' => 't.maree@hotmail.co.nz',
			'password' => 'Gzr7YtdgzHX1tOTn',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kath',
			'email' => 'kathydavis1@bigpond.com',
			'password' => 'MGmS0tD9UxXGQ9PX',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Suzy',
			'email' => 'suzy@freeorganic.com.au',
			'password' => 'soNjFJeSbwcUiKFR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Trev',
			'email' => 'trevjfranklin@gmail.com',
			'password' => 'bnqYbwd0dNPF1m0J',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Mark',
			'email' => 'mark@foodsourcegroup.com.au',
			'password' => '5Rymi0azcXp7Exyz',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bibi',
			'email' => 'bibianastanfield@yahoo.de',
			'password' => 'oEV6S7I3R9M8W8lq',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ken',
			'email' => 'kennyo@westnet.com.au',
			'password' => 'tRoXwqP7MIhGUkWR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sya',
			'email' => 'syawruss@yahoo.com.au',
			'password' => 'F6FzfJhilN0nooPT',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cecilie',
			'email' => 'lovefromsarika@hotmail.com',
			'password' => 'whwn2opUPmF1jmkM',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Joanne',
			'email' => 'wattlebeeblossom@gmsil.com',
			'password' => 'alCGvgWOzppcv9gW',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ali',
			'email' => 'a.tuddenham@yahoo.com',
			'password' => '64nnukC4qG8Si78B',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Julie',
			'email' => 'juliefauser@bigpond.com',
			'password' => 'IqRSY5HDDv7NEEjX',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jodie',
			'email' => 'berirock@optusnet.com.au',
			'password' => 'YmZOGRTE0k1V9eOl',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jackson',
			'email' => 'whittojnr@gmail.com',
			'password' => 'GLE6MqWd7xria0xS',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'B',
			'email' => 'planetbgirl@hotmail.com',
			'password' => 'wc9gPy01ZAsgHRp3',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Skye',
			'email' => 'skye.ba.leong@gmail.com',
			'password' => 'NxoeEQuvGexJHSFx',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sarah',
			'email' => 'sarah_ann_m@hotmail.com',
			'password' => 'SmFa0HfdVpNx1ptl',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Leigh',
			'email' => 'leigh.cam@hotmail.com',
			'password' => 'ZYm5sXOIc0ygJbJh',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Janey',
			'email' => 'janeyonearth@yahoo.com',
			'password' => 'xdUdmlXtRzQDRxmT',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Gumala',
			'email' => 'colleen66cv@gmail.com',
			'password' => 'v3QeWA43T1yxxzjb',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Brendan',
			'email' => 'brendan1968@gmail.com',
			'password' => 'z17db4z5MX310WV1',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Heather',
			'email' => 'purplefeather15@bigpond.com',
			'password' => 'Io0bN90kZeuLKTUb',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Al',
			'email' => 'allan.norman@live.com.au',
			'password' => '7LOs8ZUGiwUiStJd',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sue',
			'email' => 'suerobs43@gmail.com',
			'password' => 'Dh9XEPJh64lnCTsr',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Carsten',
			'email' => 'carsten@lifejoy.info',
			'password' => 'LW2N77Kj35rUjUsA',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Garry',
			'email' => 'garrywayne50@gmail.com',
			'password' => 'aHlh0kfpqtaZ4BBz',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bren',
			'email' => 'brendaholligan@yahoo.com.au',
			'password' => 'ZJsPCWTv15Y5qKFP',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Carmel',
			'email' => 'carmelstrphenson@gmail.com0',
			'password' => 'l7Y8TuaGitYHn5YI',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Heidi',
			'email' => 'heidi@eclecticdreams.com.au',
			'password' => 'WUSrqIHoEUMD9e8k',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Leah',
			'email' => 'lschofield007@gmail.com',
			'password' => 'N0WsWDWAly3Da5uE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Neri/ Niz',
			'email' => 'eeco@bikerider.com',
			'password' => 'v0BYq0XtClDWW9JE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Deanne',
			'email' => 'deanneminniecon@hotmail.com',
			'password' => '96TYkRzcRGwFKOmi',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Hannah',
			'email' => 'hannahcondie@gmail.com',
			'password' => '7zmJXDK3QtbPNXbe',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jenni',
			'email' => 'jenniharmony@hotmail.com',
			'password' => 'e2cVqLgY98xBNAvo',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Starman',
			'email' => 'damionwhite40@gmail.com',
			'password' => 'PwP0w4GE6irsbWU3',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Otto',
			'email' => 'ottolechner52@gmail.com',
			'password' => '9ru3bcOrjEL36yH9',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sonja',
			'email' => 'annicha09@gmail.com',
			'password' => 'VwxDXwESBe8F2Rb5',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tim',
			'email' => 'atccontractors@hotmail.com',
			'password' => 'iUSx6XTtzb5kpOBE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Shaz',
			'email' => 'shazward@hotmail.com.au',
			'password' => 'wXUM8v9JNlOxY9AE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sheila',
			'email' => 'sheiladuncan2010@hotmail.com',
			'password' => 'G6G883mlsjItKCc2',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ian',
			'email' => 'iangordon2323@yahoo.com.au',
			'password' => 'Yif58iYXFinqOFSs',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lea',
			'email' => 'lushcottage@gmail.com',
			'password' => '7v88pBezWcLa5DSL',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Richard',
			'email' => 'mochelle@acenet.net.au',
			'password' => 'pZQw8uwZHsp1OZ2K',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bruce',
			'email' => 'bdk.gardens@gmail.com',
			'password' => 'qKgc31WV6UzqsuqW',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Benny',
			'email' => 'gaymliddington@gmail.com',
			'password' => 'QcYcrBR45cq85u0F',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Annie',
			'email' => 'annetterichardson27@gmail.com',
			'password' => '2f9oM4rzLHULVDP8',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'David',
			'email' => 'david.crowden.music@gmail.com',
			'password' => 'cTvxEtCStGjkEO68',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tomás',
			'email' => 'tneira@gmail.com',
			'password' => '9OxRvkMakLF392on',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Stu',
			'email' => 'stuart452@gmail.com',
			'password' => 'R6WlpY43CipLZhg7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Elle',
			'email' => 'elleamani@gmail.com',
			'password' => 'vaI1hXNWUjzEDb5U',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Suzanne',
			'email' => 'suzannemm01@gmail.com',
			'password' => '7Zo3vtSMaeUwfYb2',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Steve',
			'email' => 'snovak@raq.org.au',
			'password' => '45hxoEJVKy23S1xw',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Paul',
			'email' => 'coughlanpa@yahoo.com.au',
			'password' => '5rViLUQzP1sNLYBV',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lachi',
			'email' => 'lachlan.smith184@hotmail.com',
			'password' => 'HK2ZfOKdmjDg0s4j',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Vanessa',
			'email' => 'vparl1@yahoo.com.au',
			'password' => 'Y6d2pnBEP6tfn5jG',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ernie',
			'email' => 'ecmod123@gmail.com',
			'password' => '6Cf1mDPSepdcJvKn',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jemma',
			'email' => 'jem_laur@hotmail.com',
			'password' => '6Y2lAnfaYqQtCY7U',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Emma',
			'email' => 'emmasheppard1984@yahoo.co.uk',
			'password' => '71iNwfhjAidiIWqV',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Morgan',
			'email' => 'morgan.mchugh@hotmail.com',
			'password' => 'MxLiKiielx9Gb8GP',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jan',
			'email' => 'jannyduff@gmail.com',
			'password' => 'jCEB0vOWu8cvMw71',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Keira',
			'email' => 'keirapeace1@bigpond.com.au',
			'password' => 'HeiesViWCamMviCw',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jade',
			'email' => 'jadeconboy@hotmail.com',
			'password' => 'oVCMUaahkrBQbzN8',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jenny',
			'email' => 'jennyangel89@hotmail.com',
			'password' => 'LsWQzsuukstylm0V',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Danielle',
			'email' => 'staceyfamily@hotmail.com',
			'password' => 'KybUS6idea2osUGD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Pomei (Paulmay)',
			'email' => 'pomei2888@gmail.com',
			'password' => '7q6XYoYW9pqhK0vQ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ali',
			'email' => 'ali.maclean@hotmail.com',
			'password' => 'VjiefyIe5WV5VFRO',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Georgia',
			'email' => 'georgia_sykes@hotmail.com',
			'password' => 'SdWFqbfp8aReh0NY',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Claudia',
			'email' => 'claudia.oberholzer@yahoo.com.au',
			'password' => 's9gYptazo9CYgcRt',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Levi/Levius/Pedro',
			'email' => 'l_n022@student.usc.edu.au',
			'password' => 'zyj0GOF0gFIvXHKF',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Dan',
			'email' => 'om3gad@hotmail.com',
			'password' => 'gDUwvn4Octmywkcs',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Barb',
			'email' => 'barbie.dee@hotmail.com.au',
			'password' => 'JDhfKtE4gbCEMhgv',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Di',
			'email' => 'dicollier@hotmail.com',
			'password' => 'KJEjItYx7xTn1SKS',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Soula',
			'email' => 'soula.giannitis@yahoo.com',
			'password' => 'fzUD158ZAn0RsMcx',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ben',
			'email' => 'bushy.bensheppard@gmail.com',
			'password' => 'NR1wdhBNeMAuhQAp',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'June',
			'email' => 'fruityjune2@gmail.com',
			'password' => 'PK2ogUX5245hY7cX',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Holly',
			'email' => 'hlangfield1@gmail.com',
			'password' => 'A1EOYnN16hHYv8Um',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Christine',
			'email' => 'christine55g@optusnet.com.au',
			'password' => 'R0D9JkDoUEShjqgB',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Liana',
			'email' => 'liana.vermast.95@live.com.au',
			'password' => 'E8kNLkSVmrQoHxfx',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Leeza',
			'email' => 'leeza@peacockpaper.com.au',
			'password' => 'nCQeJiygipSSucAN',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Chris',
			'email' => 'chris_riordan@hotmail.com',
			'password' => 'lHCeay2yibVhssZ7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tam',
			'email' => 'tammynyree@hotmail.com',
			'password' => 'tsTBtU2gLflzGG4C',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ty',
			'email' => 'contact.ntn@gmail.com',
			'password' => 'MnIEDGn0lsihQAHN',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jordan',
			'email' => 'jordan.austin27@gmail.com',
			'password' => 'c9yzGck3Gjz9kw02',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Victoria',
			'email' => 'fun@playlearnplay.com.au',
			'password' => 'KcZQbp7d3UjNDBle',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Graham',
			'email' => 'gnott47@gmail.com',
			'password' => '6uZ0iQFFrsZwNgNu',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Carlos',
			'email' => 'chevera1950@hotmail.com',
			'password' => 'M4eQwkrIyIkYaWRq',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Dave',
			'email' => 'callingdave@hotmail.com',
			'password' => '1oAhMEtOtkSxv8Y9',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Diane',
			'email' => 'diane.somers-cook@bigpond.com',
			'password' => '7jZA2SmveYI1ocsB',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ninindi',
			'email' => 'nemiliajohnstone@gmail.com',
			'password' => 'vyUO4KbkvBzWuMvK',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Nicole',
			'email' => 'nicolebachler@live.com.au',
			'password' => 'q84IZVweF1jcFBta',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lyndelle',
			'email' => 'lark19@live.com.au',
			'password' => '1OkjPIfCiJ9D4XGt',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Angus',
			'email' => 'angus.rotherham@live.com',
			'password' => 'Asj1YOO19T1jEnuR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Maxine',
			'email' => 'maxinesmith61@hotmail.com',
			'password' => 'jZYpbICw8DRWe94u',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kevin',
			'email' => 'poweritdown@hotmail.com',
			'password' => 'LG5mNLai7b8enUnm',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Peta',
			'email' => 'peta.goold@me.com',
			'password' => 'VvS4HxX0YGRDI4UN',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Antara',
			'email' => 'aquatic.antara@gmail.com',
			'password' => 'byN2144eTPeNTHWO',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Matt',
			'email' => 'matdie@hotmail.com',
			'password' => 'g9wFebopq3FdnI80',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sue',
			'email' => 'suewashere@hotmail.com',
			'password' => 'rjUgkafeluSLWoeL',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cat',
			'email' => 'catt8151@gmail.com',
			'password' => 'NnxOQqdQUg1skhqP',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Pam',
			'email' => 'psmithcontact@gmail.com',
			'password' => 'ec70DH8llXovrzv8',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Thripence',
			'email' => 'thripence44@gmail.com',
			'password' => 'QJ61lY3NC55PpDoR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Susan',
			'email' => 'smbrown@pghbricks.com.au',
			'password' => '23NdH2ncqvWMNFPD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kerry-Anne',
			'email' => 'kerryannebourke@gmail.com',
			'password' => 'g0dTmrjeCMhV4RPH',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ian',
			'email' => 'ianbbrady@gmail.com',
			'password' => 'mB6ZUgATlZRQka1Y',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Marian',
			'email' => 'marian@keystonearchitects.com',
			'password' => 'FtkUxnBgbiPuc8YK',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lea',
			'email' => 'ellcee8@yahoo.com',
			'password' => 'kRw3psaGnN8cltKe',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Fiona',
			'email' => 'fiona.cooke92@gmail.com',
			'password' => 'UQizMOgMDFzZIzSv',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tracy',
			'email' => 'tracylewis007@live.com',
			'password' => 'TGmttAx33Hg2bWAk',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Margaret',
			'email' => 'marggrace@gmail.com',
			'password' => 'Xu535Fxb3pPlhXhe',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Shane',
			'email' => 'sjoyce1@bordernet.com.au',
			'password' => 'sV5Fy59DFGLt49oB',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Mitch',
			'email' => 'mitch.c.tanner@outlook.com',
			'password' => '499dkFzZplUUNax7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Deanne',
			'email' => 'gracedeanne8@gmail.com',
			'password' => 'cPxOo207WAsuujqt',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lynda',
			'email' => 'lynda.rush@bigpond.com',
			'password' => 'Zc3cn8e73HL812K6',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sadie',
			'email' => 'sadiegjones@yahoo.com.au',
			'password' => 'mPNSXAF39SNoMnj7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jay',
			'email' => 'david.penman@gmail.com',
			'password' => 'T4sgC0d1eAXNxBkm',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kimbo',
			'email' => 'k.hinckfuss@gmail.com.au',
			'password' => 'fpAVvEZ50HQzup3K',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Maree',
			'email' => 'maree1964@yahoo.com',
			'password' => '2qUrnUJ4MtkyglX1',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Maria',
			'email' => 'maria.zann@uqconnect.edu.au',
			'password' => 'S0CMjQEnlVJ0ql0f',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Marilyn',
			'email' => 'mazza.727@hotmail.com',
			'password' => 'CCodflKOMEzLW9Yt',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bob',
			'email' => 'bobwords@ozemail.com.au',
			'password' => 'iiJkXPHTVAF72CEk',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Brenda',
			'email' => 'todd.brenda@bigpond.com',
			'password' => 'PvEutpnZAeG2pwBc',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sue',
			'email' => 'suesten@gmail.com',
			'password' => 'OHQib224rHwkWAx2',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Fee',
			'email' => 'ftay5096@gmail.com',
			'password' => 'QrTlP6iJNEefVmxB',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ann',
			'email' => 'marieb@gil.com.au',
			'password' => 'T9hHHsMcp8Nmm0dD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Asta',
			'email' => 'joliasta@hotmail.com',
			'password' => 'SHODH8aCFgEsbujZ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jen',
			'email' => 'fugliez78@icloud.com',
			'password' => 'x7rGPIzmhJ6eAieh',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jude',
			'email' => 'judith.venn@optusnet.com.au',
			'password' => 'LEc5mByUjbEwepGK',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Stuey',
			'email' => 'stuartv1@optusnet.com.au',
			'password' => 'faXOsLbxGEPGK7Qn',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Margi',
			'email' => 'ocohood@gmail.com',
			'password' => 'vtHUgzuO2tMB8DPZ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lina',
			'email' => 'lina.hammond@lizz.com.au',
			'password' => 'N4MyTPyNXhoKmSut',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Shaz',
			'email' => 'kprfc69@optusnet.com.au',
			'password' => 'kOHVsEd509LPW1w9',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cheryl',
			'email' => 'cheryll.62@hotmail.com',
			'password' => '6XZQIvlpqunLuyLl',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Andrew',
			'email' => 'andymet@gmail.com',
			'password' => '46epXpjIdDYohGvR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Linda',
			'email' => 'pdscharf@yahoo.com.au',
			'password' => 'OnbtyChYxouPJ1V9',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jane',
			'email' => 'janebrouet@westnet.com.au',
			'password' => 'rX271M21Djv0Gbir',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Trish',
			'email' => 'pjef2060@gmail.com',
			'password' => 'QEyEDhCcblbGRul4',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kevin',
			'email' => 'kepaint07@gmail.com',
			'password' => 'okFCoSSSFlFkpPgd',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Dan',
			'email' => 'aumrah.donash@gmail.com',
			'password' => 'HskllhUBDlkMeoNw',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'John',
			'email' => 'johndwoods@hotmail.com',
			'password' => '1qJ7z5gUsOtBX3MN',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Zondrya',
			'email' => 'perpetualstars1@gmail.com',
			'password' => 'J7lblpKp5dGsC7xa',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sarah',
			'email' => 'redcrowband@icloud.com',
			'password' => 'vEmedelCkeb7tCoQ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Rainee',
			'email' => 'raineedennis.12@hotmail.com',
			'password' => '1h9YOew9y55glFnd',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Maz',
			'email' => 'mazziistarr@gmail.com',
			'password' => '78p56Cyq4EdmLkHN',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Naveen',
			'email' => 'trangpham.wf@gmail.com',
			'password' => 'VE6guNqLQdn5MsSO',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Christine',
			'email' => 'christineradcliffe@yahoo.com',
			'password' => 'JHuozY2GnvLDJbbv',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Deni',
			'email' => 'awok@bigpond.com',
			'password' => 'gNnrrDUtoepeQev2',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Mimi',
			'email' => 'mimiebejer@yahoo.com.au',
			'password' => 'TpsP7EgNnpmobrWD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jane',
			'email' => 'janeedit@gmail.com',
			'password' => 'ns6pVSdWrxjPWmqI',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Leesa',
			'email' => 'poolrenovation@bigpond.com',
			'password' => 'unVpMzc7Cs8a8rgN',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sky',
			'email' => 'skyfox@live.com.au',
			'password' => 'ewmkzf8bxKid7mTz',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Pat',
			'email' => 'patcraigie@gmail.com',
			'password' => 'EynMooTf3hvv6mLr',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tahnz',
			'email' => 'tanyas_a_star@hotmail.com',
			'password' => 'THpHcJvgtYBYL4PH',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Roni',
			'email' => 'foodthatsings@gmail.com',
			'password' => 'tehhrKvm1TsEELnM',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jo',
			'email' => 'jofleming48@gmail.com',
			'password' => 'UgFrgSDZJHrj5PHX',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Michelle',
			'email' => 'rrrr27au@yahoo.com',
			'password' => 'B2vojPnph9sonGqs',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sue',
			'email' => 'su@wellnessonthemove.com.au',
			'password' => 'uqhmrIfsf1SwN60N',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Mark',
			'email' => 'markingtime@iinet.net.au',
			'password' => 'L7ItrcpN6zYWWLsJ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Troy',
			'email' => 'troybaxter@gmail.com',
			'password' => 'w8lSUyfyrmnhPgzd',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ian',
			'email' => 'ian@f3-design.com.au',
			'password' => 'dKgHRJpxQdeLWmx4',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Brian',
			'email' => 'find.briancurry@gmail.com',
			'password' => 'w9FTW6AcYoY5PD0J',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jade',
			'email' => 'jade.cromwell@uqconnect.edu.au',
			'password' => 'OQf0yIBkKIGBR6tD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Hannah',
			'email' => 'jeerunt@gmail.com',
			'password' => 'dUGqba8ezDDUbvt4',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Travis',
			'email' => 'travis@earsman.com',
			'password' => 'PUR86nVGrrahjGz4',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lauren',
			'email' => 'peterri@live.com.au',
			'password' => 'vaI1hXNWUjzEDb5U',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Amelia',
			'email' => 'aliciabryant13@gmail.com',
			'password' => '7Zo3vtSMaeUwfYb2',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Timtam',
			'email' => 'timtam124@hotmail.com.au',
			'password' => '45hxoEJVKy23S1xw',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ammu',
			'email' => 'ancilytreesashaji222@gmail.com',
			'password' => '5rViLUQzP1sNLYBV',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Allie',
			'email' => 'allie.knowles18@gmail.com',
			'password' => 'HK2ZfOKdmjDg0s4j',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Claire',
			'email' => 'clairemeraki@gmail.com',
			'password' => 'Y6d2pnBEP6tfn5jG',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bruno',
			'email' => 'bfpio88@gmail.com',
			'password' => '6Cf1mDPSepdcJvKn',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Maya',
			'email' => 'mayara.pattoli@yahoo.com.br',
			'password' => '6Y2lAnfaYqQtCY7U',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Adam',
			'email' => 'agunt7@yahoo.com',
			'password' => '71iNwfhjAidiIWqV',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Alexander',
			'email' => 'alexanderhendry1@gmail.com',
			'password' => 'MxLiKiielx9Gb8GP',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jacquie',
			'email' => 'jacquiebrydon@gmail.com',
			'password' => 'jCEB0vOWu8cvMw71',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Yvonne',
			'email' => 'yvcampbell@eftel.net.au',
			'password' => 'HeiesViWCamMviCw',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tina',
			'email' => 'tinaterry@live.com.au',
			'password' => 'oVCMUaahkrBQbzN8',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bree',
			'email' => 'sahajadesigns@gmail.com',
			'password' => 'LsWQzsuukstylm0V',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jo',
			'email' => 'joannefratus@gmail.com',
			'password' => 'KybUS6idea2osUGD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Roger',
			'email' => 'rogergb33@hotmail.com',
			'password' => 'uWN8XVvCfdvIinTI',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kim or Ava',
			'email' => 'rosenberg.kim@gmail.com',
			'password' => 'CGB4RRuUq0BEkjJ9',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Han',
			'email' => 'khahan1809@gmail.com',
			'password' => 'WgiKFcN9FYw9VjU7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lex',
			'email' => 'scopesponge@gmail.com',
			'password' => 'Sg8nzldcbfrYxFbA',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Willow',
			'email' => 'willowjoy11@gmail.com',
			'password' => 'ObsiKHGZp8cKHppU',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jasmine',
			'email' => 'j.ross@uqconnect.edu.au',
			'password' => 'lSCDtL98cZqDBQTB',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Angie',
			'email' => 'am-qld@hotmail.com',
			'password' => 'z8dEovVeHU8LKtoB',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tracie',
			'email' => 'traciejb8@gmail.com',
			'password' => 'soNjFJeSbwcUiKFR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Drew',
			'email' => 'phylos.fett@gmail.com',
			'password' => 'bnqYbwd0dNPF1m0J',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Bernard',
			'email' => 'bernardhort4876@gmail.com',
			'password' => '5Rymi0azcXp7Exyz',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Britt',
			'email' => 'brittanymanaia@gmail.com',
			'password' => 'oEV6S7I3R9M8W8lq',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Fritz',
			'email' => 'fritzdummermuth@hotmail.com',
			'password' => 'ynFUAOuqmaq1Ym3k',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ross',
			'email' => 'ross517@yahoo.com.au',
			'password' => 'tRoXwqP7MIhGUkWR',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sky',
			'email' => 'soaringskyeorganics@gmail.com',
			'password' => 'F6FzfJhilN0nooPT',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Keeley',
			'email' => 'keeleynorman@gmail.com',
			'password' => 'whwn2opUPmF1jmkM',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Esko',
			'email' => 'dipadesign@gmail.com',
			'password' => 'alCGvgWOzppcv9gW',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jenny',
			'email' => 'jennyx2804@yahoo.com',
			'password' => '64nnukC4qG8Si78B',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Haider',
			'email' => 'haider_ha@hotmail.com',
			'password' => 'IqRSY5HDDv7NEEjX',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Zahra',
			'email' => 'zbato1@gmail.com',
			'password' => 'YmZOGRTE0k1V9eOl',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Crystal',
			'email' => 'crissie.m@hotmail.com',
			'password' => 'ZdgpzUxP3tzwGEdd',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Juliette',
			'email' => 'jules.g.sharp@gmail.com',
			'password' => 'RNlq6pXYuEkvm6MK',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Gav',
			'email' => 'circleoflove@outlook.com',
			'password' => '3thNDdMaH83Jmrqw',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Luke',
			'email' => 'karma30m@yahoo.com',
			'password' => 'C47UUVp6qFJmvgHv',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Claire',
			'email' => 'eclairee@yahoo.com',
			'password' => 'V5Xu0VO5e5usNekE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lucia',
			'email' => 'tome.88@live.com',
			'password' => 'dnl0Q5UlupvjBY8V',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Atlanta',
			'email' => 'atlantarosewessberg@gmail.com',
			'password' => 'iWjiR2pfIx4B3WCj',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jeff',
			'email' => 'jeff@coomooroo.net',
			'password' => '3y1jiVnAQWCH3Y6f',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Glenda',
			'email' => 'glenda@abeo.com.au',
			'password' => 'ygRIsnJLIDJzFiUa',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Emma',
			'email' => 'emsilverthorne@hotmail.com',
			'password' => 'BofYaM5MLJZOIjEc',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Helen',
			'email' => 'catbirdgal@gmail.com',
			'password' => 'B9aGGFyHFfiZnnSK',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Pierre',
			'email' => 'punyaji@gmail.com',
			'password' => 'GLcsxj3O9xjhqWnj',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ros',
			'email' => 'rossiebarr@hotmail.com',
			'password' => 'efde8PPWWir4wrBk',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Clare',
			'email' => 'clarebeverly@hotmail.com',
			'password' => 'kSO8StXZaodxZOgZ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Donna',
			'email' => 'windmilldc@yahoo.com',
			'password' => 'SSKgSGFOVKqzzCeE',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Glenn',
			'email' => 'orecrystaltheatre@live.com',
			'password' => 'YtSds2mNFKXba8ML',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Marko',
			'email' => 'markocimesa@yahoo.com.au',
			'password' => 'wuotp4DbfqlXmrif',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Brendan',
			'email' => 'bdelaney@pacluth.qld.edu.au',
			'password' => 'ZkiPXfTTy8aeRFWs',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Todd',
			'email' => 'toddfauser@bigpond.com',
			'password' => 'nebgyrXO9UEyLa1N',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Thea',
			'email' => 'theasbook@gmail.com',
			'password' => 'UkAGlF1e09j9wjSP',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kevin',
			'email' => 'hintertech@gmail.com',
			'password' => 'iqSg2dfIRbIuqbnI',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Mike',
			'email' => 'mike-fitzpatrick@hotmail.com',
			'password' => 'bcP2B09yxlVkzVrl',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lesley',
			'email' => 'lesleymaureen@gmail.com',
			'password' => 'gJAgfT3sgD6y26uf',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kim',
			'email' => 'kimh@goggo.com.au',
			'password' => 'zGqbRQZ6KGtAsZ1X',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Arisa',
			'email' => 'arisacarol@gmail.com',
			'password' => 'FztTOnTQY4KQwpql',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Morgan',
			'email' => 'mjeff43@gmail.com',
			'password' => 'CoX9D4n1ALMSmbP7',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Johanna',
			'email' => 'johannalacy82@gmail.com',
			'password' => 'zVUgeqyQg0gxK0aQ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Gay',
			'email' => 'visionpower@aapt.net.au',
			'password' => '5nGyGeB1GR7GvJl1',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jodie',
			'email' => 'cobhearthome@gmail.com',
			'password' => '8XJkvDiKuVcXZMBc',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Gavan',
			'email' => 'gavanmck@yahoo.com.au',
			'password' => 'd6ZZaYx51iEMNZOD',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ray',
			'email' => 'rayloo@bigpond.net.au',
			'password' => 'q94UJkwIwpjQkIER',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'June',
			'email' => 'jqk6448@yahoo.com.au',
			'password' => 'Hzon34RGeowg56i8',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Squire',
			'email' => 'squiresinn@hotmail.com',
			'password' => 'JLPmktaaHAd32I3t',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ian',
			'email' => 'iansmith0802@gmail.com',
			'password' => 'UzOHvnm9sbBfq7rW',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Teekah',
			'email' => 'teekah@gmail.com',
			'password' => 'zRQOJPv0KXeH871i',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jason',
			'email' => 'suskaj@yahoo.com',
			'password' => 'wuotp4DbfqlXmrif',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sue',
			'email' => 'susie-t015@bigpond.com',
			'password' => 'ZkiPXfTTy8aeRFWs',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cath',
			'email' => 'cmaryt17@yahoo.com',
			'password' => 'wdrDuy3p6KolZ5bY',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Phil',
			'email' => 'phil.watts@lwb.org.au',
			'password' => 'tsChYr6ybqjkSu6G',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cowboy',
			'email' => 'cowboyconnection@bigpond.com',
			'password' => 'bmkC9z58pOYWNmlL',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Emily',
			'email' => 'allstringsattachedband@gmail.com',
			'password' => 'A3zTwsakzBlXhl95',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Phil',
			'email' => 'fineearthfoods@iprimus.com.au',
			'password' => 'QGvCyeFDOnCx5K1g',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Michelle',
			'email' => 'woodfloria@gmail.com',
			'password' => 'a0r4MOpDCIizMHK3',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Karin',
			'email' => 'kwagner.1954@hotmail.com',
			'password' => '0223bGgTLG2CVCFL',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Ron',
			'email' => 'zarra15@hotmail.com',
			'password' => 'v9QrCLkoMejwBFfu',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Paul',
			'email' => 'jennypaul@activ8.net.au',
			'password' => 'NSmSFk413sThJSQG',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Tom',
			'email' => 'seedlingsjobs@gmail.com',
			'password' => '3rqM93KupHzOG2eq',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lenore',
			'email' => 'lenore808@gmail.com',
			'password' => '4oML8fZQgUjZE3MN',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Kerry',
			'email' => 'synergymoon1@gmail.com',
			'password' => 'iDRTdfAdWo4BttyA',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Angel',
			'email' => 'angel76love@yahoo.com.au',
			'password' => 'AKtEqHQgJgnER9ez',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Carmel',
			'email' => 'carmelstephenson@gmail.com',
			'password' => 'jTmR3WoGUQPQgS0P',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Pete',
			'email' => 'surfbgood@yahoo.com.au',
			'password' => 'm9dZuRo90xtVovDm',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Cherry',
			'email' => 'cherrythevegan@gmail.com',
			'password' => '6bLHswfle5l9MgTu',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Moonbeam',
			'email' => 'yvonne.dipold@gmail.com',
			'password' => 'pQ4vH8FyKhDU6PYg',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Susan',
			'email' => 'susan.ferrar7@bigpond.com',
			'password' => 'yP9LDVAe6CuhGFIX',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Angela',
			'email' => 'angela1freedom@yahoo.com',
			'password' => '2YDMusB1Xaz2bNmQ',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Simon',
			'email' => 'smnwlls58@gmail.com',
			'password' => '76115uOOWxt0CfMf',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Barry',
			'email' => 'barrym53@gmail.com',
			'password' => 'Hzon34RGeowg56i8',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Sybil',
			'email' => 'sybilmaclure7@gmail.com',
			'password' => 'UzOHvnm9sbBfq7rW',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Imogen',
			'email' => 'imogen@st.net.au',
			'password' => 'QGvCyeFDOnCx5K1g',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Rosemarie',
			'email' => 'straf5@live.com.au',
			'password' => 'q94UJkwIwpjQkIER',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Emma',
			'email' => 'emma.j.mitch@gmail.com',
			'password' => 'kKfnLjCzHkRMKs19',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lyn',
			'email' => 'lyn_57@hotmail.com',
			'password' => 'H95TQTuEkr8lfmXK',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jennifer',
			'email' => 'msjen.qld@gmail.com',
			'password' => 'BzCLL4FFotctSk4a',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Lynette',
			'email' => 'lynette.childe@bigpond.com',
			'password' => '3Ord80McJV4qxLOw',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Jen',
			'email' => 'respbest@optusnet.com.au',
			'password' => 'JLPmktaaHAd32I3t',
		]);
		$this->insert('{{%invite}}', [
			'name' => 'Linda',
			'email' => 'baberll@yahoo.com.au',
			'password' => 'eGoZK7PAwX31JTu0',
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
