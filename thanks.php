<?php 
    include ('./elements/header.php');
?>

        <section class="contentWrapper">
        <?php 
            include ('./elements/sidebar.php');
        ?>

            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [MAIN] -->
                <main>
                    <figure class="orangeBlock">
                        <img src="img/thanksGirl.png" alt="">
                        <div class="orangeBlock__wrapper">
                            <figcaption>
                                <h2>Спасибо<br>за заказ</h2>
                                <span>
                                    Заказ оплачен полностью и будет<br>
                                    доставлен вам в течение 4 дней.<br>
                                    Информация о заказе отправлена<br>
                                    на указанный вами электронный адрес.
                                </span>
                                <a href="/">Перейти на главную</a>
                            </figcaption>
                        </div>
                    </figure>
                </main>
                <!-- [/END] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    
    <?php 
        include ('./elements/footer.php');
    ?>

    <!-- [SCRIPTS] -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/main.js"></script>
    <!-- [/SCRIPTS] -->
</body>
</html>