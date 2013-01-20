<?php
return array(
	'_root_'  => 'drinks/index',  // The default route
	'_404_'   => 'drinks/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);