<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    function validateUsername() {
        var x = document.forms["myForm"]["username"].value;
        if (x == "") {
            document.getElementById("usernameError").innerHTML = "Name must be filled out";
            document.getElementById("username").style.borderColor = "red";
            return false;
        } else {
            document.getElementById("usernameError").innerHTML = "";
            document.getElementById("username").style.borderColor = "";
            return true;
        }
    }

    function validatePassword() {
        var y = document.forms["myForm"]["password"].value;
        if (y == "") {
            document.getElementById("passwordError").innerHTML = "Password must be filled out";
            document.getElementById("password").style.borderColor = "red";
            return false;
        } else {
            document.getElementById("passwordError").innerHTML = "";
            document.getElementById("password").style.borderColor = "";
            return true;
        }
    }

    function validateForm() {
        if (!validateUsername()) {
            return false;
        }
        if (!validatePassword()) {
            return false;
        }
        return true;
    }
    </script>
    <title>Login</title>
    <style>
    body {
        background-color: #f1f1f1;
    }

    .container {
        width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    table {
        width: 100%;
    }

    table tr td {
        padding: 10px;
    }

    table tr td label {
        font-weight: bold;
    }

    table tr td input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    table tr td input[type="submit"] {
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    table tr td input[type="submit"]:hover {
        background-color: #555;
    }
    </style>
</head>

<body>
    <h1>Class Task</h1>
    <div class="container">
        <form name="myForm" onsubmit="return validateForm()" method="post">
            <h2>Login</h2>
            <table>
                <tr>
                    <td><label>Username: </label></td>
                    <td><input type="text" name="username" id="username" onblur="validateUsername()"></td>
                    <td><span id="usernameError"></span></td>
                </tr>
                <tr>
                    <td><label>Password: </label></td>
                    <td><input type="password" name="password" id="password" onblur="validatePassword()"></td>
                    <td><span id="passwordError"></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" id="login" value="Login"></td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>