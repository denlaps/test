<?php 
include ('./elements/header.php');
?>
    
        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
        ?>
        <?php 
            if (isset($_GET["id"])) {
                $good_id = $_GET["id"];
            } else {
                header('Location: /404.php');
            }
            $good_res = mysqli_query($db, "SELECT * FROM good LEFT JOIN good_photo ON good.id = good_photo.good_id WHERE good.id = $good_id LIMIT 1");
            $good_row = mysqli_fetch_assoc($good_res);
            $good_json = json_encode($good_row, JSON_UNESCAPED_UNICODE);
            $category_id = $good_row['category_id'];
            $category_res = mysqli_query($db, "SELECT * FROM category WHERE id = $category_id LIMIT 1");
            $category_row = mysqli_fetch_array($category_res);
            $good_main_photo_res = mysqli_query($db, "SELECT * FROM good_photo WHERE good_id = $good_id AND is_main = 1 LIMIT 1");
            $good_main_photo_row = mysqli_fetch_array($good_main_photo_res);
            $good_photos_res = mysqli_query($db, "SELECT * FROM good_photo WHERE good_id = $good_id");
            $good_sizes_res = mysqli_query($db, "SELECT * FROM good_size WHERE good_id = $good_id");
            $good_colors_res = mysqli_query($db, "SELECT * FROM good_color WHERE good_id = $good_id");
            $good_combined_res = mysqli_query($db, "SELECT * FROM good_combined WHERE good_id = $good_id");
        ?>

            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/catalog.php">Каталог</a></li>
                    <li><a href="/category.php?id=<?= $category_row['id'] ?>"><?= $category_row['name'] ?></a></li>
                    <li><a href="/good.php?id=<?= $_GET["id"] ?>"><?= $good_row['name'] ?></a></li>
                </nav>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="goodPage">
                    <!-- [GOOD PAGE] -->
                    <section class="goodPage__wrapper">
                        <section class="goodPage__chView">
                            <?php while ($good_photos_row = mysqli_fetch_array($good_photos_res)) { ?>
                            <button id="photo<?= $good_photos_row['id'] ?>" onclick="watchPhoto(<?= $good_photos_row['id'] ?>, `<?= $good_photos_row['photo'] ?>`)" <?php if ($good_photos_row['is_main'] == 1) { ?> class="active" <?php } ?>>
                                <img src="<?= $good_photos_row['photo'] ?>" alt="">
                            </button>
                            <?php } ?>
                        </section>
                        <section class="goodPage__photo">
                            <img id="bigPhoto" src="<?= $good_main_photo_row['photo'] ?>" alt="">
                            <div class="goodPage__addBtn">
                                <button onclick='putToChoosen(`<?= $good_json ?>`)'><i class="far fa-heart"></i></button>
                            </div>
                        </section>
                        <section class="goodPage__panel">
                            <h2><?= $good_row['name'] ?></h2>
                            <section class="goodPage__price">
                                <span><?= $good_row['price'] ?> руб.</span>
                                <?php if ($good_row['old_price'] != 0) { ?><s><?= $good_row['old_price'] ?> руб.</s><?php } ?>
                            </section>
                            <section class="goodPage__size">
                                <h4>Размер:</h4>
                                <?php while ($good_sizes_row = mysqli_fetch_array($good_sizes_res)) { ?>
                                    <button id="size<?= $good_sizes_row['id'] ?>" onclick="setSize(<?= $good_sizes_row['name'] ?>, `size` + <?= $good_sizes_row['id'] ?>)"><?= $good_sizes_row['name'] ?></button>
                                <?php } ?>
                            </section>
                            <section class="goodPage__color">
                                <h4>Цвет:</h4>
                                <?php while ($good_colors_row = mysqli_fetch_array($good_colors_res)) { ?>
                                    <button id="color<?= $good_colors_row['id'] ?>" name="#<?= $good_colors_row['hex'] ?>" onclick="setColor(`#` + `<?= $good_colors_row['hex'] ?>`, `#color` + <?= $good_colors_row['id'] ?>)" style="background-color: #<?= $good_colors_row['hex'] ?>;"></button>
                                <?php } ?>
                            </section>
                            <section class="goodPage__venId">
                                <h4>Артикул:</h4>
                                <span><?= $good_row['art'] ?></span>
                            </section>

                            <button onclick='putToBasket(`<?= $good_json ?>`, selectedSize, selectedColor)' class="goodPage__toCart">
                                <i class="fas fa-shopping-basket"></i>
                                <span>В корзину</span>
                            </button>
                            <button class="goodPage__buy1click">Купить в один клик</button>

                            <figure class="goodPage__descr">
                                <h4>Описание:</h4>
                                <figcaption>
                                    <?= $good_row['description'] ?>
                                </figcaption>
                            </figure>

                            <figure class="goodPage__props">
                                <h4>Состав:</h4>
                                <figcaption>
                                <?= $good_row['contains'] ?>
                                </figcaption>
                            </figure>
                        </section>
                    </section>
                    <!-- [/END GOOD] -->

                    <!-- <section class="bottomSlider">
                        <h2>Сочетается с...</h2>
                        <div class="bottomSlider__wrapper owl-carousel">
                            <?php// while ($good_combined_row = mysqli_fetch_array($good_combined_res)) { ?>
                                <?php 
                                    //$combined_id = $good_combined_row['combined_good_id'];
                                    //$good_combined_photo_res = mysqli_query($db, "SELECT * FROM good_photo WHERE good_id = $combined_id AND is_main = 1 LIMIT 1");
                                    //$good_combined_photo_row = mysqli_fetch_array($good_combined_photo_res);
                                ?>
                                
                            <?php //} ?>
                        </div>
                    </section> -->

                    <section class="sameGoods">
                        <h2>К вашему образу так же подойдут</h2>
                        <div class="sameGoods__wrapper">
                        <?php while ($good_combined_row = mysqli_fetch_array($good_combined_res)) { ?>
                                <?php 
                                    $combined_id = $good_combined_row['combined_good_id'];
                                    $good_combined_photo_res = mysqli_query($db, "SELECT * FROM good_photo WHERE good_id = $combined_id AND is_main = 1 LIMIT 1");
                                    $good_combined_photo_row = mysqli_fetch_array($good_combined_photo_res);
                                    $good_combined_res = mysqli_query($db, "SELECT * FROM good LEFT JOIN good_photo ON good.id = good_photo.good_id  WHERE good.id = $combined_id LIMIT 1");
                                    $good_combined_row = mysqli_fetch_assoc($good_combined_res);
                                    $good_combined_json = json_encode($good_combined_row, JSON_UNESCAPED_UNICODE);
                                ?>
                            <figure>
                                <a href="good.php?id=<?= $combined_id ?>">
                                    <img src="<?= $good_combined_photo_row['photo'] ?>" alt="">
                                    <div class="goodPanel">
                                        <button onclick='putToChoosen(`<?= $good_combined_json ?>`)'><i class="far fa-heart"></i></button>
                                    </div>
                                </a>
                                <figcaption>
                                    <div class="goodTitle">
                                        <a href="/good.php?id=<?= $good_combined_row['id'] ?>"><?= $good_combined_row['name'] ?></a>
                                        <span><?= $good_combined_row['price'] ?> руб.</span>
                                    </div>
                                    <button onclick='putToBasket(`<?= $good_combined_json ?>`, ``, ``)'><i class="fas fa-shopping-basket"></i></button>
                                </figcaption>
                            </figure>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="libs/readmore/readmore.min.js"></script>
    <script src="/js/toast.js"></script>
    <script src="js/main.js"></script>
    
    <script>
    var selectedColor = $("button[id^='color']").first().attr('name');
    var selectedSize = $("button[id^='size']").first().text();

    setSize(selectedSize, $("button[id^='size']").first().attr('id'));
    setColor(selectedColor, '#' + $("button[id^='color']").first().attr('id'));
    
    function watchPhoto(id, link) {
        console.log(id)
        $("#bigPhoto").attr("src", link);
        $("button[id^='photo']").removeClass('active');
        jQuery('#photo' + id).addClass('active');
    }

    function setSize(size, id) {
        selectedSize = size;
        $("button[id^='size']").removeClass('active');
        jQuery('#' + id).addClass('active');
    }

    function setColor(color, id) {
        $("button[id^='color']").removeClass('active');
        jQuery(id).addClass('active');
        selectedColor = color;
    }

    function putToBasket(element, size, color) {
        var element = JSON.parse(element);
        element.quantity = 1;
        element.color = color;
        element.size = size;
        var basket = localStorage.getItem("basket");
        var basketArray = { basket: [] };
        
        if (basket !== null && basket !== '') {
            var basketArray = JSON.parse(basket);
            var index = basketArray.basket.findIndex(el => el.good_id === element.good_id);
            console.log(index)
            if (index !== null && index !== -1) {
                basketArray.basket[index].quantity = +basketArray.basket[index].quantity + 1;
                new Toast({
                    message: 'Товар успешно добавлен в корзину',
                    type: 'danger'
                });
            } else {
                basketArray.basket.push(element);
                new Toast({
                    message: 'Товар успешно добавлен в корзину',
                    type: 'danger'
                });
            }
        } else {
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

    function putToViewed(element) {
        var element = JSON.parse(element);

        var viewed = localStorage.getItem("viewed");
        var viewedArray = { viewed: [] };
        
        if (viewed !== null && viewed !== '') {
            var viewedArray = JSON.parse(viewed);
            var index = viewedArray.viewed.findIndex(el => el.good_id === element.good_id);

            if (index === null || index === -1) {
                if (viewedArray.viewed.length >= 5) viewedArray.viewed.shift();
                viewedArray.viewed.push(element);
            }
        } else {
            if (viewedArray.viewed.length >= 5) viewedArray.viewed.shift();
            viewedArray.viewed.push(element);
        }
        
        localStorage.setItem('viewed', JSON.stringify(viewedArray));
    }

    putToViewed(`<?= $good_json ?>`);

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
    
    /* == [READ MORE] == */
    $('.goodPage__descr figcaption, .goodPage__props figcaption').readmore({
        speed: 75,
        collapsedHeight: 40,
        moreLink: '<button class="goodPage__readMore"></button>',
        lessLink: '<button class="goodPage__readMore goodPage__readMore_less"></button>'
    });
    </script>
    
    <!-- [/SCRIPTS] -->
</body>

</html>