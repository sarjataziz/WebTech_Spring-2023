<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }
    require_once "../CommonLayer/header.php";
?>

<table align="center">
    <tr>
        <td> <img src="image/login.png" alt="logo" width="100px" height="100px"></td>
        <td>
            <h2>Baiki Shoe</h2>
        </td>
    </tr>
</table>
<br><br>
<h2>Welcome <?php echo $_SESSION["username"] ?></h2><br> <br>
<a href="dashBoard.php">Dashboard</a><br>
<a href="viewProfile.php">View Profile</a><br>
<a href="editProfile.php">Edit Profile</a><br>
<a href="form.php">Change Profile Picture</a><br>
<a href="changePassword.php">Change Password</a><br>
<a href="../../Controllers/logoutController.php">Logout</a><br>
<a href="userDetails.php">User Details</a><br>
<a href="productDetails.php">Product Details</a><br>
<a href="categoryDetails.php">Category Details</a><br>
<a href="editCategory.php">Edit Category</a><br>
<a href="editProduct.php">Edit Product</a><br>
<a href="addProduct.php">Add Product</a><br>
<a href="productDetails.php">Product Details</a><br>
<a href="addCategory.php">Add Category</a><br>
<a href="categoryDetails.php">Category Details</a><br>

<?php require_once "../CommonLayer/footer.php"; ?>