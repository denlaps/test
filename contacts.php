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
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Контакты</a></li>
                </nav>
                <h1>Контакты</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="contactsPage">
                    <section id="map">
                        <img src="uploads/testMap.jpg" width="100%" alt="">
                    </section>
                    <section class="headContacts">
                        <figure>
                            <i class="fas fa-phone-alt"></i>
                            <span>8-888-888-88-88</span>
                        </figure>
                        <figure>
                            <i class="far fa-envelope"></i>
                            <span>frimis@gmail.com</span>
                        </figure>
                    </section>
                    <h2>Магазины в:</h2>
                    <select name="" id="" class="selectCity">
                        <option value="">Екатеринбург</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                        <option value="">Название города</option>
                    </select>
                    <section class="contactsPage__wrapper">
                        <article>
                            <a href="#">ТРЦ «Jam Молл»</a>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Киров, ул. Горького, 5а</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>8 (8332) 77-62-76</span>
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span>10.00 - 22.00</span>
                                </li>
                            </ul>
                        </article>
                        <article>
                            <a href="#">ТРЦ «Jam Молл»</a>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Киров, ул. Горького, 5а</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>8 (8332) 77-62-76</span>
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span>10.00 - 22.00</span>
                                </li>
                            </ul>
                        </article>
                        <article>
                            <a href="#">ТРЦ «Jam Молл»</a>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Киров, ул. Горького, 5а</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>8 (8332) 77-62-76</span>
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span>10.00 - 22.00</span>
                                </li>
                            </ul>
                        </article>
                        <article>
                            <a href="#">ТРЦ «Jam Молл»</a>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Киров, ул. Горького, 5а</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>8 (8332) 77-62-76</span>
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span>10.00 - 22.00</span>
                                </li>
                            </ul>
                        </article>
                        <article>
                            <a href="#">ТРЦ «Jam Молл»</a>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>г. Киров, ул. Горького, 5а</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <span>8 (8332) 77-62-76</span>
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span>10.00 - 22.00</span>
                                </li>
                            </ul>
                        </article>
                    </section>
                    <button class="contactsPage__callMe" data-modal=".modal__question">Задать вопрос</button>
                    <button class="orangeButton" data-modal=".modal__callMe">Позвоните мне</button>
                    <button class="orangeButton" data-modal=".modal__promoBonus">Бонусный код</button>
                    <button class="orangeButton" data-modal=".modal__addToCart">Добавить в корзину</button>
                </main>
                <!-- [/END CONTENT] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>

    <!-- [MODAL - CALL ME] -->
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
                <span class="uText">Нажимая на кнопку «Отправить», я соглашаюсь на обработку персональных данных и ознакомлен(а) с условиями конфиденциальности.</span>
            </form>
        </section>

        <section class="modal modal_mini modal__callMe">
            <h3>Позвоните мне</h3>
            <form action="">
                <div class="form-box">
                    <input type="text" placeholder="Ваше имя">
                    <input type="text" placeholder="Ваш телефон">
                    <input type="submit" value="Отправить">
                </div>
                <span class="uText">Нажимая на кнопку «Отправить», я соглашаюсь на обработку персональных данных и ознакомлен(а) с условиями конфиденциальности.</span>
            </form>
        </section>

        <section class="modal modal_mini modal__promoBonus">
            <h3>Потратить бонусные баллы</h3>
            <form action="">
                <div class="form-box">
                    <span class="hText">
                        Введите, пожалуйста, код.<br>
                        Код отправлен на указанный <br>вами номер.
                    </span>
                    <input type="text" placeholder="Ваш код">
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </section>

        <section class="modal modal_wide modal__addToCart">
            <h3>Купить весь образ</h3>
            <section class="modal__wrapper">
                <figure class="goodItem">
                    <div class="goodItem__wrapper">
                        <img src="uploads/cap.jpg" alt="">
                        <figcaption>
                            <a href="#">Шапка женская</a>
                            <span>Артикул: 12-54651-56</span>
                        </figcaption>
                    </div>
                    <span class="goodItem__color" style="background-color: #fa4557;"></span>
                    <select class="selectSize">
                        <option value="54">54</option>
                        <option value="56">56</option>
                    </select>
                    <div class="itemCounter">
                        <button class="itemCounter__minus">-</button>
                        <input type="text" value="1">
                        <button class="itemCounter__plus">+</button>
                    </div>
                    <span class="goodItem__price">1 000 руб.</span>
                    <button class="goodItem__close">
                        <i class="fas fa-times" aria-hidden="true"></i>
                    </button>
                </figure>
                <figure class="goodItem">
                    <div class="goodItem__wrapper">
                        <img src="uploads/cap.jpg" alt="">
                        <figcaption>
                            <a href="#">Шапка женская</a>
                            <span>Артикул: 12-54651-56</span>
                        </figcaption>
                    </div>
                    <span class="goodItem__color" style="background-color: #fa4557;"></span>
                    <select class="selectSize">
                        <option value="54">54</option>
                        <option value="56">56</option>
                    </select>
                    <div class="itemCounter">
                        <button class="itemCounter__minus">-</button>
                        <input type="text" value="1">
                        <button class="itemCounter__plus">+</button>
                    </div>
                    <span class="goodItem__price">1 000 руб.</span>
                    <button class="goodItem__close">
                        <i class="fas fa-times" aria-hidden="true"></i>
                    </button>
                </figure>
                <figure class="goodItem">
                    <div class="goodItem__wrapper">
                        <img src="uploads/cap.jpg" alt="">
                        <figcaption>
                            <a href="#">Шапка женская</a>
                            <span>Артикул: 12-54651-56</span>
                        </figcaption>
                    </div>
                    <span class="goodItem__color" style="background-color: #fa4557;"></span>
                    <select class="selectSize">
                        <option value="54">54</option>
                        <option value="56">56</option>
                    </select>
                    <div class="itemCounter">
                        <button class="itemCounter__minus">-</button>
                        <input type="text" value="1">
                        <button class="itemCounter__plus">+</button>
                    </div>
                    <span class="goodItem__price">1 000 руб.</span>
                    <button class="goodItem__close">
                        <i class="fas fa-times" aria-hidden="true"></i>
                    </button>
                </figure>
            </section>
            <button class="acceptBtn">ОК</button>
        </section>
    </div>
    <!-- [/MODAL] -->
    
    <?php 
        include ('./elements/footer.php');
    ?>

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    /* == [SELECT UI] == */
    $('.selectCity').selectmenu({
        classes: {
            'ui-selectmenu-button-closed': 'selectCity_closed',
            'ui-selectmenu-button-open': 'selectCity_open',
            'ui-selectmenu-menu': 'selectCity__menu'
        }
    });

    $('.selectSize').selectmenu({
        classes: {
            'ui-selectmenu-button-closed': 'selectSize_closed',
            'ui-selectmenu-button-open': 'selectSize_open',
            'ui-selectmenu-menu': 'selectSize__menu'
        }
    });
    </script>

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>