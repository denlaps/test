<?php
    include ("db.php");
    $categories_res = mysqli_query($db, "SELECT * FROM category");
?>
<!-- [PANELS] -->
<aside class="menuBar">
            <section class="menuBar__head">
                <button class="menuBar__toggle menuBar__toggle_close"><i class="fas fa-times"></i></button>
                <form class="searchBox" action="">
                    <input type="text" placeholder="Введите товар...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </section>
            <section class="menuBar__wrapper">
                <!-- [TOGGLE MENU] -->
                <nav class="firstMenu">
                    <li><a href="/m/category.php?id=all&new=1">НОВИНКИ</a></li>
                    <li><a href="/m/category.php?id=all&best=1">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</a></li>
                    <li><a href="/m/category.php?id=all&sale=1">РАСПРОДАЖА</a></li>

                    <?php while ($categories_row = mysqli_fetch_array($categories_res)) { 
                        if ($categories_row['is_full_on_sidebar'] == 1) { ?>
                            <?php $cat_id = $categories_row['id']; $goods_res = mysqli_query($db, "SELECT * FROM good WHERE category_id = $cat_id"); ?>
                            <li>
                            <a href="/m/category.php?id=<?php echo $categories_row['id']; ?>" class="menuBar__more"><?php echo $categories_row['name']; ?></a>
                                <ul>
                                    <?php while ($goods_row = mysqli_fetch_array($goods_res)) {  ?>
                                        <li><a href="/m/good.php?id=<?= $goods_row['id'] ?>"><?php echo $goods_row['name']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li><a href="/m/category.php?id=<?php echo $categories_row['id']; ?>"><?php echo $categories_row['name']; ?></a></li>
                        <?php 
                            }
                        } ?>
                </nav>
                <!-- [/END MENU] -->