<?php
session_start();
$email = $error_email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $error_email = "Email is required";
    } else {
        $email = ($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "Invalid email format";
        }
    }
}
if (file_exists('data.json')) {
    $current_data = file_get_contents('data.json');
    $array_data = json_decode($current_data, true);
    $new_data = array(

        'e-mail'          =>     $_POST["email"],
    );
    $array_data[] = $new_data;
    $final_data = json_encode($array_data);
    if (file_put_contents('data.json', $final_data)) {
        header("Location: login.php");
    }
} else {
    $error = 'JSON File not exits';
}
?>
<form action="" method="POST">
    <fieldset>
        <legend>Enter Email</legend>
        <table>
            <tr>
                <td><label>Email: </label></td>
                <td><input type="text" id="email" name="email" placeholder="email" required></td>
                <td><span><?php echo $error_email; ?></span></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </fieldset>
</form>