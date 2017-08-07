<?php

use yii\db\Migration;

class m170806_041318_add_new_applications extends Migration
{
	public function safeUp()
	{
		$this->insert('{{%application}}', [
			'user_id' => 257,
			'availabilityNotes' => '',
			'otherNotes' => '',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 296,
			'availabilityNotes' => 'Thursday- monday',
			'otherNotes' => 'Bars, shop, gates,stage management,\n\nI\'m a registered nurse. Have organised numerous gigs over the years as husband a muso. Have owned an art gallery and shop.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 17,
			'availabilityNotes' => 'I don\'t think i will be available on Friday, however that may change.',
			'otherNotes' => 'Selling drinks tickets if that still exists. My friend and I did this job last year and we would both like to do it again, if possible. Her name is Susan M. Brown.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 359,
			'availabilityNotes' => 'Friday 1st September (from Morning) - Sunday 3rd September (lunch time)',
			'otherNotes' => 'Shop/ Gates /Volunteer hospitality\n\nLove Maleny...love music...love people!',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 317,
			'availabilityNotes' => '',
			'otherNotes' => 'Gates,shop.hospitalit\n\nEx teacher- enjoy working with children',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 398,
			'availabilityNotes' => 'any shift fri- sunday',
			'otherNotes' => 'ticketing, gates, campground, gofer, performer hospitality/transportation, communications, etc.\n\nI have many years coordinating (25) volunteers in the communications committee of the Hudson River Sloop Clearwater\'s festival in NY  http://www.clearwaterfestival.org/  I am happy to jump into any needed slot, including stage management/MC if you have a shortage. I have also performed at that festival with a small skiffle band- I play mandolin, duck call, and "washtub" bass.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 423,
			'availabilityNotes' => 'Thursday 31st August to Sunday 3rd September.',
			'otherNotes' => 'Gates, ticketing, parking, campground\n\nHave volunteer experience at Cobargo folk festival 2017 (NSW), parking, camping and St Albans Folk Festival 2017 (NSW) front office ticketing.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 424,
			'availabilityNotes' => 'Available anytime from Thursday morning 31/8/17 to Sunday late afternoon 3/9/17.',
			'otherNotes' => 'Gates, Shop, Volunteer hospitality.\n\nThis year my husband and I worked at the Cobargo Folk Festival (camping and parking crew) and also at St Albans Folk Festival (cashier and pre-purchased ticketing) and we have attended Woodford Folk Festival several times. My husband Daryl has applied individually online. Weâ€™re flexible about what we do so I am hoping that we can volunteer in some way.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 425,
			'availabilityNotes' => 'I\'m available the days of the festival, so the Friday, Saturday and Sunday',
			'otherNotes' => 'Bars- serving drinks or Bar security would be really greatly appreciated and would help give me more experience otherwise gates, shop or volunteer hospitality are decent enough backups\n\nI have worked at multiple music festivals and have a real live for it, I usually get paired up with Kanani Lyall and we work together as a team, it would be great if could work together',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 426,
			'availabilityNotes' => 'I am available to work at any time during the festival but if possible could i work with crystal bales... we have volunteered together at previous festivals and work very well together... we both have our rsa etc.',
			'otherNotes' => 'preferally Bars... but if not i am able to work anywhere\n\nn/a',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 427,
			'availabilityNotes' => 'Unavailable during the week (before and after). Cannot work Sunday.',
			'otherNotes' => 'Preferably gates or shop.\n\nI am only 15 years old, but am keen to get involved and volunteer. I was wondering if it would be possible for me to still volunteer even though it says you must be 18 or older? I understand if not. Thank you for your time.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 428,
			'availabilityNotes' => '.......during the festival',
			'otherNotes' => 'MC, Gates, Hospitality\n\nThat I\'ve been involved as an MC/Venue-mngr at two of the Illawarra Folkfests, aswell as at a few of the PerisherPeak Musicfests over the years, and have been a vollie assistant to Stage managers at three ByronBay BluesFests.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 429,
			'availabilityNotes' => 'NOT available from midnight to 8am.',
			'otherNotes' => 'MC and Stage Management\n\nI have been involved in live show production since the 1960\'s. Currently I am involved with Woodford Folk Festival ( Folklorica and Hilltop Stage), Peregian Originals, Caloundra Music Festival, Noosa Community Radio, as well as carrying out production work on my film projects of live events across the Sunshine Coast. I run my own film production company and have worked in the international film and television industry since 1975. I have made films of major cultural events and concerts in India, Denmark, Malaysia, USA and Australia.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 396,
			'availabilityNotes' => '',
			'otherNotes' => 'MC - experienced public speakers; Stage Management; Bars - serving drinks; Bar security - checking tickets at entrances; Cleaning\n\nNo problems with public speaking and have had experience as a M.C. but happy to volunteer in most areas.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 430,
			'availabilityNotes' => 'Available throughout the entire festival',
			'otherNotes' => 'Stage Management\n\nI\'ve volunteered and been paid to stage manage for a number of festivals including Woodford Folk Festival, Brisbane Comedy Festival, Splendour in the Grass, St Kilda Festival, Fringe World Festival, Wonderland Festival, 2High Theatre Festival and more.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 431,
			'availabilityNotes' => '2 Nautilus Drive',
			'otherNotes' => 'Stage Management, Gates, Volunteer Hospitality, Shop,\n\nI\'m a third year bachelor of music student at QUT interested in learning about the operational side of the entertainment industry in Queensland. I love the arts culture here and I\'m keen to get involved as best I can.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 432,
			'availabilityNotes' => 'I am available Thursdays to Sundays.',
			'otherNotes' => 'Hi there, I am experienced event professional and would love to come and see what Maleny Music Festival is all about. My first preference is stage management or I would like to be a part of set up so I can see a bit more of the festival. Thank you\n\nI had a shoulder injury in 2015 that makes it difficult to lift CCBs or weights more than 15kg. My passion is events and I am all about music festivals. I am enthusiastic, show initiative and look after the team I\'m working in. Feel free to check out my LinkedIn for more information on my education and experience.  https://www.linkedin.com/in/indianacoelhoking',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 433,
			'availabilityNotes' => 'all weekend except   lunch time Saturday ie noon and 11am to 12:30 pm Sunday...',
			'otherNotes' => 'Gates, ticketing , shop ( I  have done the shop before)..',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 434,
			'availabilityNotes' => 'I currently work Thurs and Fridays as a bookkeeper, however if I have enough notice my manager is quite happy for me to swap days if I need to.',
			'otherNotes' => 'I\'m not sure what RSA is, I\'m happy doing anything. I haven\'t got any hospitality experience, but I have volunteered as a Stage Manager before and I have a lot of experience within customer service roles and administration roles. I am also a musician so understand the music world.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 435,
			'availabilityNotes' => 'Saturday.',
			'otherNotes' => 'I have Chatted to Noel and asked if Rob and I can share our volunteering experience as we have a 9 y/o daughter who needs supervision. We can do one 4 hour shift each. We have already purchased the other ticket. I can do MC, front of house, runner, trouble shooting - whatever. Rob is great on tech or any other jobs.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 436,
			'availabilityNotes' => 'Friday 8am - Sunday 2pm',
			'otherNotes' => 'Bar security - did this last year.\n\nAlready booked and paid for tickets, but don\'t need refunds. We are happy to help out if you are short of vollies.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 437,
			'availabilityNotes' => 'Friday evening to late Sunday afternoon. Can\'t do Friday morning as I run a choir in Brisbane.',
			'otherNotes' => 'I\'m happy to sell tickets at the bar, or work in Treasury, and I\'m a great MC too! Sorry to hear there is a clashing event in Maleny, but I vote for you guys, you have a beautiful festival. I haven\'t got RSA but can get one if you need it. love Nicole\n\nI\'m a member of Cloudstreet. I used to run the Maleny Celtic Winter School. I\'m prepared to wear fairy wings.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 438,
			'availabilityNotes' => '',
			'otherNotes' => 'Could work doing tickets on gate if it\'s largely sit down - have recently broken my ankle (5 weeks ago) so while I will be walking without crutches by the festival - I don\'t want to commit to standing on it for long periods.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 439,
			'availabilityNotes' => 'I am performing on Sunday morning at the Platypus Stage so will not be available that morning. My partner and I can make ourselves available Sunday during the afternoon.',
			'otherNotes' => 'I am a performer and can assist with stage managemnt or MC (public speaking). I have a Cert IV in OHS and am a Senior Investigations Officer so I can assist in Bar or gate security and ticket checking.\n\nI have a chronic back injury and can only undertake administrative duties.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 440,
			'availabilityNotes' => 'Thursday all day',
			'otherNotes' => 'Set up\n\nI play a variety of musical instruments, have experience with sound equipment and know how to treat it well :) But totally happy to pitch in doing whatever needs doing.',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
		$this->insert('{{%application}}', [
			'user_id' => 441,
			'availabilityNotes' => 'I available before, during and after the festival so I am flexible....',
			'otherNotes' => 'Worked with Cowboy last year, set up, pull down, you name it.\n\nHead of Treasury, UTribe festival, preparing floats, managing bar cash, utilizing cash handling experience from working at MCU, managing volunteers etc. Worked at Performers gate at Wood Folk Festival 3 years running (many years ago). I am aiming to do an events management course in the future, so more experience in Treasury or other important areas would be great.\n\nGot a crook back so no heavy lifting or hours staring at a screen for too long',
			'job_choice_1' => 22, 'year' => 2017,
			'availableFromDate' => '', 'availableFromTime' => 0,
			'availableToDate' => '', 'availableToTime' => 0,
			'created_at' => gmdate('Y-m-d H:i:s'), 'updated_at' => gmdate('Y-m-d H:i:s'),
			'created_by' => 1, 'updated_by' => 1,
		]);
	}

	public function safeDown()
	{
		return true;
	}
}
