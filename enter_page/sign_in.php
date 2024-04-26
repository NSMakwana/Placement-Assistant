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

        $query = "INSERT INTO sign_in(username,password)  VALUES('".$username."','".$password."')
        WHERE username='$username' ";
        mysqli_query($conn,$query);
        $sql = "SELECT password FROM users WHERE password='$password'";
        $result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];
    if (password_verify($password, $hashed_password)) {
        
        echo "Login successful!";
       
    } else {
       
        echo "Invalid username or password.";
    }
} else {
        echo "User not found.";
    }
}

$conn->close();
?>
</body>
</html>