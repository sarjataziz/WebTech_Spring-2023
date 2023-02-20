<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" type="text/css">
    <title>Change password</title>
</head>

<body>
    <center>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
                <h1>Login to Website</h1><br>
                <table>
                    <tr>
                        <td><label for="current_password">Current Password: </label></td>
                        <td><input type="text" name="current_password" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="new_password">New Password: </label></td>
                        <td><input type="text" name="new_password" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="retype_password">Retype Password: </label></td>
                        <td><input type="text" name="retype_password" required><br></td>
                    </tr>
                    <tr>
                        <td align="right"><input type="submit" name="submit" value="submit"></td>
                        <td><a href="login.php">Go to login page</a></td>
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