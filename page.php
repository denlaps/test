<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_GET["id"])) {
    $page_id = $_GET["id"];
} else {
    header('Location: 404.php');
}
include ('elements/header.php');
?>

        <section class="contentWrapper">
        <?php 
            include ('elements/sidebar.php');

            $page_res = mysqli_query($db, "SELECT * FROM `page` WHERE identifier = '$page_id' LIMIT 1");
            $page_row = mysqli_fetch_array($page_res);
        ?>

            <!-- [RIGHT SIDE] -->
            <section class="mainContent">
                <!-- [Head] -->
                <nav class="minLinks">
                    <li><a href="/">Главная</a></li>
                    <li><a href="#">Покупателям</a></li>
                    <li><a href="/page.php?id=<?= $page_id ?>"><?= $page_row['name'] ?></a></li>
                </nav>
                <h1><?= $page_row['name'] ?></h1>
                <!-- [/End Head] -->

                <!-- [MAIN CONTENT] -->
                <main class="qaPage" style="font-weight: italic">
                    <?= $page_row['content'] ?>
                </main>
                <!-- [/END CONTENT] -->
            </section>
            <!-- [/END RIGHT] -->
        </section>
    </div>
    
        <?php 
            include ('elements/footer.php');
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