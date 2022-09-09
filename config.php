<?php

$config = require_once 'database.php';

try {
	$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [
		PDO::ATTR_EMULATE_PREPARES => false,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //wyświetla błędy
	]);
} catch (PDOException $error) {
		exit('Database error');
}