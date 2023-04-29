<?php
session_start();

include "../CommonLayer/header.php";
?>

<h1>Welcome <?php echo $_SESSION["username"] ?></h1>
<h2>Edit Your Profile</h2>
<div class="container">
    <form action="" method="POST">
        <fieldset>
            <legend><?php echo $_SESSION["username"] ?> Profile</legend>
            <table align="center">
                <tr>
                    <td><label>Name: </label></td>
                    <td><input type="text" id="name" name="name" placeholder="name"></td>
                </tr>
                <tr>
                    <td><label for="Username">Username: </label></td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    <td><label for="Password">Password: </label></td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td><label for="Gender">Gender: </label></td>
                    <td><input type="radio" name="gender" value="Male">Male <input type="radio" name="gender"
                            value="Female"> Female </td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="Save"></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <a href="Dashboard.php">
            <h2>Dashboard</h2>
        </a><br>
    </form>
</div>


<?php include "../CommonLayer/footer.php"; ?>