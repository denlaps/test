<?php 
    include ('./elements/header.php');
?>

        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
        ?>


            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="#">Покупателям</a></li>
                    <li><a href="stepsBuy.php">Как заказать</a></li>
                </nav>
                <h1>Как заказать</h1>
                <!-- [/End Head] -->

                <!-- [MAIN STEPS] -->
                <main class="stepsBuy">
                    <section class="stepsBuy__wrapper">
                        <figure>
                            <img src="img/stepsBuy1.jpg" alt="">
                            <figcaption>
                                <h3>Положите выбранный товар в корзину</h3>
                                <span>Выберите в каталоге интересующие вас товары и перейдите в раздел «Корзина»</span>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="img/stepsBuy2.jpg" alt="">
                            <figcaption>
                                <h3>Введите адрес</h3>
                                <span>Заполните форму, расположенную под списком выбранных товаров.<br>Все поля являются обязательными </span>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="img/stepsBuy3.jpg" alt="">
                            <figcaption>
                                <h3>Выберите способ<br>доставки и оплаты</h3>
                                <span>Выберите способ доставки<br> и оплаты из выпадающих списков</span>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="img/stepsBuy4.jpg" alt="">
                            <figcaption>
                                <h3>Отправьте заказ</h3>
                                <span>Если все заполнено верно, нажмите кнопку «Отправить заказ».<br>Наши менеджеры свяжутся с вами, если вы не отказались от звонка</span>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="img/stepsBuy5.jpg" alt="">
                            <figcaption>
                                <h3>Оплатите</h3>
                                <span>Ожидайте счет на указанный<br>вами электронный адрес<br> и оплатите его </span>
                            </figcaption>
                        </figure>
                        <figure>
                            <img src="img/stepsBuy6.jpg" alt="">
                            <figcaption>
                                <h3>Получите ваш заказ</h3>
                                <span>Получите ваш заказ!<br>Мы будем очень рады вашему <a href="#">отзыву</a></span>
                            </figcaption>
                        </figure>
                    </section>
                    <button class="stepsBuy__question">У меня есть вопрос</button>
                </main>
                <!-- [/END STEPS] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    
    <?php 
        include ('./elements/footer.php');
    ?>

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>