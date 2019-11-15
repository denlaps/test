<?php
    include ('../elements/db.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $review = $_POST['review'];


    if($db->query("INSERT INTO `review` (name, review, city, phone, created_at, updated_at) VALUES('$name', '$review', '$city', '$phone', NOW(), NOW())") === TRUE) {
        header('Content-type: application/json');
        $res['status'] = 1;
        $res['message'] = "Order successfully added";
        
        echo json_encode($res);
    } else {
        header('Content-type: application/json');
        $res['status'] = 0;
        $res['message'] = "Can't add review";
        
        echo json_encode($res);
    }
    
?>