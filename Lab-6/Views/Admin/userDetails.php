<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }
    
    require_once "../CommonLayer/header.php"; 
    include "../../Controllers/registrationController.php";
?>

<div class="container">
    <h2>Welcome <?php echo $_SESSION["username"] ?></h2><br>
    <h3 align="center">User's Details</h3>

    <table align="center">
        <thead>
            <tr>
                <th>Users' ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                $users = getAllUsers();
                foreach($users as $user){
                    echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>".$user["name"]."</td>";
                        echo "<td>".$user["email"]."</td>";
                        echo "<td>".$user["username"]."</td>";
                        echo "<td>".$user["password"]."</td>";
                        echo '<td><a href="editUser.php?id='.$user["id"].'">Edit</a></td>';
                        echo '<td><a href="deleteUser.php?id='.$user["id"].'">Delete</a></td>';
                    echo "</tr>";
                    $i++;
                }
                
            ?>
        </tbody>
    </table>
</div>

<?php include "../CommonLayer/footer.php"; ?>