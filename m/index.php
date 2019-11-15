        <?php
            include ('elements/header.php');
        ?>
        
        <?php
            $collection_res = mysqli_query($db, "SELECT * FROM collection WHERE is_main = 1 LIMIT 1");
            $category_res = mysqli_query($db, "SELECT * FROM category WHERE is_on_main_page = 1");
            $collection_row = mysqli_fetch_array($collection_res);
            
        ?>
        <!-- [/END HEAD] -->

        <!-- [MAIN CONTAINER] -->
        <main class="homePage">
            <section class="firstSection">
                <figure class="mainSlider">
                    <figcaption>
                        <span class="mainSlider__caption"><?php echo $collection_row['season'] ?> <?php echo $collection_row['year'] ?></span>
                        <h2><?php echo $collection_row['title'] ?></h2>
                        <a href="/m/collection.php?id=<?= $collection_row['id'] ?>">Смотреть</a>
                    </figcaption>
                </figure>
                <a href="#" class="autumnLook">
                    <figure>
                        <img src="<?php echo $collection_row['image'] ?>" alt="">
                        <div class="autumnLook__wrapper">
                            <figcaption>
                                <h2><?php echo $collection_row['call_to_action'] ?></h2>
                            </figcaption>
                        </div>
                    </figure>
                </a>
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
                            <a href="#">Смотреть</a>
                        </figcaption>
                    </div>
                </figure>
            </section>
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
    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>