<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'engine3';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = @new PDO($dsn, $user, $pass, $options);
