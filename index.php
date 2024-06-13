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
    <div class="container wrapper">
        <header class="container-fluid header p-2 mb-2">
            <!-- <div class="row"> -->
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <a class="navbar-brand header-logo" href="/">MyBlog</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i> Вход</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Админ панель</a></li>
                                    <li><a class="dropdown-item" href="#">Выход</a></li>
                                    <!-- <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li> -->
                                </ul>
                            </li>
                            <!--  <li class="nav-item">
                                    <a class="nav-link link-primary" href="#"><i class="fa-solid fa-user"> Вход</a>
                                </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- </div> -->
        </header>

        <section class="container-md col-lg-12 mb-2">
            <div class="row">
                <h2 class="text-center">Топ публикации</h2>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/img6_1.jpg" class="d-block w-100 img-fluid" alt="Image">
                        <div class="carousel-caption-edit d-none d-md-block">
                            <h5><a class="nav-link" href="#">Метка первого слайда</a></h5>
                            <!-- <p>Некоторый репрезентативный заполнитель для первого слайда.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/img7_1.jpg" class="d-block w-100 img-fluid" alt="Image">
                        <div class="carousel-caption-edit d-none d-md-block">
                            <h5>Метка второго слайда</h5>
                            <!-- <p>Некоторый репрезентативный заполнитель для второго слайда.</p> -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/img16_1.jpg" class="d-block w-100 img-fluid" alt="Image">
                        <div class="carousel-caption-edit d-none d-md-block">
                            <h5>Метка третьего слайда</h5>
                            <!-- <p>Некоторый репрезентативный заполнитель для третьего слайда.</p> -->
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </section>

        <section class="content container-fluid d-flex flex-wrap p-2 mb-2 gx-5">
            <main class="main col-12 col-md-9 p-2">
                <h3 class="text-center">Последние публикации</h3>
                <div class="post row mb-2">
                    <div class="post-image col-12 col-md-4 text-center mb-2 mb-md-0">
                        <img src="images/img17_1.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="post-text col-12 col-md-8 ">
                        <h2>
                            <a class="nav-link" href="#">Статья на тему динамического сайта...</a>
                        </h2>
                        <i class="far fa-user"> Имя Автора </i>
                        <i class="far fa-calendar"> Mar 11, 2024</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt minima repellat, voluptates placeat molestias architecto excepturi voluptatem recusandae sunt qui impedit quibusdam possimus tenetur ratione! Ut molestias voluptatum nostrum dolorum?
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="post row mb-2">
                    <div class="post-image col-12 col-md-4 text-center mb-2 mb-md-0">
                        <img src="images/img18_1.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="post-text col-12 col-md-8 ">
                        <h2>
                            <a class="nav-link" href="#">Статья на тему динамического сайта...</a>
                        </h2>
                        <i class="far fa-user"> Имя Автора </i>
                        <i class="far fa-calendar"> Mar 11, 2024</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt minima repellat, voluptates placeat molestias architecto excepturi voluptatem recusandae sunt qui impedit quibusdam possimus tenetur ratione! Ut molestias voluptatum nostrum dolorum?
                        </p>
                    </div>
                    <hr>
                </div>
            </main>
            <aside class="aside col-12 col-md-3 p-2 text-wrap d-none d-md-block">

            </aside>
        </section>

        <footer class=" container-fluid d-flex align-items-center footer p-2 flex-wrap">
            <!-- <div class="row d-block"> -->
            <div class="col-12 col-md-9 text-start">
                <h4 class="text-center">copyrighted&#174; 2020-<?= date('Y') ?></h4>
            </div>
            <div class="col-12 col-md-3 text-center">
                <a class="nav-link" href="/">MyBlog</a>
            </div>
            <!-- </div> -->
        </footer>
    </div>

</body>
<script type="text/javascript" src="bootstrap_5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/5cc4ae0ce8.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>