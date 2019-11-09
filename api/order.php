<?php
    include ('../elements/db.php');

    $basket = $_POST['basket'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    echo $name.' '.$lastname;
?>