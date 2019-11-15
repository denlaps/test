
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->

        <!-- [MAIN CONTENT] -->
        <main class="reviewsPage">
            <!-- [Head] -->
            <h1>Отзывы</h1>
            <!-- [/End Head] -->
            <figure class="orangeBlock">
                <img src="img/reviewsGirl.png" alt="">
                <div class="orangeBlock__wrapper">
                    <figcaption>
                        <h2>Помогите нам<br>стать лучше!</h2>
                        <span>
                            Напишите, что вы заказывали,<br>
                            понравился ли вам товар,<br>
                            удобно ли было заказывать.
                        </span>
                        <a href="#" data-modal=".modal__sendReview">Написать отзыв</a>
                    </figcaption>
                </div>
            </figure>

            <section class="reviewsPage__wrapper">
                <article>
                    <section class="reviewContent">
                        <div class="reviewContent__head">
                            <img src="img/noPhoto.jpg" alt="">
                            <div>
                                <h3>Анастасия Иванова</h3>
                                <span class="reviewContent__uHead">10 сентября 2018 | Киров</span>
                            </div>    
                        </div>
                        <span class="reviewContent__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat natus animi soluta in fugit
                            iste laudantium suscipit reiciendis autem porro, qui quos repellendus esse voluptates quas
                            rerum! Corrupti, quisquam omnis!
                        </span>
                        <a href="#">Читать дальше</a>
                    </section>
                </article>
                <article>
                    <section class="reviewContent">
                        <div class="reviewContent__head">
                            <img src="uploads/avaGirl.jpg" alt="">
                            <div>
                                <h3>Анастасия Иванова</h3>
                                <span class="reviewContent__uHead">10 сентября 2018 | Киров</span>
                            </div>    
                        </div>
                        <span class="reviewContent__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat natus animi soluta in fugit
                            iste laudantium suscipit reiciendis autem porro, qui quos repellendus esse voluptates quas
                            rerum! Corrupti, quisquam omnis!
                            <div class="attachFiles">
                                <img src="uploads/attachPhotoReview.jpg" alt="">
                                <img src="uploads/attachPhotoReview.jpg" alt="">
                            </div>
                        </span>
                    </section>
                </article>
                <article>
                    <section class="reviewContent">
                        <div class="reviewContent__head">
                            <img src="img/noPhoto.jpg" alt="">
                            <div>
                                <h3>Анастасия Иванова</h3>
                                <span class="reviewContent__uHead">10 сентября 2018 | Киров</span>
                            </div>
                        </div>
                        <span class="reviewContent__text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat natus animi soluta in fugit
                            iste laudantium suscipit reiciendis autem porro, qui quos repellendus esse voluptates quas
                            rerum! Corrupti, quisquam omnis!
                        </span>
                        <a href="#">Читать дальше</a>
                    </section>
                </article>
            </section>

            <button class="showMore">Показать ещё</button>
        </main>
        <!-- [/END CONTENT] -->

        <!-- [FOOTER] -->
        <?php
            include ('elements/footer.php');
        ?>
        <!-- [/END FOOTER] -->
    </section>

    <!-- [MODAL] -->
    <div class="modalWrapper">
        <section class="modal modal_medium modal__sendReview">
            <h3>Оставить отзыв</h3>
            <form action="">
                <div class="form-box">
                    <input type="text" placeholder="Ваше имя">
                    <input type="text" placeholder="Ваш телефон | e-mail">
                    <input type="text" placeholder="Ваш город">
                    <input type="text" placeholder="Ваше сообщение">
                </div>
                <div class="form-box">
                    <button class="sendFile">Выбрать файл</button>
                    <input type="file">
                    <input type="submit" value="Отправить">
                </div>
                <span class="uText">Нажимая на кнопку «Отправить», я соглашаюсь на обработку персональных данных и
                    ознакомлен(а) с условиями конфиденциальности.</span>
            </form>
        </section>
    </div>
    <!-- [/END MODAL] -->

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/readmore/readmore.min.js"></script>

    <script src="js/main.js"></script>

    <script>
        /* == [READ MORE] == */
        // $('.goodPage__descr figcaption, .goodPage__props figcaption').readmore({
        //     speed: 75,
        //     collapsedHeight: 40,
        //     moreLink: '<button class="goodPage__readMore"></button>',
        //     lessLink: '<button class="goodPage__readMore goodPage__readMore_less"></button>'
        // });
    </script>

    <!-- [/SCRIPTS] -->
</body>

</html>