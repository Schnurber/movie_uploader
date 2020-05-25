<?php



function conf(){
	error_log( 'hallo') ;
	return [
	'driver'	=>	'mysql',
	'host'		=> 	'localhost',
	'user'		=> 	'root',
	'pass'		=> 	'root',
	'database'	=> 	'othmovies',
	'engine'	=>	'InnoDB',
	'domain'	=>	'localhost:8000',
	'secret'	=>  'secret',
	];
}

?>