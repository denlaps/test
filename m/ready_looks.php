
        <!-- [HEAD] -->
        <?php
            include ('elements/header.php');
        ?>
        <!-- [/END HEAD] -->

        <!-- [MAIN CONTAINER] -->
        <main class="readyLooks">
            <!-- [Head] -->
            <h1>Готовые образы</h1>
            <!-- [/End Head] -->
            <nav class="readyLooks__nav">
                <section class="owl-carousel">
                    <li><a href="#" class="navItem_active">Праздничный</a></li>
                    <li><a href="#">Деловой</a></li>
                    <li><a href="#">Повседневный</a></li>
                    <li><a href="#">Пляжный</a></li>
                    <li><a href="#">Спорт</a></li>
                    <li><a href="#">Casual</a></li>
                </section>
            </nav>
            <section class="readyLooks__wrapper">
                <section class="readyLooks__photo">
                    <img src="uploads/girl1.jpg" class="readyLooks__photo_active" alt="">
                    <div class="readyLooks__chClothes">
                        <button data-src="uploads/girl1.jpg"></button>
                        <button data-src="uploads/girl2.jpg"></button>
                        <button data-src="uploads/girl3.jpg"></button>
                        <button data-src="uploads/girl4.jpg"></button>
                    </div>
                </section>
                <section class="readyLooks__useful">
                    <h3>К этому образу также подойдут:</h3>
                    <div class="goodsSlider">
                        <div class="goodsSlider__wrapper owl-carousel">
                            <div class="goodsSlider__item">
                                <a href="#">
                                    <img src="uploads/cap.jpg" alt="">
                                </a>
                                <div class="goodsSlider__addBtn">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                </div>
                            </div>
                            <div class="goodsSlider__item">
                                <a href="#">
                                    <img src="uploads/cap.jpg" alt="">
                                </a>
                                <div class="goodsSlider__addBtn">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                </div>
                            </div>
                            <div class="goodsSlider__item">
                                <a href="#">
                                    <img src="uploads/cap.jpg" alt="">
                                </a>
                                <div class="goodsSlider__addBtn">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                </div>
                            </div>
                            <div class="goodsSlider__item">
                                <a href="#">
                                    <img src="uploads/cap.jpg" alt="">
                                </a>
                                <div class="goodsSlider__addBtn">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                </div>
                            </div>
                            <div class="goodsSlider__item">
                                <a href="#">
                                    <img src="uploads/cap.jpg" alt="">
                                </a>
                                <div class="goodsSlider__addBtn">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                </div>
                            </div>
                            <div class="goodsSlider__item">
                                <a href="#">
                                    <img src="uploads/cap.jpg" alt="">
                                </a>
                                <div class="goodsSlider__addBtn">
                                    <button><i class="far fa-heart"></i></button>
                                    <button><i class="fas fa-shopping-basket"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <a href="#" class="readyLooks__toCart">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Весь образ</span>
                </a>
            </section>
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

        $('.goodsSlider__wrapper').owlCarousel({
            margin: 6,
            items: 2,
            loop: true,
            lazyLoad: true,
            autoplay: true,
            stagePadding: 6,
            autoplayHoverPause: true,
            nav: true,
            dots: false
        });

        $('.readyLooks__nav .owl-carousel').owlCarousel({
            items: 2,
            margin: 10,
            loop: true,
            autoplay: false,
            nav: true,
            dots: false
        });
    </script>

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>

</html>