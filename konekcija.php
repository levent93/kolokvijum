<?php

session_start();

$greske = array();
$greske['email'] = '';

$host = 'localhost';
$user = 'root';
$password = '';
$database = '27_12';
$konekcija = mysql_connect($host, $user, $password);
$db = mysql_select_db($database);
?>