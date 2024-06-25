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
</div>

</body>
<script type="text/javascript" src="bootstrap_5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/5cc4ae0ce8.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>