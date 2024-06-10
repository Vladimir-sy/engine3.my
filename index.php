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
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap_5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <!-- <p>Имя: <?= $data['name'] ?></p>
            <p>Возраст: <?= $data['age'] ?></p>
            <p>Дата регистрации: <?= $data['date_reg'] ?></p>
            <hr> -->
        </div>
        <div class="container">
            <!-- <?php foreach ($data as $key => $value) : ?>
                <p>Name: <?= $value['login'] . ',' . $value['pass'] . ',' . $value['name'] . ',' . $value['age'] . ',' . $value['date_reg'] ?></p>
            <?php endforeach; ?> -->
        </div>
    </div>
</body>
<script type="text/javascript" src="js/script.js"></script>

</html>