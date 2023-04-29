<?php
    require_once '../../Controllers/registrationController.php';

    $username = $_GET['username'];
    $result = checkUsername($username);
    
    if($result){
        echo "valid";
    }else{  
        echo "invalid";
    }
?>