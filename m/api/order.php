<?php
    include ('../elements/db.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $basket = $_POST['basket'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $house = $_POST['house'];
    $apt = $_POST['apt'];
    $bonus = $_POST['bonus'];
    $payment = $_POST['payment'];
    $total = $_POST['total'];

    if($db->query("INSERT INTO `order` (name, lastname, phone, city, type, street, num, apt, bonus, total, payment, created_at, updated_at) VALUES('$name', '$lastname', '$phone', '$city', 'tp', '$street', '$house', '$apt', '$bonus', '$total', '$payment', NOW(), NOW())") === TRUE) {
        $last_id = $db->insert_id;
        foreach ($basket as $value) { 
            $good_id = $value['good_id'];
            $color = $value['color'];
            $quantity = $value['quantity'];
            $size = $value['size'];
            $db->query("INSERT INTO `order_good` (order_id, good_id, color, size, quantity, created_at, updated_at) VALUES('$last_id', '$good_id', '$color', '$size', '$quantity', NOW(), NOW())");
        } 

        header('Content-type: application/json');
        $res['status'] = 1;
        $res['message'] = "Order successfully added with id ".$last_id;
        
        echo json_encode($res);
    }
    
?>