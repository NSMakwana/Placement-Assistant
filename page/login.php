<html lang="en">
<head>
    
</head>
<body>
    <table id="signup">
    <form method = "post">
    NAME :
    <br><input type = "text" name = "user_name"><br>
    
    EMAIL ID:
    <br><input type = "text" name = "email_id"><br>
  
    PASSWORD:
    <br><input type = "text" name = "password"><br>
  
    

    <tr>
        <td><input type="submit" name="login" id="login" value="Sign in"></td>
        <td>Not registered yet? <a href="sign-in.php">sign-in</a></td>
    </tr>
    </form>

<?php

    require_once("connection.php");

    if(isset($_POST["submit"]))
    {
        $user_name = $_POST["user_name"];
        $email_id = $_POST["email_id"];
        $password = $_POST["password"];

        $query = "INSERT INTO sign_up(user_name,email_id,password)  VALUES('".$user_name."','".$email_id."','".$password."')";
        mysqli_query($conn,$query);

    }

?>


</body>
</html>