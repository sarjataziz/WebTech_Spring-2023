<?php require_once '../CommonLayer/header.php'; ?>
<?php require_once '../../Controllers/categoryController.php'; ?>


<div class="container">
    <form action="" method="post">
        <fieldset>
            <h1>Add Category</h1>
            <h3 style="color:red"><?php echo $db_error; ?></h3>
            <table>
                <tr>
                    <td><label>Category Name: </label></td>
                    <td><input type="text" name="name" value=""></td>
                    <td><span style="color:red"><?php echo $error_category_name; ?></span></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="add_category" value="Add Category"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>


<?php require_once '../CommonLayer/footer.php'; ?>