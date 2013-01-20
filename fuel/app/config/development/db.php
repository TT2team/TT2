<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(Fuel::DEVELOPMENT => array(
	'type'			=> 'mysql',
	'connection'	=> array(
		'hostname'   => 'localhost',
		'database'   => 'fridaydrink',
		'username'   => 'friday_drinker',
		'password'   => 'beer',
		'persistent' => false,
	),
	'table_prefix' => '',
	'charset'      => 'utf8',
	'caching'      => false,
	'profiling'    => false,
)
);
