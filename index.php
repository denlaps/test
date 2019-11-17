<?php 
include ('./elements/header.php');
?>

        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
        ?>
        <?php
            $collection_res = mysqli_query($db, "SELECT * FROM collection WHERE is_main = 1 LIMIT 1");
            $category_res = mysqli_query($db, "SELECT * FROM category WHERE is_on_main_page = 1");
            $collection_row = mysqli_fetch_array($collection_res);
        ?>

            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [MAIN CONTENT] -->
                <main class="homePage">
                    <section class="firstSection">
                        <section class="mainSlider owl-carousel">
                            <figure style="background: #9fa3af;">
                                <img src="uploads/slider1.jpg" alt="">
                                <figcaption>
                                        <span class="mainSlider__caption"><?php echo $collection_row['season'] ?> <?php echo $collection_row['year'] ?></span>
                                        <h2><?php echo $collection_row['title'] ?></h2>
                                        <a href="/collection.php?id=<?= $collection_row['id'] ?>">Смотреть</a>
                                </figcaption>
                            </figure>
                            <figure style="background: green;">
                                <figcaption>
                                    <span class="mainSlider__caption">Осень 2018</span>
                                    <h2>Новая<br>коллекция</h2>
                                    <a href="#">Смотреть</a>
                                </figcaption>
                            </figure>
                            <figure style="background: brown;">
                                <figcaption>
                                    <span class="mainSlider__caption">Осень 2018</span>
                                    <h2>Новая<br>коллекция</h2>
                                    <a href="#">Смотреть</a>
                                </figcaption>
                            </figure>
                        </section>
                        <figure class="autumnLook">
                            <img src="<?php echo $collection_row['image'] ?>" alt="">
                            <div class="autumnLook__wrapper">
                                <figcaption>
                                    <h2><?php echo $collection_row['call_to_action'] ?></h2>
                                </figcaption>
                            </div>
                        </figure>
                    </section>
                    <section class="secondSection">
                        <?php
                            $even = 1;
                            while ($category_row = mysqli_fetch_array($category_res)) {
                                if ($even % 2 != 0) {
                        ?>
                                <figure class="whiteBox top">
                                    <img src="<?php echo $category_row['image']; ?>" alt="">
                                    <figcaption>
                                        <h3><?php echo $category_row['name']; ?></h3>
                                        <span>от <?php echo $category_row['price_start']; ?> р.</span>
                                        <a href="/category.php?id=<?php echo $category_row['id']; ?>">Показать</a>
                                    </figcaption>
                                </figure>
                                <?php } else { ?>
                                <figure class="whiteBox bottom">
                                    <img src="<?php echo $category_row['image']; ?>" alt="">
                                    <figcaption>
                                        <h3><?php echo $category_row['name']; ?></h3>
                                        <span>от <?php echo $category_row['price_start']; ?> р.</span>
                                        <a href="/category.php?id=<?php echo $category_row['id']; ?>">Показать</a>
                                    </figcaption>
                                </figure>
                        <?php
                                }
                                $even++;
                            }
                        ?>
                        <figure class="orangeBlock">
                            <img src="img/orangeBlock_girl1.png" alt="">
                            <div class="orangeBlock__wrapper">
                                <figcaption>
                                    <h2>Готовые образы<br>от стилиста</h2>
                                    <a href="/looks.php">Смотреть</a>
                                </figcaption>
                            </div>
                        </figure>
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
    <script src="js/main.js"></script>

    <script>
        /* == [OWL SLIDER] == */
        $('.mainSlider').owlCarousel({
            items: 1,
            loop: true,
            lazyLoad: true,
            autoplay: true,
            autoplayHoverPause: true,
            nav: false,
            dots: true
        });
    </script>
    <!-- [/SCRIPTS] -->
</body>
</html>
