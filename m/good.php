
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->
        <?php 
            
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
            
            if(!$good_main_photo_row['photo']) {
                $good_main_photo_row['photo'] = 'img/box.jpg';
            }
        ?>
        <!-- [MAIN CONTAINER] -->
        <main class="goodPage">

            <!-- [MAIN CONTENT] -->
            
            <!-- [GOOD PAGE] -->
            <section class="goodPage__wrapper">
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
                        <span>12-54651-56</span>
                    </section>

                    <button class="goodPage__toCart">
                        <i class="fas fa-shopping-basket"></i>
                        <span>В корзину</span>
                    </button>
                    <button class="goodPage__buy1click">Купить в один клик</button>

                    <figure class="goodPage__descr">
                        <h4>Описание:</h4>
                        <figcaption>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, suscipit, similique
                            veritatis magnam et accusantium atque optio est molestias sed quam ad autem aspernatur
                            reiciendis dicta eaque, libero non voluptates?
                        </figcaption>
                    </figure>

                    <figure class="goodPage__props">
                        <h4>Состав:</h4>
                        <figcaption>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, suscipit, similique
                            veritatis magnam et
                            accusantium atque optio est molestias sed quam ad autem aspernatur reiciendis dicta
                            eaque, libero non
                            voluptates?
                        </figcaption>
                    </figure>
                </section>
            </section>
            <!-- [/END GOOD] -->

            <section class="bottomSlider">
                <h2>Сочетается с...</h2>
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

            <section class="sameGoods">
                <h2>К вашему образу<br>так же подойдут</h2>
                <div class="sameGoods__wrapper">
                    <figure>
                        <a href="#">
                            <img src="uploads/bigCap.jpg" alt="">
                        </a>
                        <div class="goodPanel">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                        <figcaption>
                            <div class="goodTitle">
                                <a href="#">Шапка женская</a>
                                <span>999 руб.</span>
                            </div>
                            <button><i class="fas fa-shopping-basket"></i></button>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="#">
                            <img src="uploads/bigCap.jpg" alt="">
                        </a>
                        <div class="goodPanel">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                        <figcaption>
                            <div class="goodTitle">
                                <a href="#">Шапка женская</a>
                                <span>999 руб.</span>
                            </div>
                            <button><i class="fas fa-shopping-basket"></i></button>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="#">
                            <img src="uploads/bigCap.jpg" alt="">
                            <div class="goodPanel">
                                <button><i class="far fa-heart"></i></button>
                            </div>
                        </a>
                        <figcaption>
                            <div class="goodTitle">
                                <a href="#">Шапка женская</a>
                                <span>999 руб.</span>
                            </div>
                            <button><i class="fas fa-shopping-basket"></i></button>
                        </figcaption>
                    </figure>
                    <figure>
                        <a href="#">
                            <img src="uploads/bigCap.jpg" alt="">
                        </a>
                        <div class="goodPanel">
                            <button><i class="far fa-heart"></i></button>
                        </div>
                        <figcaption>
                            <div class="goodTitle">
                                <a href="#">Шапка женская</a>
                                <span>999 руб.</span>
                            </div>
                            <button><i class="fas fa-shopping-basket"></i></button>
                        </figcaption>
                    </figure>
                </div>
            </section>
            
            <!-- [/END CONTENT] -->
        </main>
        <!-- [/MAIN CONTAINER] -->

        <!-- [FOOTER] -->
        <?php
            include ('elements/footer.php');
        ?>
        <!-- [/END FOOTER] -->
    </section>

   <!-- [SCRIPTS] -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="libs/owlcarousel/owl.carousel.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="libs/readmore/readmore.min.js"></script>

   <script src="js/main.js"></script>

   <script>
       /* == [OWL SLIDER] == */
       $('.bottomSlider__wrapper').owlCarousel({
           margin: 10,
           items: 2,
           loop: true,
           lazyLoad: true,
           autoplay: true,
           autoplayHoverPause: true,
           nav: true,
           dots: false
       });

        $('.goodPage__photo .owl-carousel').owlCarousel({
            margin: 10,
            items: 1,
            loop: true,
            lazyLoad: true,
            nav: false,
            dots: true
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