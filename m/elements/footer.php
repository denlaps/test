<!-- [FOOTER] -->
<script>
        function subscribe() {
            var subscriberData = {};
                subscriberData.email = $('#email').val();

                $.post("api/subscribe.php", subscriberData).done(function(data) {
                    if (data.status == 1) {
                        new Toast({
                            message: 'Вы успешно подписались!',
                            type: 'danger'
                        });
                        $('#email').val('');
                    } else {
                        new Toast({
                            message: 'Не удалось подписаться!',
                            type: 'danger'
                        });
                    }
                });
        }
    </script>
<footer>
            <section class="footer__wrapper">
                <section class="footer__top">
                    <section class="footer__menu">
                        <nav>
                            <li><a href="#">Как заказать</a></li>
                            <li><a href="#">Бонусная программа</a></li>
                            <li><a href="#">Оплата и доставка</a></li>
                            <li><a href="#">Гарантии и возврат</a></li>
                            <li><a href="#">Вопрос-ответ</a></li>
                        </nav>
                        <nav>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#">Франшиза</a></li>
                            <li><a href="#">Контакты</a></li>
                        </nav>
                    </section>
                    <section class="footer__contacts">
                        <ul class="number">
                            <li><i class="fas fa-phone-alt"></i>8-888-888-88-88</li>
                            <li><i class="fas fa-envelope"></i>frimis@gmail.com</li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-vk"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-odnoklassniki"></i></a></li>
                        </ul>
                    </section>
                    <form action="" id="footer-form">
                        <h4>Оформите подписку</h4>
                        <input type="text" placeholder="Укажите e-mail" id="email">
                        <button class="buttonSubscribe-mobile" onclick="subscribe()">Подписаться</button>
                        <label>
                            Нажимая на кнопку «Подписаться», я
                            соглашаюсь на обработку моих персональных
                            данных и ознакомлен(а) с условиями
                            конфиденциальности.
                        </label>
                    </form>
                </section>
                <section class="footer__info">
                    <span>
                        © «Frimis» — интернет-магазин украшений и аксессуаров.<br>
                        <a href="#">Политика конфиденциальности.</a>
                    </span>
                    <a href="#" class="fiveLogo">Разработка<br>и дизайн сайта «FIVE»</a>
                </section>
            </section>
        </footer>
        <!-- [/END FOOTER] -->