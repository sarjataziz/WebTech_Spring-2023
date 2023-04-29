    <?php

    $name = "";
    $error_name = "";
    $username = "";
    $error_username = "";
    $password = "";
    $error_password = "";
    $gender = "";
    $error_gender = "";
    $profession = "";
    $error_profession = "";
    $hobbies = [];
    $error_hobbies = "";
    $bio = "";
    $error_bio = "";

    $hasError = false;

    $professions = array("Teaching", "Service", "Business", "Entrepreneur", "Student");

    function hobbyExist($hobby)
    {
        global $hobbies;
        foreach ($hobbies as $h) {
            if ($h == $hobby)
                return true;
        }
        return false;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $error_name = "Name Required";
            $hasError = true;
        } else if (strlen($_POST["name"]) <= 2) {
            $error_name = "Name Must be greater than 2";
            $hasError = true;
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["username"])) {
            $error_username = "Username Required";
            $hasError = true;
        } else if (strlen($_POST["username"]) <= 1) {
            $error_username = "Username Must be greater than 1";
            $hasError = true;
        } else {
            $username = $_POST["username"];
        }

        if (empty($_POST["password"])) {
            $error_password = "Password Required";
            $hasError = true;
        } else {
            $password = $_POST["password"];
        }

        if (!isset($_POST["gender"])) {
            $error_gender = "Gender Required.";
            $hasError = true;
        } else {
            $gender = $_POST["gender"];
        }

        if (!isset($_POST["hobbies"])) {
            $error_hobbies = "Hobbies Required.";
            $hasError = true;
        } else {
            $hobbies = $_POST["hobbies"];
        }

        if (!isset($_POST["profession"])) {
            $error_profession = "Profession Required";
            $hasError = true;
        } else {
            $profession = $_POST["profession"];
        }

        if (empty($_POST["Bio"])) {
            $error_bio = "Bio Required";
            $hasError = true;
        } else {
            $bio = $_POST["Bio"];
        }

        if (!$hasError) {
            echo "Name: " . $_POST["name"] . "<br>";
            echo "Username: " . $_POST["username"] . "<br>";
            echo "Password: " . $_POST["password"] . "<br>";
            echo "Gender: " . $_POST["gender"] . "<br>";
            echo "Profession: " . $_POST["profession"] . "<br>";
            $arr = $_POST["hobbies"];
            foreach ($arr as $key) {
                print_r("Hobbies: $key <br>");
            }
            echo "Bio: " . $bio = $_POST["Bio"] . "<br>";
        }
    }
    ?>