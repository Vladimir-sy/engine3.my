<?php

?>

<?php require_once 'header.php'; ?>

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

<?php require_once 'footer.php'; ?>