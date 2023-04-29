<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
    }
    require_once "../../Views/CommonLayer/header.php"; 
?>

<div class="container">
    <h2 align="center"><a href="dashBoard.php">Dashboard</a><br></h2>
    <form action="../Controllers/userController.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <h1>Change Password</h1> <br><br>
            <table>
                <tr>
                    <td><label>Current Password: </label></td>
                    <td><input type="text" name="current_password" placeholder="Current Password"></td>
                </tr>
                <tr>
                    <td><label>New Password: </label></td>
                    <td><input type="new-password" name="new_password" placeholder="New Password"></td>
                </tr>
                <tr>
                    <td><label>Confirm Password: </label></td>
                    <td><input type="confirm-password" name="confirm_password" placeholder="Confirm Password"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="forgetPassword.php">Forget Password?</a></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="login.php">Login</a></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>


<?php include "../../Views/CommonLayer/footer.php"; ?>