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
                    <td><input type="text" name="username" id="username" placeholder="Username"></td>
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
    <span onmouseover="viewInfo()" onmouseout="hideInfo()">Here is some Info</span>
    <p id="info">HGJHGAJSHGDHASFHVASHV ASGF HAGHSFGHAGS</p>
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
    <script>
    function get(id) {
        return document.getElementById(id);
    }

    function viewGoogle() {
        var g_form = get("g_form");
        var button = get("button");
        if (g_form.style.display == "none") {
            g_form.style.display = "block";
            button.style.display = "none";
        } else {
            g_form.style.display = "none";
            button.style.display = "block";
        }
    }

    function viewInfo() {
        var info = get("info");
        info.style.display = "block";
    }

    function hideInfo() {
        var info = get("info");
        info.style.display = "none";
    }
    </script>
</body>

</html>