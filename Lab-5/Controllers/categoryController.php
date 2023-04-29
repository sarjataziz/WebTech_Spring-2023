<?php

    require_once '../../Models/database_config.php';

    $category_name = $error_category_name = "";
    $db_error = "";

    if(isset($_POST['add_category'])){
        if(empty($_POST['name'])){
            $error_category_name = "Category name is required";
        }else{
            $category_name = $_POST['name'];
        }
        if(!$error_category_name){
            $result_check = insertCategory($category_name);
            if($result_check === true){
                header ("Location: ../../Views/Admin/categoryDetails.php");
            }else{
                //var_dump($result_check);
                $db_error = "Duplicate entry for key Category Name'";
            }
        }
    }

    else if(isset($_POST['edit_category'])){
        if(empty($_POST['name'])){
            $error_category_name = "Category name is required";
        }else{
            $category_name = $_POST['name'];
        }
        if(!$error_category_name){
            $result_check = updateCategory($_POST['id'], $category_name);
            if($result_check === true){
                header ("Location: ../../Views/Admin/categoryDetails.php");
            }else{
                //var_dump($result_check);
                $db_error = "Duplicate entry for key Category Name'";
            }
        }
    }

    function insertCategory($category_name){
        $query = "insert into categories values (NULL, '$category_name') order by id asc";
        return execute($query);
    }

    function getAllCategories(){
        $query = "select * from categories";
        $result = get($query);
        return $result;
    }

    function getCategory($id){
        $query = "select * from categories where id = $id";
        $result = get($query);
        return $result[0]; 
        //Here, return first element of the array and not the whole array and to pass only 1 instance of the array
    }

    function updateCategory($id, $category_name){
        $query = "update categories set name = '$category_name' where id = $id";
        return execute($query);
    }
    
?>