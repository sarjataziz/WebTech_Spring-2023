<?php

    include '../../Models/database_config.php';
    
    $name = $email = $username = $password = "";
    $error_name = $error_email = $error_username = $error_password = "";
    $db_error = "";
    $hasError = false;

    if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $error_name = "Name is required";
            $hasError = true;
        }else{
            $name = $_POST['name'];
        }
        if(empty($_POST['email'])){
            $error_email = "Email is required";
            $hasError = true;
        }else{
            $email = $_POST['email'];
        }
        if(empty($_POST['username'])){
            $error_username = "Username is required";
            $hasError = true;
        }else{
            $username = $_POST['username'];
        }
        if(empty($_POST['password'])){
            $error_password = "Password is required";
            $hasError = true;
        }else{
            $password = $_POST['password'];
        }
        if(!$hasError){
            $result_check = insetUsers($name, $email, $username, $password);
            if($result_check === true){
                header ("Location: ../../Views/Admin/login.php");
            }else{
                var_dump($result_check);
                $db_error = $result_check;
            }
        }
    }

    elseif (isset($_POST['login'])) {
        if(empty($_POST['username'])){
            $error_username = "Username is required";
            $hasError = true;
        }else{
            $username = $_POST['username'];
        }

        if(empty($_POST['password'])){
            $error_password = "Password is required";
            $hasError = true;
        }else{
            $password = $_POST['password'];
        }
        
        if(!$hasError){
            $result_check = checkUsers($username, $password);
            if($result_check === true){
                session_start();
                $_SESSION['username'] = $username;
                header ("Location: ../../Views/Admin/dashBoard.php");
            }else{
                $db_error = "Username or Password is incorrect";
            }
        }
    }

    function validateEmail($email){
        $pos_at = strpos($email, "@");
        $pos_dot = strpos($email, ".", $pos_at+1);
        if($pos_at < $pos_dot){
            return true;
        }
        return false;
    }

    function insetUsers($name, $email, $username, $password){
        $query = "insert into users values (NULL, '$name', '$username', '$email', '$password')";
        return execute($query);
    }

    function checkUsers($username, $password){
        $query = "select * from users where username = '$username' and password = '$password'";
        $result = get($query);
        if(count($result) > 0){
            return true;
        }
        return false;
    }

    function getAllUsers(){
        $query = "select * from users";
        $result = get($query);
        return $result;
    }

    function checkUsername($username){
        $query = "select * from users where username = '$username'";
        $result = get($query);
        if(count($result) > 0){
            return true;
        }
        return false;
    }
?>