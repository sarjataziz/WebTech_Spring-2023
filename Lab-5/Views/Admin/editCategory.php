<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }
    require_once '../CommonLayer/header.php'; 
    require_once '../../Controllers/categoryController.php'; 
    
    $id = $_GET["id"];
    $category = getCategory($id);
?>

<div class="container">
    <h2>Edit Category</h2><br>
    <h5 style="color:red"><?php echo $db_error; ?></h5>
    <form action="" method="post">
        <table>
            <tr>
                <td><label>Category Name: </label></td>
                <td><input type="hidden" name="id" value="<?php echo $category["id"]; ?>"></td>
                <td><input type="text" name="name" value="<?php echo $category["name"]; ?>"></td>
                <td><span style="color:red"><?php echo $error_category_name; ?></span></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" name="edit_category" value="Edit Category"></td>
            </tr>
        </table>
    </form>
</div>



<?php require_once '../CommonLayer/footer.php'; ?>