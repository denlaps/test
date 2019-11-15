<?php
    include ('../elements/db.php');
    //TODO: фильтр по цветам
    $cf = " WHERE g.id > 0 ";
    $search = "";
    $query = 0;
    if (isset($_GET["search"]) && $_GET["search"] != '0') {
        $query = $_GET["search"];
        $search = " AND g.name LIKE '%$query%' ";
    }
    
    if (isset($_GET["id"])) {
        $category_id = $_GET["id"];
        if ($category_id == "all") {
            $cf = " WHERE g.id > 0 ";
        } else {
            $cf = " WHERE g.category_id = $category_id ";
        }

        $limit = $_GET["limit"];
        $sale = 0;
        $new = 0;
        $best = 0;
        $q = "";
        if (isset($_GET["sale"]) && (int)$_GET["sale"] != 0) {
            $sale = 1;
            $new = 0;
            $best = 0;
            $q =  "AND g.is_on_sale = $sale ";
        } 

        if (isset($_GET["new"]) && (int)$_GET["new"] != 0) {
            $sale = 0;
            $new = 1;
            $best = 0;
            $q =  "AND g.new = $new ";
        }

        if (isset($_GET["best"]) && (int)$_GET["best"] != 0) {
            $sale = 0;
            $new = 0;
            $best = 1;
            $q =  "AND g.best = $best ";
        }

        if (isset($_GET["page"])) {
            $offset = $_GET["page"] * 12 - 12;
        } else {
            $offset = $_GET["offset"];
        }
    } else {
        $category_id = "all";
    }

    $good_res = mysqli_query($db, "SELECT g.*, gp.photo FROM good as g LEFT JOIN good_photo as gp ON g.id = gp.good_id AND gp.is_main = 1  
        ".$cf.$q.$search." LIMIT $limit OFFSET $offset");
    $good_row = mysqli_fetch_all($good_res, MYSQLI_ASSOC);
    $next_offset = $offset + $limit;
    $result['data'] = $good_row;
    $result['next_url'] = '/api/category.php?id='.$category_id.'&limit='.$limit.'&offset='.$next_offset.'&sale='.$sale.'&new='.$new.'&best='.$best.'&search='.$query;
    $result['page'] = $offset / $limit + 1;
     
    header('Content-type: application/json');
    echo json_encode($result);
?>