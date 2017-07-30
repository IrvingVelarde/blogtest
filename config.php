<?php
define('URL', 'https://mongoblogtest.herokuapp.com/');
define('UserAuth', 'admin');
define('PasswordAuth', 'admin');

$config = array(
	'username' => '',
	'password' => '',
	'dbname'   => 'blogsd',
	//'cn' 	   => sprintf('mongodb://%s:%d/%s', $hosts, $port,$database),
	'connection_string'=> sprintf("mongodb://noheliacavero:admin@ds127443.mlab.com:27443/blogsd")
);

