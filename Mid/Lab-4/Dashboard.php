<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/login.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Dashboard</title>
</head>

<body>
    <table align="center">
        <tr>
            <td> <img src="image/login.png" alt="logo" width="100px" height="100px"></td>
            <td>
                <h2>X-Company</h2>
            </td>
        </tr>
    </table>
    <br><br>
    <h2>Welcome <?php echo $_SESSION["username"] ?></h2><br>
    <a href="Dashboard.php">Dashboard</a><br>
    <a href="viewProfile.php">View Profile</a><br>
    <a href="editProfile.php">Edit Profile</a><br>
    <a href="form.php">Change Profile Picture</a><br>
    <a href="changePassword.php">Change Password</a><br>
    <a href="logout.php">Logout</a><br>

</body>

</html>