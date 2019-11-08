<?php
    include ('../elements/db.php');
    if (isset($_POST)) { $data = $_POST; if ($data == '') { unset($data);} } 

    $order = json_encode($_POST);
    console.log($order);
?>