<?php

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
                                <a class="nav-link" href="single.php">О нас</a>
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