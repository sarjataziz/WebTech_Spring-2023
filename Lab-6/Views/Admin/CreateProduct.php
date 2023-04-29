<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
} 

    include "../CommonLayer/header.php";
?>

<h1>Create a new Product</h1>
<div class="p-5 m-auto mt-5 border col-6">
    <form action="../../Controllers/ProductController.php" method="post">
        <div class="mb-3">
            <label class="form-label">Product ID</label>
            <input type="number" class="form-control" name="productId">
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">image url</label>
            <input type="text" class="form-control" name="imgUrl">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

<?php include "../CommonLayer/footer.php"; ?>