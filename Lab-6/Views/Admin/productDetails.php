<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }
    require_once "../CommonLayer/header.php"; 
    require_once "../../Controllers/productController.php";

    $products = getAllProducts();
?>

<h2>Welcome <?php echo $_SESSION["username"] ?></h2><br>

<div class="container">
    <h3 align="center">Product Details</h3>

    <table align="center">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Product Description</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $i = 1;

                foreach($products as $product){
                    echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td><img src='".$product["img"]."' width='50px' height='50px'></td>";
                        echo "<td>".$product["name"]."</td>";  
                        echo "<td>".$product["c_id"]."</td>";  
                        echo "<td>".$product["category_name"]."</td>";              
                        echo "<td>".$product["price"]."</td>";
                        echo "<td>".$product["quantity"]."</td>";
                        echo "<td>".$product["description"]."</td>";        
                        // echo "<td>".$product["product_image"]."</td>";
                        // echo "<td>".$product["category_name"]."</td>";
                        echo "<td><a href='editProduct.php?id=".$product["id"]."'>Edit</a></td>";
                        echo "<td><a href='deleteProduct.php?id=".$product["id"]."'>Delete</a></td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<?php require_once "../CommonLayer/footer.php"; ?>