<?php
error_reporting(-1);
require_once 'templates/connect.php';
require_once 'templates/functions.php';
// session_start();

$query = "SELECT * FROM `users`";
$res = $pdo->query($query);
$data = $res->fetch();

$write = "INSERT INTO `users` SET `login` = 'gleb', `pass` = 'Gleb', `name` = 'Gleb', `age` = 25";
$pdo->exec($write);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <p>Имя: <?= $data['name'] ?></p>
            <p>Возраст: <?= $data['age'] ?></p>
            <p>Дата регистрации: <?= $data['date_reg'] ?></p>
            <hr>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/script.js"></script>

</html>