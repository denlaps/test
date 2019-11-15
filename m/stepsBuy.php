
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->

        <!-- [MAIN STEPS] -->
        <main class="stepsBuy">
            <h1>Как заказать</h1>
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
                        <span>Заполните форму, расположенную под списком выбранных товаров.<br>Все поля являются
                            обязательными </span>
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
                        <span>Если все заполнено верно, нажмите кнопку «Отправить заказ».<br>Наши менеджеры свяжутся с
                            вами, если вы не отказались от звонка</span>
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
            <button class="stepsBuy__question" data-modal=".modal__question">У меня есть вопрос</button>
        </main>
        <!-- [/END STEPS] -->

        <!-- [FOOTER] -->
        <?php
            include ('elements/footer.php');
        ?>
        <!-- [/END FOOTER] -->
    </section>

    <div class="modalWrapper">
        <section class="modal modal_medium modal__question">
            <h3>Задать вопрос</h3>
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

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- [/SCRIPTS] -->
</body>

</html>