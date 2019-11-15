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
                    <li><a href="/">Главная</a></li>
                    <li><a href="#">Покупателям</a></li>
                    <li><a href="qaPage.php">Вопрос-ответ</a></li>
                </nav>
                <h1>Вопрос-ответ</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="qaPage">
                    <figure class="orangeBlock">
                        <img src="img/qaWoman.png" alt="">
                        <div class="orangeBlock__wrapper">
                            <figcaption>
                                <h2>Остались<br>вопросы?</h2>
                                <span>
                                    Напишите нам,<br>
                                    и менеджер перезвонит<br>
                                    вам в ближайшее время
                                </span>
                                <a href="#">Задать вопрос</a>
                            </figcaption>
                        </div>
                    </figure>

                    <h2>Доставка</h2>
                    <section class="qaPage__accordion">
                        <h3>Как получить заказ?</h3>
                        <div>
                            <p>
                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                            ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                            amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                            odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                        </div>
                        <h3>Возможен ли самовывоз?</h3>
                        <div>
                            <p>
                            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                            purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                            velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                            suscipit faucibus urna.
                            </p>
                        </div>
                        <h3>Есть ли примерка при доставке?</h3>
                        <div>
                            <p>
                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                            </p>
                            <ul>
                            <li>List item one</li>
                            <li>List item two</li>
                            <li>List item three</li>
                            </ul>
                        </div>
                        <h3>Каковы стоимость и сроки доставки заказа?</h3>
                        <div>
                            <p>
                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                            faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                            mauris vel est.
                            </p>
                            <p>
                            Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos.
                            </p>
                        </div>
                    </section>
                    <h2>Оплата</h2>
                    <section class="qaPage__accordion">
                        <h3>Как получить заказ?</h3>
                        <div>
                            <p>
                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                            ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                            amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                            odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                        </div>
                        <h3>Возможен ли самовывоз?</h3>
                        <div>
                            <p>
                            Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                            purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                            velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                            suscipit faucibus urna.
                            </p>
                        </div>
                        <h3>Есть ли примерка при доставке?</h3>
                        <div>
                            <p>
                            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                            </p>
                            <ul>
                            <li>List item one</li>
                            <li>List item two</li>
                            <li>List item three</li>
                            </ul>
                        </div>
                        <h3>Каковы стоимость и сроки доставки заказа?</h3>
                        <div>
                            <p>
                            Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                            et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                            faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                            mauris vel est.
                            </p>
                            <p>
                            Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos.
                            </p>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $('.qaPage__accordion').accordion({
        active: false,
        classes: {
            "ui-accordion-header": "qaPage__accordion_open",
            "ui-accordion-header-collapsed": "qaPage__accordion_closed",
            "ui-accordion-content": "qaPage__content"
        }
    });
    </script>

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>