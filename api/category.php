<?php
    include ('../elements/db.php');
    if (isset($_GET["id"])) {
        $category_id = $_GET["id"];
        $limit = $_GET["limit"];
        $offset = $_GET["offset"];
    } else {
        header('Location: 404.php');
    }

    $good_res = mysqli_query($db, "SELECT * FROM good LEFT JOIN good_photo ON good.id = good_photo.good_id AND good_photo.is_main = 1 WHERE good.category_id = $category_id LIMIT $limit OFFSET $offset");
    $good_row = mysqli_fetch_all($good_res, MYSQLI_ASSOC);
    $next_offset = $offset + $limit;
    $result['data'] = $good_row;
    $result['next_url'] = '/api/category.php?id='.$category_id.'&limit='.$limit.'&offset='.$next_offset;
    
    header('Content-type: application/json');
    echo json_encode($result);
?>