<?php
if ($url == '/') {
    require_once 'templates/content.php';
} elseif (file_exists("templates/$page.php")) {
    require_once "templates/$page.php";
}
