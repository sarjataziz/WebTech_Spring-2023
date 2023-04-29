<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }

    require_once "../CommonLayer/header.php"; 
    require_once '../../Controllers/categoryController.php'; 
?>

<div class="container">

    <h2>Baiki Shoe</h2>

    <h2>Welcome <?php echo $_SESSION["username"] ?></h2><br>
    <h3 align="center">Category Details</h3>

    <table align="center">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Product Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                $categories = getAllCategories();
                foreach($categories as $category){
                    echo "<tr>";
                        //echo "<td>".$category["id"]."</td>";
                        echo "<td>$i</td>";
                        echo "<td>".$category["name"]."</td>";
                        //echo "<td>".$category["quantity"]."</td>";
                        echo '<td><a href="editCategory.php?id='.$category["id"].'">Edit</a></td>';
                        echo '<td><a href="deleteCategory.php?id='.$category["id"].'">Delete</a></td>';
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<!--
echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>".$category["name"]."</td>";
    echo "<td>".$category["quantity"]."</td>";
    echo '<td><a href="editCategory.php">Edit</a></td>';
    echo '<td><a href="deleteCategory.php">Delete</a></td>';
    echo "</tr>";
    -->



<?php require_once "../CommonLayer/footer.php"; ?>