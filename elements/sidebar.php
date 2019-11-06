 <?php
    include ("db.php");
    $categories_res = mysqli_query($db, "SELECT * FROM category");
?>
 <!-- [LEFT SIDE MENU] -->
 <aside>
                <nav class="menuBar">
                    <li><a href="#">НОВИНКИ</a></li>
                    <li><a href="#">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</a></li>
                    <li><a href="#">РАСПРОДАЖА</a></li>
                    <?php while ($categories_row = mysqli_fetch_array($categories_res)) { 
                        if ($categories_row['is_full_on_sidebar'] == 1) { ?>
                            <?php $cat_id = $categories_row['id']; $goods_res = mysqli_query($db, "SELECT * FROM good WHERE category_id = $cat_id"); ?>
                            <li>
                            <a href="/category.php?id=<?php echo $categories_row['id']; ?>" class="menuBar__more"><?php echo $categories_row['name']; ?></a>
                                <ul>
                                    <?php while ($goods_row = mysqli_fetch_array($goods_res)) {  ?>
                                        <li><a href="/good.php?id=<?= $goods_row['id'] ?>"><?php echo $goods_row['name']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li><a href="/category.php?id=<?php echo $categories_row['id']; ?>"><?php echo $categories_row['name']; ?></a></li>
                        <?php 
                            }
                        } ?>
                    <li>    
                    </li>
                </nav>
            </aside>
            <!-- [/END MENU] -->