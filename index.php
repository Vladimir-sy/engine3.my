<?php
error_reporting(-1);
require_once 'templates/connect.php';
require_once 'templates/functions.php';
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

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Engin in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap_5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container wrapper">
            <header class="container-fluid header">
                <div class="column">
                    <div class="col-4 header-logotype">
                        <h1 class="">MyBlog</h1>
                    </div>
                    <div class="col-8 header-menu">

                    </div>
                </div>
            </header>

            <main class="container-fluid main">
                <div class="row">
                    <p class=""></p>
                </div>
            </main>
            <footer class="container-fluid footer">
                <div class="row">
                    <p class="text-center">copyrighted@2020-<?= date('Y') ?></p>
                </div>
            </footer>
        </div>

    </div>

</body>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="bootstrap_5.3.3/js/bootstrap.bundle.min.js"></script>

</html>