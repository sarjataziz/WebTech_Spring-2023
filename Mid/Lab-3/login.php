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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
                        <td align="right">
                            <a href="load.php"> <input type="submit" name="submit" value="submit"></a>
                        </td>
                        <td><a href="changePassword.php">Forget Password?</a></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
    <?php
    $nameError = $passwordError = "";
    $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameError = "Username is required";
        } else {
            $username = ($_POST["username"]);
            if (!preg_match("/^[a-zA-Z-' ]*.{2,30}$/", $username)) {
                $usernameError = "Only letters and white space allowed with at least 2 characters";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["password"])) {
            $passwordError = "Password is required";
        } else {
            $password = ($_POST["password"]);
            if (!preg_match("/^[0-9' ]*.{8,12}$/", $password)) {
                $passwordError = "At least 8 digit needed";
            }
        }
    }
    ?>
</body>

</html>