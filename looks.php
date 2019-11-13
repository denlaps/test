<?php 
//TODO: Корзина
include ('elements/header.php');
?>

        <section class="contentWrapper">
            <?php include ('./elements/sidebar.php'); ?>
            <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
                if (isset($_GET["id"])) {
                    $look_id = $_GET["id"];
                } else {
                    $look_id = 1;
                }
                $look_res = mysqli_query($db, "SELECT * FROM look LEFT JOIN look_photo ON look.id = look_photo.look_id AND look_photo.is_main = 1 WHERE look.id = $look_id LIMIT 1");
                $look_row = mysqli_fetch_assoc($look_res);
                $look_photo_res = mysqli_query($db, "SELECT * FROM look_photo WHERE look_id = $look_id");
                $looks_res = mysqli_query($db, "SELECT * FROM look");
                $looks_count_res = mysqli_query($db, "SELECT COUNT(*) AS count FROM look");
                $looks_count_row = mysqli_fetch_array($looks_count_res);
                $more_looks_res = mysqli_query($db, "SELECT * FROM look LEFT JOIN look_photo ON look.id = look_photo.look_id AND look_photo.is_main = 1");
            ?>
            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/looks.php">Готовые образы</a></li>
                </nav>
                <h1>Готовые образы</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="readyLooks">
                    <nav class="readyLooks__nav">
                    <?php while ($looks_row = mysqli_fetch_array($looks_res)) { ?>
                    <li><a href="/looks.php?id=<?= $looks_row['id'] ?>" <?php if ($look_id == $looks_row['id']) { ?> class="navItem_active" <?php } ?>><?= $looks_row['name'] ?></a></li>
                    <?php } ?>
                    </nav>
                    <section class="readyLooks__wrapper">
                        <section class="readyLooks__photo">
                            <img src="<?= $look_row['photo'] ?>" class="readyLooks__photo_active" alt="">
                            <div class="readyLooks__chClothes">
                                <?php while ($look_photo_row = mysqli_fetch_array($look_photo_res)) { ?>
                                    <button data-src="<?= $look_photo_row['photo'] ?>"></button>
                                <?php } ?>
                            </div>
                            <a href="#" class="readyLooks__toCart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>Весь образ</span>
                            </a>
                        </section>
                        <?php 
                                $look_combined_count_res = mysqli_query($db, "SELECT COUNT(*) AS count FROM look_combined WHERE look_id = $look_id");   
                                $look_combined_count_row = mysqli_fetch_array($look_combined_count_res);  
                                if ($look_combined_count_row['count'] > 0) {
                            ?>  
                        <section class="readyLooks__useful">
                            <h3>К этому образу<br>также подойдут:</h3>
                            <div class="goodsSlider">
                                <button class="goodsSlider__prev"></button>
                                <div class="goodsSlider__wrapper">
                                <?php 
                                    $look_combined_res = mysqli_query($db, "SELECT * FROM look_combined WHERE look_id = $look_id");
                                    while ($look_combined_row = mysqli_fetch_assoc($look_combined_res)) {
                                        $good_id = $look_combined_row['good_id'];
                                        $good_res = mysqli_query($db, "SELECT * FROM good LEFT JOIN good_photo ON good.id = good_photo.good_id AND good_photo.is_main = 1 WHERE good.id = $good_id LIMIT 1");
                                        $good_row = mysqli_fetch_assoc($good_res);
                                ?>
                                    <a href="good.php?id=<?= $good_id ?>">
                                            <img src="<?= $good_row['photo'] ?>" alt="">
                                            <div class="goodsSlider__addBtn">
                                                <button><i class="far fa-heart"></i></button>
                                                <button><i class="fas fa-shopping-basket"></i></button>
                                            </div>
                                    </a>
                                <?php
                                    }
                                ?>
                                </div>
                                <button class="goodsSlider__next"></button>
                            </div>
                        </section>
                        <?php 
                            }
                        ?>
                                <?php if ($look_id != 1) { ?><a href="/looks.php?id=<?= $look_id - 1 ?>" class="navBtn__prev"></a><?php } ?>
                                <?php if ($look_id != $looks_count_row['count']) { ?><a href="/looks.php?id=<?= $look_id + 1 ?>" class="navBtn__next"></a><?php } ?>
                    </section>
                    <section class="bottomSlider">
                        <h2>Другие образы</h2>
                        <div class="bottomSlider__wrapper owl-carousel">
                            <?php while ($more_looks_row = mysqli_fetch_array($more_looks_res)) { ?>
                                <a href="/looks.php?id=<?= $more_looks_row['id'] ?>"><img src="<?= $more_looks_row['photo'] ?>" alt="" height="300px"></a>
                            <?php } ?>
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