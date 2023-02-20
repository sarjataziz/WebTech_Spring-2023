
<!DOCTYPE HTML>  
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css" type="text/css">
        <title>Login</title>      
    </head>
    <body align="center">  
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
                <h1>Personal Info</h1><br>
                <label for="username">Username: </label>
                <input type="text" name="username" required>
                <br>
                <label for="password">Password: </label>
                <input type="text" name="password"  required>
                <br>
                <input type="checkbox" id="remember_me" name="remember_me" value="remember_me">
                <label for="remember_me"> Remember Me</label><br>
                <br>
                <input type="submit" name="submit" value="submit">
                <a href="forgetPassword.php">Forget Password></a>
            </fieldset> 
            </form>
            <?php
            if(isset($_POST["submit"]))
            {
                $user_name = $_POST["username"];
                $user_password = $_POST["password"];
                if(($user_name =="Username" && $$user_password == "123"))
                {
                    echo "";
                }
                else{
                    echo "Incorrect Username and Password.";
                }
            }
            ?>           
    </body>
</html>
