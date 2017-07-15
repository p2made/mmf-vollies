<?php
return [
	// following line will restrict access to profile, recovery,
	// registration and settings controllers from backend
	'as backend' => 'dektrium\user\filters\BackendFilter',
	'admins' => ['vollies', 'cowboy', 'nahum', 'noel', 'joan', 'john', 'lisa', 'pedro', 'susie', 'tom', 'gay'],
];
