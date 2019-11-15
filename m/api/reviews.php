<?php
    include ('../elements/db.php');

    $limit = $_GET["limit"];
    $offset = $_GET["offset"];

    $review_res = mysqli_query($db, "SELECT * FROM review LIMIT $limit OFFSET $offset");
    $review_row = mysqli_fetch_all($review_res, MYSQLI_ASSOC);
    $next_offset = $offset + $limit;
    $result['data'] = $review_row;
    $result['next_url'] = '/api/reviews.php?limit='.$limit.'&offset='.$next_offset;
     
    header('Content-type: application/json');
    echo json_encode($result);
?>