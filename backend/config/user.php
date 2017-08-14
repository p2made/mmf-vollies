<?php
return [
	// following line will restrict access to profile, recovery,
	// registration and settings controllers from backend
	'as backend' => 'dektrium\user\filters\BackendFilter',
	'admins' => [
		'vollies',              // generic vollies coordinator account - superuser
		'noel',                 // Festival Director - Noel Gardner
		'pedro',                // Vollies Coordinator 2017 - Pedro
		// '',                  // Setup & Bump Out -
		'TonyReynolds',         // Site - Tony Reynolds
		'john',                 // Stages - John Wright
		'tom',                  // Stages - Tom Nealson
		'joan',                 // Bars - Joan Chenery
		'lisa',                 // Treasury - Lisa Reye
		'susie',                // Shop - Susan Tanner
		'christopher.marsh',    // Ticket Gates - Chris Marsh
		// '',                  // Children’s Festival - Kirsty Chalkley
		'Muse4minstrel',        // Vollies’ Tent - Allana Mendells
		'cowboy',               // Fencing contractor - Cowboy
		'nahum',                // Festival web developer
	],
];
