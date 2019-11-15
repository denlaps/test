<?php 
include ('elements/header.php');
?>
        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
            $cf = " WHERE good.id > 0 ";
            if (isset($_GET["id"])) {
                $category_id = $_GET["id"];
                if ($category_id == "all") {
                    $cf = " WHERE good.id > 0 ";
                } else {
                    $cf = " WHERE good.category_id = $category_id ";
                }
            } else {
                $category_id = "all";
            }

            $search = "";
            $query = 0;
            $sale = 0;
            $new = 0;
            $best = 0;
            if (isset($_GET["search"])) {
                $query = $_GET["search"];
                $search = " AND good.name LIKE '%$query%' ";
            }
            $q = "";

            if (isset($_GET["sale"])) {
                $sale = 1;
                $new = 0;
                $best = 0;
                $q =  "AND good.is_on_sale = $sale ";
            } 

            if (isset($_GET["new"])) {
                $sale = 0;
                $new = 1;
                $best = 0;
                $q =  "AND good.new = $new ";
            }

            if (isset($_GET["best"])) {
                $sale = 0;
                $new = 0;
                $best = 1;
                $q =  "AND good.best = $best ";
            }

            $good_colors_res = mysqli_query($db, "SELECT DISTINCT (color_name) FROM good_color");
            if ($category_id != "all") {
                $category_res = mysqli_query($db, "SELECT * FROM category WHERE id = $category_id");
                $category_row = mysqli_fetch_array($category_res);
            }
            $good_res = mysqli_query($db, "SELECT COUNT(*) AS count FROM good LEFT JOIN good_photo ON good.id = good_photo.good_id AND good_photo.is_main = 1".$cf.$q.$search);
            $good_count_row = mysqli_fetch_array($good_res);
            $total_pages = 1;
            if ((int)$good_count_row['count'] % 12 > 0) {
                $total_pages = floor($good_count_row['count'] / 12) + 1;
            } else {
                $total_pages = floor($good_count_row['count'] / 12);
            }
        ?>
            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/category.php">Каталог</a></li>
                    <?php if ($category_id != "all") { ?><li><a href="/catalog.php?id=<?= $category_id ?>"><?= $category_row['name'] ?></a></li><?php } ?>
                </nav>
                <h1><?php if ($category_id != "all") { echo $category_row['name']; } ?></h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="catalogPage">
                    <!-- [FILTER PANEL] -->
                    <menu class="catalogPage__menu">
                        <section class="catalogPage__chLook">
                            <span>Образ:</span>
                            <select name="chooseLook" class="chLook__list">
                                <option value="">праздничный</option>
                                <option value="">деловой</option>
                                <option value="">повседневный</option>
                                <option value="">пляжный</option>
                                <option value="">спорт</option>
                                <option value="">casual</option>
                            </select>
                        </section>
                        <section class="catalogPage__chColor">
                            <span>Цвет:</span>
                            <select name="chooseLook" class="chLook__list">
                                <?php while ($color_row = mysqli_fetch_array($good_colors_res)) { ?>
                                    <option value=""><?= $color_row['color_name'] ?></option>
                                <?php } ?>
                                <option value="">любой</option>
                            </select>
                        </section>
                        <ul>
                            <li><a id="new" href="/category.php?id=<?= $category_id ?>&new=1" <?php if (isset($_GET["new"])) { ?>class="active"<?php  } ?>>New</a></li>
                            <li><a id="sale" href="/category.php?id=<?= $category_id ?>&sale=1" <?php if (isset($_GET["sale"])) { ?>class="active"<?php  } ?>>Sale</a></li>
                            <li><a id="best" href="/category.php?id=<?= $category_id ?>&best=1" <?php if (isset($_GET["best"])) { ?>class="active"<?php  } ?>>Best</a></li>
                            <li><a id="all" href="/category.php?id=<?= $category_id ?>" <?php if (!isset($_GET["new"]) && !isset($_GET["sale"]) && !isset($_GET["best"])) { ?>class="active"<?php  } ?>>Все товары</a></li>
                        </ul>
                    </menu>
                    <!-- [/END FILTER] -->

                    <!-- [CATALOG] -->
                    <section class="catalogPage__wrapper">
                        
                    </section>
                    <!-- [/END CATALOG] -->

                    <button class="showMore" onclick="loadMoreGoods()">Показать ещё</button>

                    <!-- [PAGE NAV] -->
                    <menu class="catalogPage__pageNav">
                        <button class="navBtn__prev" onclick="loadPage(--currentPage)"></button>
                        <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                            <li><button class="pagin" id="page<?= $i ?>" onclick="loadPage(<?= $i ?>)"><?= $i ?></button></li>
                        <?php } ?>
                        <button class="navBtn__next" onclick="loadPage(++currentPage)"></button>
                    </menu>
                    <!-- [/END PAGE NAV] -->

                    <section class="bottomSlider">
                        <h2>Другие образы</h2>
                        
                        <div class="bottomSlider__wrapper owl-carousel">
                            <?php
                                 $look_res = mysqli_query($db, "SELECT l.*, lp.photo FROM look as l LEFT JOIN look_photo as lp ON l.id = lp.look_id AND lp.is_main = 1");
                                 while ($look_row = mysqli_fetch_array($look_res)) {
                            ?>
                                <a href="looks.php?id=<?= $look_row['id'] ?>"><img src="<?= $look_row['photo'] ?>" alt="" height="300px"></a>
                            <?php } ?>
                        </div>  
                    </section>
                </main>
                <!-- [/END CONTENT] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    <?php include('elements/footer.php'); ?>
  

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    console.log('<?= $query ?>');
    nextUrl = '/api/category.php?id=<?= $category_id ?>&limit=12&offset=0&sale=<?= $sale ?>&new=<?= $new ?>&best=<?= $best ?>&search=<?= $query ?>';
    currentPage = 1;
    $(".navBtn__prev").hide();
    loadMoreGoods();
    function loadMoreGoods() {
            $.get(nextUrl, (res) => {
                console.log(nextUrl);
                if (res.data.length < 12) {
                    $('.showMore').hide();
                } else {
                    $('.showMore').show();
                }
                console.log(res);
                res.data.forEach((el) => {
                    console.log(el);
                    if (el.photo == null) {
                        el.photo = 'img/box.jpg';
                    }
                    $('.catalogPage__wrapper').append(`<figure>
                    <a href="good.php?id=` + el.id + `">
                    <img src="` + el.photo + `" alt="">
                    <div class="goodPanel">
                    <button onclick='putToChoosen(\`${JSON.stringify(el)}\`)'><i class="far fa-heart"></i></button>
                    </div>
                    </a>
                    <figcaption>
                    <div class="goodTitle">
                    <a href="good.php?id=` + el.id + `">` + el.name + `</a>
                    <span>` + el.price + ` руб.</span>
                    </div>
                    <button onclick='putToBasket(\`${JSON.stringify(el)}\`, \`\`, \`\`)'><i class="fas fa-shopping-basket"></i></button>
                    </figcaption>
                    </figure>`);
                });
                $(".pagin").removeClass("active");
                $("#page" + res.page).addClass("active");
                currentPage = res.page;
                if (+currentPage > 1) {
                    $(".navBtn__prev").show();
                } else {
                    $(".navBtn__prev").hide();
                }
                if (+currentPage < +<?= $total_pages ?>) {
                    $(".navBtn__next").show();
                } else {
                    $(".navBtn__next").hide();
                }
                nextUrl = res.next_url;
                console.log(nextUrl);
            });
    }

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

    function loadPage(page) {
            nextUrl = '/api/category.php?id=<?= $category_id ?>&limit=12&page=' + page + '&sale=<?= $sale ?>&new=<?= $new ?>&best=<?= $best ?>&search=<?= $query ?>';
            $('.catalogPage__wrapper').html('');
            loadMoreGoods();
    }
    /* == [SELECT UI] == */
    $('.chLook__list').selectmenu({
        classes: {
            'ui-selectmenu-button-closed': 'selectMenu_closed',
            'ui-selectmenu-button-open': 'selectMenu_open',
            'ui-selectmenu-menu': 'selectMenu__menu'
        }
    });

    
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