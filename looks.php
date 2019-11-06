<?php 
include ('header.php');
?>

        <section class="contentWrapper">
            <!-- [LEFT SIDE MENU] -->
            <aside>
                <nav class="menuBar">
                    <li><a href="#">НОВИНКИ</a></li>
                    <li><a href="#">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</a></li>
                    <li><a href="#">РАСПРОДАЖА</a></li>

                    <li><a href="#">Шапки</a></li>
                    <li>
                        <a href="#" class="menuBar__more">Шарфы и платки</a>
                        <ul>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Солнцезащитные платки</a></li>
                    <li><a href="#">Ремни</a></li>
                    <li><a href="#">Часы</a></li>
                    <li><a href="#">Кошельки</a></li>
                    <li><a href="#">Перчатки</a></li>
                    <li><a href="#">Зонты</a></li>
                    <li>
                        <a href="#" class="menuBar__more">Для волос</a>
                        <ul>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menuBar__more">Украшения</a>
                        <ul>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menuBar__more">Пляжные аксессуары</a>
                        <ul>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Носки</a></li>
                    <li><a href="#">Домашняя обувь</a></li>
                    <li><a href="#">Маски карнавальные</a></li>

                    <li>
                        <a href="#" class="menuBar__more">ДЕТЯМ</a>
                        <ul>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menuBar__more">МУЖЧИНАМ</a>
                        <ul>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                            <li><a href="#">Подпункт меню</a></li>
                        </ul>
                    </li>
                </nav>
            </aside>
            <!-- [/END MENU] -->

            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Еще какая-то</a></li>
                    <li><a href="#">Дополнительная страница</a></li>
                    <li><a href="#">Готовые образы</a></li>
                </nav>
                <h1>Готовые образы</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="readyLooks">
                    <nav class="readyLooks__nav">
                        <li><a href="#" class="navItem_active">Праздничный</a></li>
                        <li><a href="#">Деловой</a></li>
                        <li><a href="#">Повседневный</a></li>
                        <li><a href="#">Пляжный</a></li>
                        <li><a href="#">Спорт</a></li>
                        <li><a href="#">Casual</a></li>
                    </nav>
                    <section class="readyLooks__wrapper">
                        <section class="readyLooks__photo">
                            <img src="uploads/girl1.jpg" class="readyLooks__photo_active" alt="">
                            <div class="readyLooks__chClothes">
                                <button data-src="uploads/girl1.jpg"></button>
                                <button data-src="uploads/girl2.jpg"></button>
                                <button data-src="uploads/girl3.jpg"></button>
                                <button data-src="uploads/girl4.jpg"></button>
                            </div>
                            <a href="#" class="readyLooks__toCart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>Весь образ</span>
                            </a>
                        </section>
                        <section class="readyLooks__useful">
                            <h3>К этому образу<br>также подойдут:</h3>
                            <div class="goodsSlider">
                                <button class="goodsSlider__prev"></button>
                                <div class="goodsSlider__wrapper">
                                    <a href="#">
                                        <img src="uploads/cap.jpg" alt="">
                                        <div class="goodsSlider__addBtn">
                                            <button><i class="far fa-heart"></i></button>
                                            <button><i class="fas fa-shopping-basket"></i></button>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="uploads/cap.jpg" alt="">
                                        <div class="goodsSlider__addBtn">
                                            <button><i class="far fa-heart"></i></button>
                                            <button><i class="fas fa-shopping-basket"></i></button>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="uploads/cap.jpg" alt="">
                                        <div class="goodsSlider__addBtn">
                                            <button><i class="far fa-heart"></i></button>
                                            <button><i class="fas fa-shopping-basket"></i></button>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="uploads/cap.jpg" alt="">
                                        <div class="goodsSlider__addBtn">
                                            <button><i class="far fa-heart"></i></button>
                                            <button><i class="fas fa-shopping-basket"></i></button>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="uploads/cap.jpg" alt="">
                                        <div class="goodsSlider__addBtn">
                                            <button><i class="far fa-heart"></i></button>
                                            <button><i class="fas fa-shopping-basket"></i></button>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="uploads/cap.jpg" alt="">
                                        <div class="goodsSlider__addBtn">
                                            <button><i class="far fa-heart"></i></button>
                                            <button><i class="fas fa-shopping-basket"></i></button>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <img src="uploads/cap.jpg" alt="">
                                        <div class="goodsSlider__addBtn">
                                            <button><i class="far fa-heart"></i></button>
                                            <button><i class="fas fa-shopping-basket"></i></button>
                                        </div>
                                    </a>
                                </div>
                                <button class="goodsSlider__next"></button>
                            </div>
                        </section>
                        <a href="#" class="navBtn__prev"></a>
                        <a href="#" class="navBtn__next"></a>
                    </section>
                    <section class="bottomSlider">
                        <h2>Другие образы</h2>
                        <div class="bottomSlider__wrapper owl-carousel">
                            <a href="#"><img src="uploads/sliderGirl1.jpg" alt=""></a>
                            <a href="#"><img src="uploads/sliderGirl2.jpg" alt=""></a>
                            <a href="#"><img src="uploads/sliderGirl3.jpg" alt=""></a>
                            <a href="#"><img src="uploads/sliderGirl2.jpg" alt=""></a>
                            <a href="#"><img src="uploads/sliderGirl1.jpg" alt=""></a>
                            <a href="#"><img src="uploads/sliderGirl3.jpg" alt=""></a>
                            <a href="#"><img src="uploads/sliderGirl2.jpg" alt=""></a>
                        </div>
                    </section>
                </main>
                <!-- [/END CONTENT] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    
    <!-- [FOOTER] -->
    <footer>
        <div class="footer__wrapper">
            <section class="footer__top">
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
                <form action="#">
                    <h4>Оформите подписку</h4>
                    <input type="text" placeholder="Укажите e-mail">
                    <input type="submit" value="Подписаться">
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
        </input>
    </footer>
    <!-- [/END FOOTER] -->

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>

    <script>
    /* == [OWL SLIDER] == */
    $('.bottomSlider__wrapper').owlCarousel({
        margin: 14,
        items: 4,
        loop: true,
        lazyLoad: true,
        autoplay: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false
    });
    </script>

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>