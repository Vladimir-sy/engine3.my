<?php

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap_5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
    <div class="container wrapper">
        <header class="container-fluid header p-2 mb-2">
            <?php require_once 'header.php'; ?>
        </header>

        <?php require_once 'content.php'; ?>

        <footer class="footer container-fluid d-flex align-items-center footer p-2 flex-wrap">
            <?php require_once 'footer.php'; ?>
        </footer>
    </div>

</body>
<script type="text/javascript" src="bootstrap_5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/5cc4ae0ce8.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>