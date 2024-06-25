<?php

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
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
                                <a class="nav-link" href="templates/about.php">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="templates/services">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="templates/contacts">Контакты</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i> Вход</a>
                                <?php if (!isset($_SESSION['auth'])) : ?>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="auth.php">Авторизация</a></li>
                                        <li><a class="dropdown-item" href="templates/register.php">Регистрация</a></li>
                                    </ul>
                                <?php else : ?>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="templates/profile.php">Профиль</a></li>
                                        <li><a class="dropdown-item" href="?do=exit">Выход</a></li>
                                    </ul>
                                <?php endif; ?>
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