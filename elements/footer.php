<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/toast.js"></script>
    <script src="js/main.js"></script>
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
 <!-- [FOOTER] -->
<footer>
        <div class="footer__wrapper">
            <section class="footer__top">
                <nav>
                    <li><a href="stepsBuy.php">Как заказать</a></li>
                    <li><a href="page.php?id=bonus">Бонусная программа</a></li>
                    <li><a href="page.php?id=pay">Оплата и доставка</a></li>
                    <li><a href="page.php?id=guarantee">Гарантии и возврат</a></li>
                    <li><a href="qaPage.php">Вопрос-ответ</a></li>
                </nav>
                <nav>
                    <li><a href="about.php">О компании</a></li>
                    <li><a href="reviews.php">Отзывы</a></li>
                    <li><a href="franchise.php">Франшиза</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                </nav>
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
                <div>
                    <h4>Оформите подписку</h4>
                    <input type="text" id="email" placeholder="Укажите e-mail">
                    <button class="buttonSubscribe" onclick="subscribe()">Подписаться</button>
                    <label>
                        Нажимая на кнопку «Подписаться», я
                        соглашаюсь на обработку моих персональных
                        данных и ознакомлен(а) с условиями
                        конфиденциальности.
                    </label>
                </div>
            </section>
            <section class="footer__info">
                <span>
                    © «Frimis» — интернет-магазин украшений и аксессуаров.<br>
                    <a href="page.php?id=privacy">Политика конфиденциальности.</a>
                </span>
                <a href="https://5agency.ru" class="fiveLogo">Разработка<br>и дизайн сайта «FIVE»</a>
            </section>
        </input>
    </footer>
    <!-- [/END FOOTER] -->