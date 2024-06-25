<?php
error_reporting(-1);
mb_internal_encoding("UTF-8");
require_once 'config/connect.php';
require_once 'config/functions.php';
// session_start();

// $query = "SELECT * FROM `users`";
// $res = $pdo->query($query);
// $data = $res->fetchAll();

// $write = "INSERT INTO `users` SET `login` = 'gleb', `pass` = 'Gleb', `name` = 'Gleb', `age` = 25";
// $pdo->exec($write);

$login = 'vladimir';
$pass = password_hash('Vladimir', PASSWORD_DEFAULT);
$name = 'Vladimir';
$age = 38;

$param = [
    'l' => $login,
    'p' => $pass,
    'n' => $name,
    'a' => $age
];

// $query = "INSERT INTO `users`(`login`, `pass`, `name`, `age`) VALUES(?, ?, ?, ?)";
// $result = $pdo->prepare($query);
// $result->execute([$login, $pass, $name, $age]);

// $query = "INSERT INTO `users`(`login`, `pass`, `name`, `age`) VALUES(:l, :p, :n, :a)";
// $result = $pdo->prepare($query);
// $result->execute($param);

$url = $_SERVER['REQUEST_URI'];
if ($url == '/') {
    $page = 'Home';
} else {
    $page = substr($_SERVER['REQUEST_URI'], 1);
    if (!preg_match("/^[a-z0-9-]{3,15}$/", $page)) {
    }
}

$page_title = strtoupper($page);

require_once 'templates/main.php';
