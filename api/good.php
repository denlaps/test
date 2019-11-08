<?php
    include ('../elements/db.php');
    if (isset($_GET["id"])) {
        $good_id = $_GET["id"];
    } else {
        header('Location: /404.php');
    }
    $good_res = mysqli_query($db, "SELECT * FROM good LEFT JOIN good_photo ON good.id = good_photo.good_id WHERE good.id = $good_id LIMIT 1");
    $good_row = mysqli_fetch_assoc($good_res);
    $good_main_photo_res = mysqli_query($db, "SELECT * FROM good_photo WHERE good_id = $good_id AND is_main = 1 LIMIT 1");
    $good_main_photo_row = mysqli_fetch_assoc($good_main_photo_res);
    $good_sizes_res = mysqli_query($db, "SELECT * FROM good_size WHERE good_id = $good_id");
    $good_sizes_row = mysqli_fetch_all($good_sizes_res, MYSQLI_ASSOC);
    $good_colors_res = mysqli_query($db, "SELECT * FROM good_color WHERE good_id = $good_id");
    $good_colors_row = mysqli_fetch_all($good_colors_res, MYSQLI_ASSOC);
    $good_row['photo'] = $good_main_photo_row;
    $good_row['sizes'] = $good_sizes_row;
    $good_row['colors'] = $good_colors_row;
    $good_json = json_encode($good_row, JSON_UNESCAPED_UNICODE);
    
    header('Content-type: application/json');
    echo $good_json;
?>