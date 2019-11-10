<?php
    include ('../elements/db.php');

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

    $order_res = mysqli_query('INSERT INTO orders() VALUES')
?>