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
            <label for="fname">Name: </label>
            <input type="text" name="fname">
            <br>
            <label for="email">Email: </label>
            <input type="text" name="email">
            <br>
            <br>
            <label for="dateOfBirth">Date Of Birth: </label>
            <input type="text" name="dateOfBirth" placeholder="Day/Month/Year" required>
            <br>
            <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female" required>
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="Other" required>
                <label for="other">Other</label>
                <br>
            <label>Degree: </label>
            <input type="checkbox" id="SSC" name="SSC" value="SSC">
            <label for="SSC"> SSC</label><br>
            <input type="checkbox" id="HSC" name="HSC" value="HSC">
            <label for="HSC"> HSC</label><br>
            <input type="checkbox" id="BSc" name="BSc" value="BSc">
            <label for="BSc"> BSc</label>
            <input type="checkbox" id="MSc" name="MSc" value="MSc">
            <label for="MSc"> MSc</label>
            <br>
            <br>
            <label for="blood-group">Blood Group:</label>
                <select id="blood-group" name="blood-group" required>
                    <option value="" disabled selected> Select Your Option </option>
                    <option value="AB">AB </option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
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
        //Name
        $name = $_REQUEST ["fname"];  
        if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
            $ErrMsg = "Only alphabets and whitespace are allowed.";  
                    echo $ErrMsg;  
        } else {  
            echo "Name: " . $name . "<br>";  
        } 
        //Email
        $email = $_POST ["email"];  
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (!preg_match ($pattern, $email) ){  
            $ErrMsg = "Email is not valid.";  
                    echo $ErrMsg;  
        } else {  
            echo "Email: " . $email . "<br>";  
        }  
        //Date of Birth
        $test_date = $_REQUEST ["dateOfBirth"];
        $test_arr  = explode('/', $test_date);
        if (count($test_arr) == 3) {
            if (checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {
                echo "Date of Birth: " . $test_date . "<br>";
            } else {
                echo "Incorrect formate.";
            }
        }
        else {
            echo "Incorrect Date of Birth.";
        }
        $gender = $_REQUEST['gender'];
        if (empty($gender)) {
            echo "Gender is empty";
        } else {
            echo "Gender: " . $gender . "<br>";
        }
        
        //Degree

        # $SSC = $_REQUEST['SSC'] ;
        if (isset($_POST['SSC'])) 
            echo "Degree: SSC <br>";
        

        #$HSC = $_REQUEST['HSC'] ;
        if (isset($_POST['HSC'])) 
            echo "Degree: HSC <br>";
        
        #$BSc = $_REQUEST['BSc'] ;
        if (isset($_POST['BSc']) ) 
        echo "Degree: BSc <br>";

        #$BSc = $_REQUEST['MSc'] ;
        if (isset($_POST['MSc']) ) 
        echo "Degree: MSc <br>";
        
        // Blood Group
        $blood_group = $_REQUEST['blood-group'];
        if (empty($blood_group)) {
            echo "";
        } else {
            echo "Blood Group: " . $blood_group . "<br>";
        }

        //Comment
        $comment = $_REQUEST['comment'];
        if (empty($comment)) {
            echo "Comment is Empty.";
        } else {
            echo "Comment: " . $comment . "<br>";
        }
    }
        ?>
    </center>
</body>
</html>