<html lang="en">
<head>
    
</head>
<body>
    <table id="signup">
    <form method = "post">
    USERNAME :
    <br><input type = "text" name = "username"><br>
    
   
    PASSWORD:
    <br><input type = "text" name = "password"><br>
  
    

    <tr>
        <td><input type="submit" name="login" id="login" value="Sign in"></td>
        <td>Not registered yet? <a href="signup.php">signup</a></td>
    </tr>
    </form>

<?php

    require_once("connection.php");

    if(isset($_POST["submit"]))
    {
        $user_name = $_POST["user_name"];
        $email_id = $_POST["email_id"];
        $password = $_POST["password"];

        $query = "INSERT INTO sign_in(username,password)  VALUES('".$username."','".$password."')";
        mysqli_query($conn,$query);

    }

?>


</body>
</html>