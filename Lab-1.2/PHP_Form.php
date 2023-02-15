<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>
<body>
    <center>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <h1>Personal Info</h1><br>
            <label for="fname">Name:</label>
            <input type="text" name="fname">
            <br>
            <br>
            <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other" required>
                <label for="other">Other</label>
                <br>
                <label>Learning: </label>
                <input type="checkbox" id="html" name="html" value="html">
            <label for="html"> HTML</label><br>
            <input type="checkbox" id="php" name="php" value="php">
            <label for="php"> PHP</label><br>
            <input type="checkbox" id="css" name="css" value="css">
            <label for="CSS"> CSS</label>
            <br>
            <br>
            <label for="current-status">Current Status:</label>
                <select id="current-status" name="current-status" required>
                    <option value="" disabled selected>Select your option</option>
                    <option value="beginner ">Beginner </option>
                    <option value="advance">Advance</option>
                    <option value="expart">Expart</option>
                </select>
                <br>
                <br>
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" required></textarea>
            <br>
            <br>
            <input type="submit">
        </fieldset> 
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
        $gender = $_REQUEST['gender'];
        if (empty($gender)) {
            echo "Name is empty";
        } else {
            echo $gender;
        }
        # $html = $_REQUEST['html'] ;
        if (isset($_POST['html'])) 
            echo "html";
        

        #$php = $_REQUEST['php'] ;
        if (isset($_POST['php'])) 
            echo "php";
        
        #$css = $_REQUEST['css'] ;
        if (isset($_POST['css']) ) 
        echo "css";
        
        
        $current_status = $_REQUEST['current-status'];
        if (empty($current_status)) {
            echo "";
        } else {
            echo $current_status;
        }
        $comment = $_REQUEST['comment'];
        if (empty($comment)) {
            echo "Comment is Empty.";
        } else {
            echo $comment;
        }
        }
        ?>
    </center>
</body>
</html>