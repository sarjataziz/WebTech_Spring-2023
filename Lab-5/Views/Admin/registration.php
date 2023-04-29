<?php include "../CommonLayer/header.php"; ?>
<script src="../../JavaScript/signup.js">
</script>
<?php include "../../Controllers/registrationController.php"; ?>
<script src="../../JavaScript/email.js">
</script>


<div class="container">
    <form action="" method="post">
        <fieldset>
            <legend>Registration</legend>
            <h3 style="color:red"><?php echo $db_error; ?></h3>
            <table align="center">
                <tr>
                    <td><label>Name: </label></td>
                    <td><input type="text" id="name" name="name" placeholder="name" value="<?php echo $name; ?>"></td>
                    <td><span style="color:red"><?php echo $error_name; ?></span></td>
                </tr>
                <tr>
                    <td><label for="Email">Email: </label></td>
                    <td><input type="email" onfocusout="checkEmail(this)" name="email" placeholder="Email"
                            value="<?php echo $email; ?>"></td>
                    <td><span style="color:red" id="error_email"><?php echo $error_email; ?></span></td>
                <tr>
                    <td><label for="Username">Username: </label></td>
                    <td><input type="text" onfocusout="checkUsername(this)" name="username" placeholder="Username"
                            value="<?php echo $username; ?>"></td><br>
                    <td><span style="color:red" id="error_username"><?php echo $error_username; ?></span></td>
                </tr>
                <tr>
                    <td><label for="Password">Password: </label></td>
                    <td><input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                    </td>
                    <td><span style="color:red"><?php echo $error_password; ?></span></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="Save"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</div>

<?php include "../CommonLayer/footer.php"; ?>