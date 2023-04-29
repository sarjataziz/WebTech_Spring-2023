<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    html,

    body {
        background-color: #f1f1f1;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        color: #333;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    #error_username {
        display: block !important;
        color: red !important;
    }

    .container {
        width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px #000;
        text-align: center;
        margin-top: 400px;

    }

    table {
        width: 100%;
    }

    table tr td {
        padding: 5px;
    }

    table tr td input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    table tr td input[type="submit"] {
        background-color: #333;
        color: #fff;
        cursor: pointer;
    }


    constant {
        text-align: center;

        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;

    }
    </style>
</head>

<body>
    <div id="content">
        <a href="dashBoard.php">DashBoard</a>
        <a href="addProduct.php">Add Product</a>
        <a href="productDetails.php">Product Details</a>
        <a href="addCategory.php">Add Category</a>
        <a href="categoryDetails.php">Category Details</a>
        <a href="logout.php">Logout</a>
    </div>