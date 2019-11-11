<?php 
include ('elements/header.php');
?>
        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
            if (isset($_GET["id"])) {
                $category_id = $_GET["id"];
            } else {
                header('Location: 404.php');
            }
        ?>
            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/catalog.php">Каталог</a></li>
                    <li><a href="/catalog.php?id=<?= $category_id ?>">Шапки</a></li>
                </nav>
                <h1>Шапки</h1>
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
                                <option value="">черный</option>
                                <option value="">серый</option>
                                <option value="">жёлтый</option>
                                <option value="">розовый</option>
                            </select>
                        </section>
                        <ul>
                            <li><a href="#">New</a></li>
                            <li><a href="#">Sale</a></li>
                            <li><a href="#">Best</a></li>
                            <li><a href="#" class="active">Все товары</a></li>
                        </ul>
                    </menu>
                    <!-- [/END FILTER] -->

                    <!-- [CATALOG] -->
                    <section class="catalogPage__wrapper">
                        
                    </section>
                    <!-- [/END CATALOG] -->

                    <button class="showMore">Показать ещё</button>

                    <!-- [PAGE NAV] -->
                    <menu class="catalogPage__pageNav">
                        <button class="navBtn__prev"></button>
                        <li><button>1</button></li>
                        <li><button>2</button></li>
                        <li><button class="active">3</button></li>
                        <li><button>4</button></li>
                        <li><button>5</button></li>
                        <button class="navBtn__next"></button>
                    </menu>
                    <!-- [/END PAGE NAV] -->

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
    
  

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="libs/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    nextUrl = '/api/category.php?id=<?= $category_id ?>&limit=12&offset=0';
    currentPage = 1;

    loadMoreGoods();
    function loadMoreGoods() {
            nextUrl = '/api/category.php?id=<?= $category_id ?>&limit=12&offset=0';
            console.log('sd');
            $.get(nextUrl, (res) => {
                console.log(nextUrl);
                res.data.forEach((el) => {
                    console.log(el);
                    $('.catalogPage__wrapper').append(`<figure>
                    <a href="good.php?id=` + el.good_id + `">
                    <img src="` + el.photo + `" alt="">
                    <div class="goodPanel">
                    <button><i class="far fa-heart"></i></button>
                    </div>
                    </a>
                    <figcaption>
                    <div class="goodTitle">
                    <a href="#">` + el.name + `</a>
                    <span>` + el.price + ` руб.</span>
                    </div>
                    <button><i class="fas fa-shopping-basket"></i></button>
                    </figcaption>
                    </figure>`);
                });
                nextUrl = res.next_url;
            });
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