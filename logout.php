<?php
header('location: /');
session_start();
$value_button = $_POST["post_button"];

if($value_button !== true) {
	session_destroy();
}
