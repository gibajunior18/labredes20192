<?php
require 'environment.php';

global $config;
$config = array();

define( BASE_URL , 'http://localhost:8080/teste');

if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'teste';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
} else {
	$config['dbname'] = 'teste';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
?>