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

if ((isset($_GET["do"])) && ($_GET['do'] == 'exit')) {
    unset($_SESSION['auth']);
    session_destroy();
    header('Location: /');
}

$url = $_SERVER['REQUEST_URI'];
$page = explode('/', $url);

require_once 'templates/header.php';

if ($url == '/') {
    require_once 'templates/content.php';
} elseif ($url == '/templates/about.php') {
    require_once 'templates/about.php';
}

require_once 'templates/footer.php';
