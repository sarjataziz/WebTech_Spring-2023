<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }
    
    require_once '../CommonLayer/header.php'; 
    require_once '../../Controllers/productController.php';
    require_once '../../Controllers/categoryController.php';

    $categories = getAllCategories();
?>
<div class="container">
    <h1 align="center">Add Product</h1>
    <h5 style="color: red;"><?php echo $db_error; ?></h5>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Details</legend>
            <table align="center">
                <tr>
                    <td><label>Name: </label></td>
                    <td><input type="text" id="name" name="name" placeholder="name"><br>
                        <span style="color:red"><?php echo $error_product_name; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Category: </label></td>
                    <td>
                        <select name="c_id" id="">
                            <option disabled selected value="">Select Category</option>
                            <?php
                                foreach($categories as $category){
                                    echo "<option value='".$category['id']."'>".$category['name']."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Price: </label></td>
                    <td><input type="text" id="price" name="price" placeholder="price"><br>
                        <span style="color:red"><?php echo $error_price; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Quantity: </label></td>
                    <td><input type="text" id="quantity" name="quantity" placeholder="quantity"><br>
                        <span style="color:red"><?php echo $error_quantity; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Description: </label></td>
                    <td><textarea type="text" name="description" id="text" cols="60" rows="5"></textarea><br>
                        <span style="color:red"><?php echo $error_description; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label>Image: </label></td>
                    <td><input type="file" id="p_image" name="p_image" placeholder="image"><br>
                        <span style="color:red"><?php echo $error_image; ?></span>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="add_product" value="Save"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>

<?php require_once '../CommonLayer/footer.php'; ?>