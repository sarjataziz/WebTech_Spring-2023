<?php
$username = $password = "";
$error_username = $error_password = "";
$hasError = false;

$users = array("admin" => "1234", "user" => "1234");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $error_username = "Username Required";
        $hasError = true;
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["password"])) {
        $error_password = "Password Required";
        $hasError = "true";
    } else {
        $password = $_POST["password"];
    }

    if (!$hasError) {
        foreach ($users as $u => $p) {
            if ($username == $u && $password == $p) {
                session_start();
                $_SESSION["username"] = $username;
                header("Location: Dashboard.php");
            }
        }
    } else {
        echo "Invalid Username or Password";
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'forgotPassword') {
    $username = "test";
    $users = json_decode(file_get_contents('users.json'), true);
    foreach ($users as $user => $value) {
        if (($value->username) === $username) {
            header('Location:forgetPassword.php');
        }
    }
    header('Location:ChangePassword.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/login.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Login</title>
</head>

<body>
    <h1>Welcome to login page</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td><label>Username: </label></td>
                    <td><input type="text" id="username" name="username" placeholder="Username" required></td>
                    <td><span><?php echo $error_username; ?></span></td>
                </tr>
                <tr>
                    <td><label>Password: </label></td>
                    <td><input type="text" id="password" name="password" placeholder="password" required></td>
                    <td><span><?php echo $error_password; ?></span></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="checkbox" id="remember_me" name="remember_me" value="remember_me">
                        <label for="remember_me">Remember Me</label><br><br>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="3"><a href="<?php echo $_SERVER['PHP_SELF'] . ""; ?>?action=forgotPassword">Forgot Password?</a>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="Login"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>

</html>