<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>Login</title>
</head>

<body>
    <center>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
                <h1>Login to Website</h1><br>
                <table>
                    <tr>
                        <td><label for="username">Username: </label></td>
                        <td><input type="text" name="username" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password: </label></td>
                        <td><input type="text" name="password" required><br></td>
                    </tr>
                    <tr>
                        <td align="right" colspan="2"><input type="checkbox" id="remember_me" name="remember_me"
                                value="remember_me">
                            <label for="remember_me">Remember Me</label><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><input type="submit" name="submit" value="submit"></td>
                        <td><a href="changePassword.php">Forget Password?</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
    <?php
            if(isset($_POST["submit"]))
            {
                $user_name = $_POST["username"];
                $user_password = $_POST["password"];
                if(($user_name =="Username" && $$user_password == "123"))
                {
                    echo "";
                }
                else{
                    echo "Incorrect Username and Password.";
                }
            }
            ?>
</body>

</html>