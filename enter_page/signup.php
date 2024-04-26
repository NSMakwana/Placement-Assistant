<html lang="en">
<head>
    
</head>
<body>
    <table id="signup">
    <form method = "post">
    USERNAME :
    <br><input type = "text" name = "username"><br>
    
    EMAIL ID:
    <br><input type = "text" name = "emailid"><br>
  
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
    $username = $_POST["username"];
    $emailid = $_POST["emailid"];
    $password = $_POST["password"];

    $query = "INSERT INTO sign_up(username,emailid,password)  VALUES('".$username."','".$emailid."','".$password."')";
    mysqli_query($conn,$query);
    if(strlen($username) <=8)
    {
        echo "<span style='color: red;'>Username there is must 8 letters.</span>";
    }

    require_once("connection.php");
    $nameErr = $emailErr = $passErr = "";
    $username = $emailid = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        if(empty($_POST["username"])){
            $nameErr = "username is required";
        }else{
            $name = ($_POST["username"]);
            if (!preg_match("/^[A-a-z_']*$/",$name)){
                $nameErr = "only characters and underscore allowed";
            }
        }
        if(empty($_POST["emailid"])){
            $emailErr = "email is required";
        }else{
            $emailid = ($_POST["emailid"]);
            $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-z]{2-4}$/";
            if(!preg_match($pattern, $emailid))
            {
                $emailErr = "invalid email format";
            }
        }
        if(strlen($password))<=8{
            echo "password must be 8 characters";
        }
    }
    $query = mysqli_query($conn, "SELECT username,password * FROM sign_up WHERE username='$username',emailid='$emailid' AND password='$password'");

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