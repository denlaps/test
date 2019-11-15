<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frimis</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/c6f437d80c.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="mainWrapper">
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->

        <!-- [PANELS] -->
        <aside class="menuBar">
            <section class="menuBar__head">
                <button class="menuBar__toggle menuBar__toggle_close"><i class="fas fa-times"></i></button>
                <form class="searchBox" action="">
                    <input type="text" placeholder="Введите товар...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </section>
            <section class="menuBar__wrapper">
                <!-- [TOGGLE MENU] -->
                <nav class="firstMenu">
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
                <!-- [/END MENU] -->
                <!-- [Under Nav] -->
                <nav class="secondMenu">
                    <li><a href="#">Готовые образы</a></li>
                    <li><a href="#">Instashop</a></li>
                    <li>
                        <a href="#">Покупателям</a>
                        <ul style="display: none;">
                            <li><a href="#">Как заказать</a></li>
                            <li><a href="#">Оплата</a></li>
                            <li><a href="#">Бонусная программа</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Гарантии</a></li>
                            <li><a href="#">Возврат</a></li>
                            <li><a href="#">Вопрос-ответ</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Политика конфиденциальности</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Франшиза</a></li>
                </nav>
                <!-- [/Under Nav] -->
            </section>
        </aside>

        <section class="goodsHistory">
            <figure>
                <a href="#"><img src="uploads/cap.jpg" alt=""></a>
                <figcaption>
                    <a href="#">Шапка женская</a>
                    <span>Артикул: 12-54651-56</span>
                    <strong>1 000 руб.</strong>
                </figcaption>
                <div class="goodsHistory__panel">
                    <button><i class="far fa-heart"></i></button>
                    <button><i class="fas fa-shopping-basket"></i></button>
                    <button><i class="fas fa-times"></i></button>
                </div>
            </figure>
            <figure>
                <a href="#"><img src="uploads/cap.jpg" alt=""></a>
                <figcaption>
                    <a href="#">Шапка женская</a>
                    <span>Артикул: 12-54651-56</span>
                    <strong>1 000 руб.</strong>
                </figcaption>
                <div class="goodsHistory__panel">
                    <button><i class="far fa-heart"></i></button>
                    <button><i class="fas fa-shopping-basket"></i></button>
                    <button><i class="fas fa-times"></i></button>
                </div>
            </figure>
        </section>
        <!-- [/PANELS] -->
        
        <!-- [MAIN CONTAINER] -->
        <main class="homePage">
            <section class="firstSection">
                <figure class="mainSlider">
                    <figcaption>
                        <span class="mainSlider__caption">Осень 2018</span>
                        <h2>Новая коллекция</h2>
                        <a href="#">Смотреть</a>
                    </figcaption>
                </figure>
                <a href="#" class="autumnLook">
                    <figure>
                        <img src="uploads/autumnGirl.jpg" alt="">
                        <div class="autumnLook__wrapper">
                            <figcaption>
                                <h2>Собери осенний образ</h2>
                            </figcaption>
                        </div>
                    </figure>
                </a>
            </section>
            <section class="secondSection">
                <a href="#" class="whiteBox top">
                    <img src="uploads/autumn1.jpg" alt="">
                    <div class="whiteBox__caption">
                        <h3>Перчатки</h3>
                        <span>от 599 р.</span>
                        <i>Показать</i>
                    </div>
                </a>
                <a href="#" class="whiteBox bottom">
                    <img src="uploads/autumn2.jpg" alt="">
                    <div class="whiteBox__caption">
                        <h3>Шапки</h3>
                        <span>от 899 р.</span>
                        <i>Показать</i>
                    </div>
                </a>
                <a href="#" class="whiteBox top">
                    <img src="uploads/autumn3.jpg" alt="">
                    <div class="whiteBox__caption">
                        <h3>Шарфы и платки</h3>
                        <span>от 399 р.</span>
                        <i>Показать</i>
                    </div>
                </a>
                <a href="#" class="whiteBox bottom">
                    <img src="uploads/autumn4.jpg" alt="">
                    <div class="whiteBox__caption">
                        <h3>Аксессуары</h3>
                        <span>от 199 р.</span>
                        <i>Показать</i>
                    </div>
                </a>
                <figure class="orangeBlock">
                    <img src="img/orangeBlock_girl1.png" alt="">
                    <div class="orangeBlock__wrapper">
                        <figcaption>
                            <h2>Готовые образы<br>от стилиста</h2>
                            <a href="#">Смотреть</a>
                        </figcaption>
                    </div>
                </figure>
            </section>
        </main>
        <!-- [/MAIN CONTAINER] -->

        <!-- [FOOTER] -->
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
            </section>
        </footer>
        <!-- [/END FOOTER] -->
    </section>

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>