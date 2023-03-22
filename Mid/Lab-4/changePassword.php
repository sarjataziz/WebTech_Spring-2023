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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <h1>Change Your Password</h1><br>
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
    $currentPasswordError = $newPasswordErr = $retypePasswordError = "";
    $currentPassword = $newPassword = $retypePassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["currentPassword"])) {
            $currentPasswordError = "current password is required";
        } else {
            $currentPassword = ($_POST["currentPassword"]);
            if (!preg_match("/^[0-9' ]*.{8,12}$/", $currentPassword)) {
                $currentPasswordError = "At least 8 digit needed";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["newPassword"])) {
            $newPasswordErr = "new password is required";
        } else {
            $newPassword = ($_POST["newPassword"]);
            if (!preg_match("/^[0-9' ]*.{8,12}$/", $newPassword)) {
                $newPasswordErr = "At least 8 digit needed";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["retypePassword"])) {
            $retypePasswordError = "retype new password ";
        } else {
            $retypePassword = ($_POST["retypePassword"]);
            if (!preg_match("/^[0-9' ]*.{8,12}$/", $newPassword)) {
                $retypePasswordError = "At least 8 digit needed";
            }
        }
    } else if (!($_POST['newPassword'] === $_POST['newPassword'])) {
        $reTypePasswordError = "Passwords must be same";
        $_POST['newPassword'] = "";
        $reTypePassword = "";
    } else {
        header('Location:login.php');
    }
    ?>
</body>

</html>