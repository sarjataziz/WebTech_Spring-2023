<?php
$message = '';
$error = '';
if (isset($_POST["submit"])) {
     if (empty($_POST["name"])) {
          $error = "<label>Enter Name</label>";
     } else if (empty($_POST["email"])) {
          $error = "<label>Enter an e-mail</label>";
     } else if (empty($_POST["un"])) {
          $error = "<label>Enter a username</label>";
     } else if (empty($_POST["pass"])) {
          $error = "<label >Enter a password</label>";
     } else if (empty($_POST["Cpass"])) {
          $error = "<label>Confirm password field cannot be empty</label>";
     } else if (empty($_POST["gender"])) {
          $error = "<label>Gender cannot be empty</label>";
     } else {
          if (file_exists('data.json')) {
               $current_data = file_get_contents('data.json');
               $array_data = json_decode($current_data, true);
               $new_data = array(
                    'name'               =>     $_POST['name'],
                    'e-mail'          =>     $_POST["email"],
                    'username'     =>     $_POST["un"],
                    'gender'     =>     $_POST["gender"],
                    'dob'     =>     $_POST["dob"]
               );
               $array_data[] = $new_data;
               $final_data = json_encode($array_data);
               if (file_put_contents('data.json', $final_data)) {
                    $message = "<label>File Appended Success fully</p>";
               }
          } else {
               $error = 'JSON File not exits';
          }
     }
}
?>
<!DOCTYPE html>
<html>

<head>
     <link rel="icon" href="image/login.png" type="image/x-icon">
     <link rel="stylesheet" href="style.css" type="text/css">
     <title>Registration</title>

</head>

<body>
     <h3>Add Data to JSON File</h3><br />
     <form method="post">

          <?php
          if (isset($error)) {
               echo $error;
          }
          ?>
          <br />
          <fieldset>
               <legend>Personal Information </legend>
               <table>
                    <tr>
                         <td><label>Name</label></td>
                         <td><input type="text" name="name" /><br /></td>
                    </tr>
                    <tr>
                         <td><label>E-mail</label></td>
                         <td><input type="text" name="email" /><br /></td>
                    </tr>
                    <tr>
                         <td><label>Username</label></td>
                         <td><input type="text" name="un" /><br /></td>
                    </tr>
                    <tr>
                         <td><label>Password</label></td>
                         <td><input type="password" name="pass" /><br /></td>
                    </tr>
                    <tr>
                         <td><label>Confirm Password</label></td>
                         <td><input type="password" name="Cpass" /><br /></td>
                    </tr>
                    <tr>
                         <td>
                              <legend>Gender </legend>
                         </td>
                         <td>
                              <input type="radio" id="male" name="gender" value="male">
                              <label for="male">Male</label>
                              <input type="radio" id="female" name="gender" value="female">
                              <label for="female">Female</label>
                              <input type="radio" id="other" name="gender" value="other">
                              <label for="other">Other</label><br>
                         </td>
                    </tr>
                    <tr>
                         <td>
                              <label>Date of Birth:</label>
                         </td>
                         <td><input type="date" name="dob"> <br><br></td>
                    </tr>
                    <tr>
                         <td align="center" colspan="2"><input type="submit" name="submit" value="Save" /><br></td>
                    </tr>
               </table>
          </fieldset>
          <?php
          if (isset($message)) {
               echo $message;
          }
          ?>
     </form>
     <br>

     <a href="load.php">Show Data</a>
</body>

</html>