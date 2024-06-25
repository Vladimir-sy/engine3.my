<?php
require_once '../config/functions.php';
?>

<?php require_once 'header.php' ?>

<section class="content container-fluid d-flex flex-wrap p-2 mb-2 gx-5">
    <main class="main col-12 col-md-8 p-2">
        <div class="post single-post d-block mb-3 p-2">
            <div class="content-title text-center col-12">
                <h2 class="main-title col-12 text-md-start p-2">Заголовок конкретной статьи</h2>
            </div>
            <div class="post-image col-12 text-center mb-2">
                <img src="/images/img1.jpg" alt="Image" class="img-thumbnail">
            </div>
            <div class="block-author text-center p-2">
                <span><i class="far fa-user"></i> Имя Автора </span>
                <span><i class="far fa-calendar"></i> Mar 11, 2024</span>
            </div>
            <div class="single-post-text col-12 p-2">
                <h3>Заголовок третьего уровня</h3>

                <p class="preview-text d-block">Lorem ipsum dolor sit <a class="nav-link d-inline-block" href="#">amet consectetur</a> adipisicing elit. Aliquam tempora porro nesciunt delectus maxime, at dolore excepturi cum debitis magni molestiae iure voluptates magnam est saepe, ullam fuga quasi quo.
                    Magnam laboriosam quas aliquid magni id reprehenderit quis hic enim mollitia eaque fuga tempora nulla rerum labore dignissimos, molestiae iure non minima accusamus nihil? Eligendi sint vero aperiam animi consequuntur!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt temporibus sequi dignissimos blanditiis minus quas reiciendis vero aut totam. Commodi fugit unde cumque quod, esse ut dolores sapiente veniam eligendi!
                    Sapiente accusantium iste, vero voluptatibus suscipit atque? Quos mollitia dolore, alias eum labore amet incidunt sed exercitationem minima provident voluptates! Rem dolor recusandae deserunt animi nesciunt dolorum! Repellendus, ipsa. Saepe.</p>
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

<?php require_once 'footer.php' ?>