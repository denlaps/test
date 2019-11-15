<?php
    include ('../elements/db.php');
    $email = $_POST['email'];


    if($db->query("INSERT INTO `subscriber` (email, created_at, updated_at) VALUES('$email', NOW(), NOW())") === TRUE) {
        header('Content-type: application/json');
        $res['status'] = 1;
        $res['message'] = "You successfylly subscribed";
        
        echo json_encode($res);
    } else {
        header('Content-type: application/json');
        $res['status'] = 0;
        $res['message'] = "Can't subscribe";
        
        echo json_encode($res);
    }
    
?>