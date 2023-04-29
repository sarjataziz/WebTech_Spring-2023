<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }
    require_once "../CommonLayer/header.php"; 
    require_once "../../Controllers/productController.php";
    require_once '../../Controllers/categoryController.php';

    $categories = getAllCategories();

    $id = $_GET["id"];
    $products = getProduct($id);
?>

<h2>Welcome <?php echo $_SESSION["username"] ?></h2><br>

<div class="container">
    <h3 align="center">Edit Product</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td><label>Product Name: </label></td>
                <td><input type="text" name="name" value="<?php echo $products["name"]; ?>"></td>
                <td><input type="hidden" name="id" value="<?php echo $products["id"]; ?>"></td>
                <td><span style="color:red"><?php echo $error_product_name; ?></span></td>
            </tr>
            <tr>
                <td><label>Category: </label></td>
                <td>
                    <select name="c_id" id="c_id">
                        <option value="" disabled selected>Select Category</option>
                        <?php
                        foreach($categories as $category){
                            if($category["id"] == $products["c_id"]){
                                echo "<option value='".$category["id"]."' selected>".$category["name"]."</option>";
                            }else{
                                echo "<option value='".$category["id"]."'>".$category["name"]."</option>";
                            }
                        }
                    ?>
                    </select>
                </td>
                <td><span style="color:red"><?php echo $error_category_id; ?></span></td>
            </tr>
            <tr>
                <td><label>Product Price: </label></td>
                <td><input type="text" name="price" value="<?php echo $products["price"]; ?>"></td>
                <td><span style="color:red"><?php echo $error_price; ?></span></td>
            </tr>
            <tr>
                <td><label>Product Quantity: </label></td>
                <td><input type="text" name="quantity" value="<?php echo $products["quantity"]; ?>"></td>
                <td><span style="color:red"><?php echo $error_quantity; ?></span></td>
            </tr>
            <tr>
                <td><label>Product Description: </label></td>
                <td><textarea type="text" name="description" id="text" cols="60"
                        rows="5"><?php echo $products["description"]; ?></textarea></td>
                <td><span style="color:red"><?php echo $error_description; ?></span></td>
            </tr>
            <tr>
                <td><label>Product Image: </label></td>
                <td><input type="file" name="image" value="<?php echo $products["img"]; ?>"></td>
                <td><span style="color:red"><?php echo $error_image; ?></span></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="edit_product" value="Edit Product"></td>
            </tr>
        </table>
    </form>

</div>

<?php require_once "../CommonLayer/footer.php"; ?>