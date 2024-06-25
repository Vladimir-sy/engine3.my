<?php
require_once '../config/functions.php';
?>

<section class="content container-fluid d-flex flex-wrap p-2 mb-2 gx-5">
    <main class="main col-12 col-md-8 p-2">
        <div class="content-title text-center col-12">
            <h2 class="main-title col-12 p-2">Регистрация</h2>
        </div>
        <div class="col-md-6 post register d-block mb-3 p-2 m-auto">
            <form>
                <div class="mb-3">
                    <!-- <label for="exampleInputEmail2" class="form-label">Адрес электронной почты</label> -->
                    <input type="text" class="form-control" name="login" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Введите логин или e-mail">
                    <!-- <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div> -->
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleInputPassword2" class="form-label">Пароль</label> -->
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword2" placeholder="Введите пароль">
                </div>
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
                </div> -->
                <button type="submit" class="btn btn-primary" name="send">Регитрация</button>
            </form>
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