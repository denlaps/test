
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->

        <!-- [MAIN] -->
        <main>
            <figure class="orangeBlock">
                <img src="img/thanksGirl.png" style="max-width: 220px;" alt="">
                <div class="orangeBlock__wrapper">
                    <figcaption>
                        <h2>Спасибо<br>за заказ</h2>
                        <span>
                            Заказ оплачен полностью и будет
                            доставлен вам в течение 4 дней.<br>
                            Информация о заказе отправлена
                            на указанный вами электронный адрес.
                        </span>
                        <a href="#" style="white-space: nowrap;height: 50px;padding-right: 20px;">Перейти на главную</a>
                    </figcaption>
                </div>
            </figure>
        </main>
        <!-- [/END] -->

        <!-- [FOOTER] -->
        <?php
            include ('elements/footer.php');
        ?>
        <!-- [/END FOOTER] -->
    </section>

    <!-- [MODAL] -->
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
    <!-- [/END MODAL] -->

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- [/SCRIPTS] -->
</body>

</html>