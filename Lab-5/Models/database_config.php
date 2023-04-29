<?php

    // Connect to the database
    
    $db_servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "exapme_db";

    

    function execute($query){ 
        
        global $db_servername, $db_username, $db_password, $db_name;
        $database_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

        if (!$database_connection) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            if (mysqli_query($database_connection, $query)) {
                return true;
            }
            return mysqli_errno($database_connection);
        }
    }
    
 
    /*
    function get($query){ 

        global $db_servername, $db_username, $db_password, $db_name;
        $database_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

        if (!$database_connection) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            $results = mysqli_query($database_connection, $query);
            $data = array();
            if (mysqli_num_rows($results) > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    } 
    
    function get($query){ 

        global $db_servername, $db_username, $db_password, $db_name;
        $database_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

        $data = array();
        if (!$database_connection) {
            die("Connection failed: " . mysqli_connect_error());
        }else{
            $results = mysqli_query($database_connection, $query);
                while ($row = mysqli_fetch_assoc($results)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

     

    function execute($query){ 
        
        global $db_servername, $db_username, $db_password, $db_name;
        $database_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

        if($database_connection){
            if (mysqli_query($database_connection, $query)) {
                return true;
            }
            return mysqli_errno($database_connection);
        }
    }
    */ 
    
    function get($query){ 

        global $db_servername, $db_username, $db_password, $db_name;
        $database_connection = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

        $data = array();
        if($database_connection){
            $results = mysqli_query($database_connection, $query);

            while ($row = mysqli_fetch_assoc($results)) {
                $data[] = $row;
            }   
        }
        return $data;
    }
?>