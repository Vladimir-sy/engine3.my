<?php

/* -------------------- User functions! ----------------------- */


/**
 * Функция отладки
 *
 * @param data $data
 * @return array
 */
function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * Функция отладки 2
 * @param $data
 * @param ...$data2
 * @return mixed
 */
function debug2($data, ...$data2)
{
    echo '<pre>';
    var_dump($data, ...$data2);
    echo '</pre>';
}

/**
 * Функция отладки
 * * @param data $data
 * @return array
 */
function debug3($data)
{
    echo '<pre>';
    var_export($data);
    echo '</pre>';
}

/* -------------------- sql queries to the database ----------------------- */
function getData($query)
{
    global $pdo;
    $sql = $pdo->prepare($query);
    $sql->execute();
    $res = $sql->fetch(PDO::FETCH_ASSOC);
    return $res;
}

function getDataAll($query)
{
    global $pdo;
    $sql = $pdo->prepare($query);
    $sql->execute();
    $res = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}
/* -------------------- sql queries to the database ----------------------- */

/* -------------------- Main menu function ----------------------- */
function getMenuAdmin()
{
    $main_menu = [
        'Главная' => '/',
        'Контакты' => '/admin/edit_contact.php',
        'Контент' => '',
        'Услуги' => '/admin/services.php',
        'О нас' => '/admin/edit_about.php',
        'Выход' => '?logout'
    ];

    $menus = '';
    foreach ($main_menu as $menu => $link) {
        $menus .= "<a class=\"container col-md-3 col-lg-3 d-inline-block p-2 m-1 text-wrap alert alert-primary\" role=\"alert\" href=\"$link\" style=\":hover text-decoration: none\">$menu</a>";
    }
    return $menus;
}
/* -------------------- Main menu function ----------------------- */

/* -------------------- User functions! ----------------------- */
/* -------------------- User functions! ----------------------- */

/* -------------------- User functions! ----------------------- */
/* -------------------- User functions! ----------------------- */
/* -------------------- User functions! ----------------------- */
/* -------------------- User functions! ----------------------- */