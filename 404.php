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
                        <img src="img/tryingFind.png" alt="">
                        <div class="orangeBlock__wrapper">
                            <figcaption>
                                <h2>Страница<br>не найдена</h2>
                                <span>
                                    Перейдите на главную<br>
                                    страницу сайта
                                </span>
                                <a href="#">Перейти на главную</a>
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