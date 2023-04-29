<?php require_once './validation.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="formImage.png" type="image/x-icon">
    <style>
    body {
        background-color: #f1f1f1;
    }

    form {
        width: 500px;
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
    </style>
    <script>
    var hasError = false;

    function get(id) {
        return document.getElementById(id);
    }

    function validateGender() {
        var gn = document.querySelector('input[name="gender"]:checked');
        if (gn == null) {
            return false;
        }
        return true;
    }

    function validateHobbies() {
        var checked = false;
        var hobbies = document.getElementsByName("hobbies[]");
        for (var i = 0; i < hobbies.length; i++) {
            if (hobbies[i].checked) {
                checked = true;
                break;
            }
        }
        return checked;
    }

    function validate() {
        refresh();
        if (get("name").value == "") {
            hasError = true;
            get("error_name").innerHTML = "*Name Required";
        } else if (get("name").value.length <= 2) {
            hasError = true;
            get("error_name").innerHTML = "*Name Must be greater than 2";
        }
        if (get("username").value == "") {
            hasError = true;
            get("error_username").innerHTML = "*Username Required";
        } else if (get("username").value.length <= 1) {
            hasError = true;
            get("error_username").innerHTML = "*Username Must be greater than 1";
        }

        if (!validateGender()) {
            hasError = true;
            get("error_gender").innerHTML = "*Gender Required";
        }
        if (!validateHobbies()) {
            hasError = true;
            get("error_hobbies").innerHTML = "*Hobbies Required";
        }

        if (get("profession").selectedIndex == 0) {
            hasError = true;
            get("error_profession").innerHTML = "*Profession Required";
        }
        if (get("Bio").value == "") {
            hasError = true;
            get("error_bio").innerHTML = "*Bio Required";
        }

        return !hasError;
    }

    function refresh() {
        hasError = false;
        get("error_name").innerHTML = "";
        get("error_username").innerHTML = "";
        get("error_password").innerHTML = "";
        get("error_gender").innerHTML = "";
        get("error_hobbies").innerHTML = "";
        get("error_profession").innerHTML = "";
        get("error_bio").innerHTML = "";
    }
    </script>
    <title>Form</title>
</head>

<body>
    <div class="center">
        <form action="" onsubmit="return validate()" method="post">
            <fieldset>
                <h2>Personal Info: </h2>
                <table>
                    <tr>
                        <td><label for="Name">Name: </label></td>
                        <td><input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Name">
                        </td>
                        <!-- name attribute used in Identifier -->
                        <td><span id="error_name"><?php echo $error_name; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="Username">Username: </label></td>

                        <td><input type="text" id="username" name="username" value="<?php echo $username; ?>"
                                placeholder="Username">
                        </td>

                        <td><span id="error_username"><?php echo $error_username; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="Password">Password: </label></td>
                        <td><input type="password" id="password" name="password" value="<?php echo $password; ?>"
                                placeholder="Password"></td>
                        <td><span id="error_password"><?php echo $error_password; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="Gender">Gender: </label></td>
                        <td><input type="radio" id="male" name="gender" value="Male"
                                <?php if ($gender == "Male") echo "checked"; ?>>Male <input type="radio" id="female"
                                name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female
                        </td>
                        <!-- Value use for identifier -->
                        <td><span id="error_gender"><?php echo $error_gender; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="Profession">Profession: </label></td>
                        <td>
                            <select name="profession" id="profession">
                                <option selected disabled>--Select Option--</option>
                                <?php
                                foreach ($professions as $p) {
                                    if ($p == $profession)
                                        echo "<option selected>$p</option>";
                                    else
                                        echo "<option>$p</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td><span id="error_profession"><?php echo $error_profession; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="Hobbies">Hobbies: </label></td>
                        <td>
                            <label for="Hobbies"><input type="Checkbox" id="movies" value="Movies"
                                    <?php if (hobbyExist("Movies")) echo "checked"; ?> name="hobbies[]"> Movies</label>
                            <label for="Hobbies"><input type="Checkbox" id="music" value="Music"
                                    <?php if (hobbyExist("Music")) echo "checked"; ?> name="hobbies[]"> Music</label>
                            <label for="Hobbies"><input type="Checkbox" id="sports" value="Sports"
                                    <?php if (hobbyExist("Sports")) echo "checked"; ?> name="hobbies[]"> Sports</label>
                            <br>
                            <label for="Hobbies"><input type="Checkbox" id="games" value="Games"
                                    <?php if (hobbyExist("Games")) echo "checked"; ?> name="hobbies[]"> Games</label>
                            <label for="Hobbies"><input type="Checkbox" id="anime" value="Anime"
                                    <?php if (hobbyExist("Anime")) echo "checked"; ?> name="hobbies[]"> Anime</label>
                        </td>
                        <td><span id="error_hobbies"><?php echo $error_hobbies; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="Bio">Bio: </label></td>
                        <td><textarea name="Bio" id="Bio" cols="30" rows="10"></textarea></td>
                        <td><span id="error_bio"><?php echo $error_bio; ?></span></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2"><input type="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>

</body>

</html>