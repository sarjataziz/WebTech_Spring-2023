<?php require_once "../CommonLayer/header.php"; ?>
<?php include "../../Controllers/registrationController.php"; ?>

<div class="container">

    <form action="" method="POST">
        <fieldset>
            <h1>Login</h1>
            <h3 style="color:red"><?php echo $db_error; ?></h3>
            <table align="center">
                <tr>
                    <td><label>Username: </label></td>
                    <td><input type="text" name="username" placeholder="Username"></td>
                    <td><span style="color:red"><?php echo $error_username; ?></span></td>
                </tr>
                <tr>
                    <td><label>Password: </label></td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                    <td><span style="color:red"><?php echo $error_password; ?></span></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" name="login" value="Submit"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><a href="forgetPassword.php">Forget Password?</a></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><a href="registration.php">Create New Account?</a></td>
                </tr>
            </table>
        </fieldset>
    </form>

</div>

<?php require_once "../CommonLayer/footer.php"; ?>