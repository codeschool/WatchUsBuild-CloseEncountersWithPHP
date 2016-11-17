<?php
$host = 'mysql';
$db = 'encounters';
$user = 'root';
$pass = 'password';
$charset = 'utf8';

// dsn string
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);
