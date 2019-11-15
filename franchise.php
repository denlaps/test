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
                    <li><a href="franchise.php">Франшиза</a></li>
                </nav>
                <h1>Франшиза</h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main>
                    <form class="franchiseForm" action="">
                        <span class="franchiseForm__hText">
                            Узнайте о преимуществах и условиях франчайзинга магазинов украшенийи аксессуаров «Assorti», оставив заявку и контактные данные.
                        </span>
                        <div class="franchiseForm__wrapper">
                            <div class="franchiseForm__left">
                                <input type="text" placeholder="Ваше имя">
                                <input type="text" placeholder="Ваш e-mail">
                                <input type="text" placeholder="Ваш телефон">
                            </div>
                            <div class="franchiseForm__right">
                                <textarea placeholder="Ваше сообщение"></textarea>
                                <input type="submit">
                            </div>
                        </div>
                        <span class="franchiseForm__uText">
                            Нажимая на кнопку «Отправить», я соглашаюсь на обработку персональных данных
                            и ознакомлен(а) с условиями конфиденциальности.
                        </span>
                    </form>

                    <button class="questionModal">У меня есть вопрос</button>
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