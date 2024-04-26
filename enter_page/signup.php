<html lang="en">
<head>
    
</head>
<body>
    <table id="signup">
    <form method = "post">
    USERNAME :
    <br><input type = "text" name = "user_name"><br>
    
    EMAIL ID:
    <br><input type = "text" name = "email_id"><br>
  
    PASSWORD:
    <br><input type = "text" name = "password"><br>
  
    

    <tr>
        <td><input type="submit" name="login" id="login" value="Sign in"></td>
        <td>Not registered yet? <a href="sign_in.php">sign_in</a></td>
    </tr>
    </form>

<?php

if(isset($_POST["submit"]))
{
    $user_name = $_POST["USERNAME"];
    $email_id = $_POST["emailid"];
    $password = $_POST["password"];

    $query = "INSERT INTO sign_up(user_name,email_id,password)  VALUES('".$user_name."','".$email_id."','".$password."')";
    mysqli_query($conn,$query);
    if(strlen($username) <=8)
    {
        echo "<span style='color: red;'>Username there is must 8 letters.</span>";
    }

    require_once("connection.php");
    $nameErr = $emailErr = $passErr = "";
    $USERNAME = $email = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["USERNAME"])){
            $nameErr = "USERNAME is required";
        }else{
            $name = ($_POST["USERNAME"]);
            if (!preg_match("/^[A-a-z_']*$/",$name)){
                $nameErr = "only characters and underscore allowed";
            }
        }
        if(empty($_POST["EMAIl"])){
            $emailErr = "EMAIL is required";
        }else{
            $EMAIL = ($_POST["EMAIL"]);
            $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-z]{2-4}$/";
            if(!preg_match($pattern, $EMAIL))
            {
                $emailErr = "invalid email format";
            }
        }
    }
    $query = mysqli_query($conn, "SELECT username,password * FROM login WHERE username='$user_name' AND password='$pass_word'");

    $result = mysqli_query($conn, $query);


    while ($row = mysql_fetch_assoc($result)) {


        $check_username = $row['$username'];
        $check_password = $row['$password'];
    }
    if ($USERNAME == $check_username && $PASSWORD == $check_password) {
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = "No";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

?>


</body>
</html>