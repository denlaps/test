<?php 
    include ('./elements/header.php');
?>

        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
        ?>


            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                </nav>
                <h1>О нас</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="aboutPage">
                    <img src="img/aboutUs.jpg" alt="">
                    <span>
                        Aксессуары Frimis созданы специально для девушек и женщин, стремящихся следовать модным тенденциям.<br>
                        Frimis - это широкий выбор бижутерии, аксессуаров, украшений для волос.
                    </span>

                    <section class="aboutPage__wrapper">
                        <figure>
                            <img src="img/about1.jpg" alt="">
                            <figcaption>Опыт работы с 2007 года</figcaption>
                        </figure>
                        <figure>
                            <img src="img/about2.jpg" alt="">
                            <figcaption>Регулярные скидки, акции, распродажи, накопительная бонусная система</figcaption>
                        </figure>
                        <figure>
                            <img src="img/about3.jpg" alt="">
                            <figcaption>Новинки поступления<br>каждую неделю</figcaption>
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
    <!-- [/SCRIPTS] -->
</body>
</html>