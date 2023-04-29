<?php

    require_once '../../Models/database_config.php';

    $product_name = $category_id = $price = $quantity = $description = $image = "";
    $error_product_name = $error_category_id = $error_price = $error_quantity = $error_description = $error_image = $error_category_name = "";
    $db_error = "";

    function insertProduct($product_name, $category_id, $price, $quantity, $description, $image){
        $query = "insert into products values (NULL, '$product_name', '$category_id', '$price', '$quantity', '$description', '$image')";
        return execute($query);
    }

    function getAllProducts(){
        $query = "select product.* , category.name as 'category_name' from products product left join categories category on category.id = product.c_id";
        $result = get($query);
        return $result;
    }

    function getProduct($id){
        $query = "select * from products where id = $id";
        $result = get($query);
        return $result[0]; 
        //Here, return first element of the array and not the whole array and to pass only 1 instance of the array
    }

    function updateProduct($id, $product_name, $category_id, $price, $quantity, $description, $image){
        $query = "update products set name = '$product_name', c_id = '$category_id', price = '$price', quantity = '$quantity', description = '$description', img = '$image' where id = $id";
        return execute($query);
    }

    function deleteProduct($id){
        $query = "delete from products where id = $id";
        return execute($query);
    }

    if(isset($_POST['add_product'])){

        if(empty($_POST['name'])){
            $error_product_name = "Product name is required";
        }else{
            $product_name = $_POST['name'];
        }
        if(empty($_POST['c_id'])){
            $error_category_name = "Category name is required";
        }else{
            $category_id = $_POST['c_id'];
        }
        if(empty($_POST['price'])){
            $error_price = "Price is required";
        }else{
            $price = $_POST['price'];
        }
        if(empty($_POST['quantity'])){
            $error_quantity = "Quantity is required";
        }else{
            $quantity = $_POST['quantity'];
        }
        if(empty($_POST['description'])){
            $error_description = "Description is required";
        }else{
            $description = $_POST['description'];
        }
        if(empty($_FILES['p_image']['name'])){
            $error_image = "Image is required";
        }else{
            $image = $_FILES['p_image']['name'];
        }
        
        if(!$error_product_name && !$error_category_name && !$error_price && !$error_quantity && !$error_description && !$error_image){
            
            $fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
            $file = "../../storage/products_image/".uniqid().".$fileType";
            move_uploaded_file($_FILES["p_image"]["tmp_name"], $file);

            $result_check = insertProduct($product_name, $category_id, $price, $quantity, $description, $file);
            if($result_check === true){
                header ("Location: ../../Views/Admin/productDetails.php");
            }else{
                //var_dump($result_check);
                $db_error = "Duplicate entry for key Product Name'";
            }
        }

    }     

    else if(isset($_POST['edit_product'])){    
        
        if(empty($_POST['name'])){
            $error_product_name = "Product name is required";
        }else{
            $product_name = $_POST['name'];
        }
        if(empty($_POST['c_id'])){
            $error_category_name = "Category name is required";
        }else{
            $category_id = $_POST['c_id'];
        }
        if(empty($_POST['price'])){
            $error_price = "Price is required";
        }else if(!is_numeric($_POST['price'])){
            $error_price = "Price must be a number";
        }else{
            $price = $_POST['price'];
        }
        if(empty($_POST['quantity'])){
            $error_quantity = "Quantity is required";
        }else if(!is_numeric($_POST['quantity'])){
            $error_quantity = "Quantity must be a number";
        }else{
            $quantity = $_POST['quantity'];
        }
        if(empty($_POST['description'])){
            $error_description = "Description is required";
        }else{
            $description = $_POST['description'];
        }
        if(empty($_FILES['image']['name'])){
            $error_image = "Image is required";
        }else{
            $image = $_FILES['image']['name'];
        }
        
        if(empty($error_product_name) && empty($error_category_id) && empty($error_price) && empty($error_quantity) && empty($error_description)  && empty($error_image)){

            $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
            $file = "../../storage/products_image/".uniqid().".$fileType";
            move_uploaded_file($_FILES["image"]["tmp_name"], $file);

            $result_check = updateProduct($_POST['id'], $product_name, $category_id, $price, $quantity, $description, $file);
            if($result_check === true){
                header ("Location: ../../Views/Admin/productDetails.php");
                exit;
            }else{
                $db_error = "Error updating product in the database";
            }
        }

    }

?>