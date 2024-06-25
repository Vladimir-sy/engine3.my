<?php

?>



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
                    <a class="nav-link" href="services.php">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts.php">Контакты</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i> Вход</a>
                    <?php if (!isset($_SESSION['auth'])) : ?>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="auth.php">Авторизация</a></li>
                            <li><a class="dropdown-item" href="register.php">Регистрация</a></li>
                        </ul>
                    <?php else : ?>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.php">Профиль</a></li>
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