<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
mb_internal_encoding('UTF-8');
// session_start();

require_once 'config/functions.php';
require_once 'config/connect.php';
// setcookie('data', 'Hello, friends', expires_or_options: time() - 60 * 60, path: '/', httponly: true);
// isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/') : setcookie('counter', 1, time() + 3600, '/');
// setcookie('counter', '', time() - 3600);
// header('Location: /files/inc.php'); //Перенаправление на другую страницу.
// header('HTTP/1.0 304 Not Modified');
// header('HTTP/1.0 404 Not Found');
// header('Content-Type: text/plain; charset=utf-8');
// header('refresh: 5; url=files/inc.php'); //Перенаправление на другую страницу через интервал 'refresh'.
/* ------------------- Скачивание файла ------------------- */
// $path = '/';
// $file = 'index.html';
// header('Content-Type: text/html; charset=utf-8');
// header('Content-Disposition: attachment; filename="' . basename($file) . '"');
// readfile($path . $file);
/* ------------------- Скачивание файла ------------------- */

// require_once 'config/connect.php';
// require_once 'templates/home.php';

/* ----------------------------- Пространство имен классов ----------------------------- */
// use classes\controllers\{Controller, PageController};
// use classes\models\{Model, PageModel};
/* ----------------------------- Пространство имен классов ----------------------------- */


/* ----------------------------- Функция автозагрузки классов ----------------------------- */

/* spl_autoload_register(function ($class) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $ds = DIRECTORY_SEPARATOR;
    $filename = $root . $ds . str_replace('\\', $ds, $class) . '.php';
    if (is_file($filename)) {
        require_once($filename);
        } else {
            out("Такого класса не существует! - " . basename($filename));
    }
    }); */

/* ----------------------------- Функция автозагрузки классов ----------------------------- */

/* if ((isset($_GET["do"])) && ($_GET['do'] == 'exit')) {
    unset($_SESSION['auth']);
    session_destroy();
    header('Location: /');
}

$url = $_SERVER['REQUEST_URI'];
$page = explode('/', $url); */
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
                                <a class="nav-link" href="templates/services.php">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="templates/contacts.php">Контакты</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i> Вход</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="templates/auth.php">Авторизация</a></li>
                                    <li><a class="dropdown-item" href="templates/register.php">Регистрация</a></li>
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
            <div class="content-title col-12 ">
                <h2 class="main-title col-12 text-center text-md-start p-1">Последние публикации</h2>
            </div>
            <main class="main col-12 col-md-8 p-1">
                <div class="post d-block d-md-flex mb-3 p-2">
                    <div class="post-image col-12 col-md-4 text-center mb-2 mb-md-0">
                        <img src="images/img17_1.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="post-text col-12 col-md-8 p-2">
                        <h3>
                            <a class="nav-link link-underline" href="#">Статья на тему динамического сайта...</a>
                        </h3>
                        <div class="block-author mb-2">
                            <span><i class="far fa-user"></i> Имя Автора </span>
                            <span><i class="far fa-calendar"></i> Mar 11, 2024</span>
                        </div>
                        <p class="preview-text d-block">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt minima repellat, voluptates placeat molestias architecto excepturi voluptatem recusandae sunt qui impedit quibusdam possimus tenetur ratione! Ut molestias voluptatum nostrum dolorum?
                        </p>
                    </div>
                </div>
                <div class="post d-block d-md-flex mb-3 p-2">
                    <div class="post-image col-12 col-md-4 text-center mb-2 mb-md-0">
                        <img src="images/img18_1.jpg" alt="Image" class="img-thumbnail">
                    </div>
                    <div class="post-text col-12 col-md-8 p-2">
                        <h3>
                            <a class="nav-link" href="#">Статья на тему динамического сайта...</a>
                        </h3>
                        <div class="block-author mb-2">
                            <i class="far fa-user"></i><span> Имя Автора </span>
                            <i class="far fa-calendar"></i><span> Mar 11, 2024</span>
                        </div>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt minima repellat, voluptates placeat molestias architecto excepturi voluptatem recusandae sunt qui impedit quibusdam possimus tenetur ratione! Ut molestias voluptatum nostrum dolorum?
                        </p>
                    </div>
                </div>
            </main>
            <aside class="aside col-12 col-md-4 p-2 text-wrap d-none d-md-block">
                <div class="col-12 section search mb-3 p-2">
                    <h3 class="">Поиск</h3>
                    <form class="form-search d-block" role="search">
                        <input class="form-control mb-2 search-input" type="search" name="search-term" placeholder="Поиск" aria-label="Поиск">
                        <button class="btn btn-outline-success mb-2 search-btn" type="submit">Поиск</button>
                    </form>
                </div>
                <div class="col-12 section topics mb-3 p-2 text-wrap">
                    <h3 class="">Категории</h3>
                    <ul class="aside-list">
                        <li><a class="nav-link p-1" href="#">Poems</a></li>
                        <li><a class="nav-link p-1" href="#">Quotes</a></li>
                        <li><a class="nav-link p-1" href="#">Fiction</a></li>
                        <li><a class="nav-link p-1" href="#">Biography</a></li>
                        <li><a class="nav-link p-1" href="#">Motivation</a></li>
                        <li><a class="nav-link p-1" href="#">Inspiration</a></li>
                        <li><a class="nav-link p-1" href="#">Life Lessons</a></li>
                    </ul>
                </div>
            </aside>
        </section>

        <footer class="footer container-fluid d-flex align-items-center footer p-2 flex-wrap">
            <div class="footer-about col-12 col-md-4 mb-2 mb-md-0 p-2 align-self-start">
                <h3 class="logo-text text-center text-md-start">Мой блог</h3>
                <p>Мой блог - это обучение создания сайта на PHP, MySQL</p>
                <div class="contact p-1">
                    <h5>Контакты:</h5>
                    <p><i class="fas fa-phone"></i>&nbsp; <span> 8-982-901-82-45</span></p>
                    <p><i class="fas fa-envelope"></i>&nbsp; <span> info@engine3.my</span></p>

                </div>

                <div class="socials p-1">
                    <h5>Соц. сети:</h5>
                    <a class="p-2" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="p-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="p-2" href="#"><i class="fab fa-facebook"></i></a>
                    <a class="p-2" href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-links col-12 col-md-4 mb-2 mb-md-0 p-2 align-self-start">
                <h3 class="text-center text-md-start">Популярные ссылки</h3>
                <div class="">
                    <!-- <ul> -->
                    <a class="nav-link p-1" href="#">События</a></li>
                    <a class="nav-link p-1" href="#">Команда</a></li>
                    <a class="nav-link p-1" href="#">Упражнения</a></li>
                    <a class="nav-link p-1" href="#">Галерея</a></li>
                    <a class="nav-link p-1" href="#">Другое</a></li>
                    <!-- </ul> -->
                </div>
            </div>
            <div class="footer-feedback col-12 col-md-4 mb-2 mb-md-0 p-2 align-self-start">
                <h3 class="text-center text-md-start">Обратная связь</h3>
                <form>
                    <div class="mb-3">
                        <!-- <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label> -->
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите e-mail (info@mail.ru)">
                    </div>
                    <div class="mb-3">
                        <!-- <label for="exampleInputTextArea1" class="form-label">Введите сообщение</label> -->
                        <textarea type="text" class="form-control" id="exampleInputTextArea1" rows="3" placeholder="Введите текст сообщения"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Отправить</button>
                </form>
            </div>
            <div class="footer-copirating col-12 p-2">
                <h6 class="text-center">Copirating&#169; 2020-<?= date('Y') ?>. Design by Yurov</h6>
            </div>
        </footer>
        </footer>
    </div>

</body>
<script type="text/javascript" src="bootstrap_5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/5cc4ae0ce8.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>