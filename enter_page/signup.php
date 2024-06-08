<html lang="en">
<head>
    <style>

div {
  background-color: bisque;
  width: 300px;
  border: 15px solid darkcyan;
  padding: 60px;
  margin: auto;
  margin-top: 150px;
}
    </style>
    
</head>
<body>
<div>
    <h3>SIGNUP HERE :</h3>
    <form method = "post">
    NAME :
    <br><input type = "text" name = "user_name"><br>

    EMAIL ID:
    <br><input type = "text" name = "email_id"><br>

    PASSWORD:
    <br><input type = "text" name = "password"><br>

    <input type = "submit" name = "submit" value = "submit"><br><br>

    <p class="message"> Not registered ?<a href="login.php">login</a></p> 
    </form>
</div>
<?php

    require_once("conn.php");

    if(isset($_POST["submit"]))
    {
        $user_name = $_POST["user_name"];
        $email_id = $_POST["email_id"];
        $password = $_POST["password"];

        $query = "INSERT INTO sign_up(user_name,email_id,password) VALUES('".$user_name."','".$email_id."','".$password."')";
        mysqli_query($conn,$query);

    }

?>


</body>
</html>