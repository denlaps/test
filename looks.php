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
                                    <?php 
                                        $look_combined_count_res = mysqli_query($db, "SELECT COUNT(*) as count FROM look_combined WHERE look_id = $look_id");
                                        $look_combined_count_row = mysqli_fetch_array($look_combined_count_res);

                                        if($look_combined_count_row['count'] > 3) {
                                    ?>
                                        <button class="goodsSlider__prev"></button>
                                    <?php } ?>
                                <div class="goodsSlider__wrapper">
                                <?php 
                                    $look_combined_res = mysqli_query($db, "SELECT * FROM look_combined WHERE look_id = $look_id");
                                    while ($look_combined_row = mysqli_fetch_assoc($look_combined_res)) {
                                        $good_id = $look_combined_row['good_id'];
                                        $good_res = mysqli_query($db, "SELECT * FROM good LEFT JOIN good_photo ON good.id = good_photo.good_id AND good_photo.is_main = 1 WHERE good.id = $good_id LIMIT 1");
                                        $good_row = mysqli_fetch_assoc($good_res);
                                        $good_json = json_encode($good_row);
                                ?>
                                    <a href="good.php?id=<?= $good_id ?>">
                                            <img src="<?= $good_row['photo'] ?>" alt="">
                                            <div class="goodsSlider__addBtn">
                                                <button onclick="putToChoosen(`<?= $good_json ?>`)"><i class="far fa-heart"></i></button>
                                                <button onclick="putToBasket(`<?= $good_json ?>`, ``, ``)"><i class="fas fa-shopping-basket"></i></button>
                                            </div>
                                    </a>
                                <?php
                                    }
                                ?>
                                </div>
                                <?php if($look_combined_count_row['count'] > 3) { ?><button class="goodsSlider__next"></button><?php } ?>
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
    
    <?php 
        include ('./elements/footer.php');
    ?>

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>

    <script>
    function putToBasket(element, size, color) {
        var element = JSON.parse(element);
        element.quantity = 1;
        element.color = color;
        element.size = size;
        console.log(element.size + ' ' + element.color);
        var basket = localStorage.getItem("basket");
        var basketArray = { basket: [] };
        
        if (basket !== null && basket !== '') {
            var basketArray = JSON.parse(basket);
            var index = basketArray.basket.findIndex(el => el.good_id === element.good_id);
            var colorIndex = basketArray.basket.findIndex(el => el.color === color);
            var sizeIndex = basketArray.basket.findIndex(el => el.size === size);
            
            if (index !== null && index !== -1 && colorIndex !== null && colorIndex !== -1 && sizeIndex !== null && sizeIndex !== -1) {
                console.log('in:' + index);
                basketArray.basket[index].quantity = +basketArray.basket[index].quantity + 1;
                console.log(element.size);
                new Toast({
                    message: 'Товар успешно добавлен в корзину',
                    type: 'danger'
                });
            } else {
                console.log(element.size);
                basketArray.basket.push(element);
                new Toast({
                    message: 'Товар успешно добавлен в корзину',
                    type: 'danger'
                });
            }
        } else {
            console.log(element.size);
            basketArray.basket.push(element);
            new Toast({
                message: 'Товар успешно добавлен в корзину',
                type: 'danger'
            });
        }
        
        localStorage.setItem('basket', JSON.stringify(basketArray));
    }
    
    function putToChoosen(element) {
        var element = JSON.parse(element);
        var choosen = localStorage.getItem("choosen");
        var choosenArray = { choosen: [] };
        
        if (choosen !== null && choosen !== '') {
            var choosenArray = JSON.parse(choosen);
            var index = choosenArray.choosen.findIndex(el => el.good_id === element.good_id);
            if (index === null || index === -1) {
                choosenArray.choosen.push(element);
                new Toast({
                    message: 'Товар успешно добавлен в избранное',
                    type: 'danger'
                });
            } 
        } else {
            choosenArray.choosen.push(element);
            new Toast({
                    message: 'Товар успешно добавлен в избранное',
                    type: 'danger'
            });
        }
        
        localStorage.setItem('choosen', JSON.stringify(choosenArray));
    }
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