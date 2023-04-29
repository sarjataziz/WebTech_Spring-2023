<?php

require_once '../../Controllers/registrationController.php';

$email = $_GET['email'];

if (validateEmail($email)) {
    echo "true";
} else {
    echo "false";
}
?>