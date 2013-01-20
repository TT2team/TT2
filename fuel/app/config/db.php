<?php


return array(
    Fuel::DEVELOPMENT => array(
	'type'			=> 'mysql',
	'connection'	=> array(
		'hostname'   => 'localhost',
		'database'   => 'fridaydrink',
		'username'   => 'root',
		'password'   => '',
		'persistent' => false,
	),
	'table_prefix' => '',
	'charset'      => 'utf16',
	'caching'      => false,
	'profiling'    => false,
)
);