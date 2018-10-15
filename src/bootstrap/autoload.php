<?php

if ( ! defined( 'DS' ) ) {
	define( 'DS', DIRECTORY_SEPARATOR );
}

$ROOT = dirname( __DIR__ );

require_once $ROOT . DS . 'vendor' . DS . 'autoload.php';

try {
	( new \Dotenv\Dotenv( $ROOT ) )->load();
} catch ( \Dotenv\Exception\InvalidPathException $e ) {
	die ( 'Please provide .env file at ' . $ROOT . '.' );
}