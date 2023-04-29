<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        background-color: #f1f1f1;
    }

    form {
        width: 300px;
        margin: 0 auto;
        margin-top: 200px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px #000;
    }

    fieldset {
        border: none;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
    }

    td {
        padding: 5px;
    }

    input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    button {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 30%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
    <title>Login</title>
</head>

<body>
    <form action="">
        <fieldset>
            <h2>Login</h2>
            <table>
                <tr>
                    <td><input type="text" name="username" id="username" placeholder="Username"
                            onkeyup="getValue(this)"> <br>
                        <span id="op"></span>
                    </td>
                </tr>
                <tr>
                    <td><input type="password" name="password" id="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br><br><br>
    <button onclick="viewGoogle()">Login with Google</button>
    <form style="display: none;" id="g_form">
        <fieldset>
            <h2>Login</h2>
            <table>
                <tr>
                    <td><input type="text" name="gmail" id="gmail" placeholder="Gmail"></td>
                </tr>
                <tr>
                    <td><input type="password" name="gmail_password" id="gmail_password" placeholder="Gmail Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="myJs.js"></script>
</body>

</html>