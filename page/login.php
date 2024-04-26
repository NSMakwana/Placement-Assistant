<?php 
include('login_connection.php');
    $userError = "";
    $passwordError = "";
    $username = "";
    $password = "";
if(isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO 'sign-up'(username,password)
    values('$username','$password')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('new record inserted')</script>";
    }else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);

    if(empty($username)){
        $userError = "username is required";
    } 
    if(!preg_match("/^[A-Za-z_]$/",$username)) {
        $userError = "username should contain only character and underscore";
    }
}
    if(empty($password)){
       $passwordError = "password is required"; 
    } 
    else{
       $passwordError = "password is not required";
    }
    if(!preg_match("/^@_$/",$password)){
        $passwordError = "password should contain characters";
    }

?>
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="login_css.css">
</head>
<body>

  <div class="header">
    <h2>Login</h2>
  </div>
  
   <table id="signin">  
  <form method="post" action="login.php">
  <tr>
        <td><label>id</label></td>
        <td><input type="text" name="id" placeholder="Enter username"><span id="error"><?php echo $userError;?></span></td>
       
    </tr>
    <tr>
        <td><label>username</label></td>
        <td><input type="text" name="username" placeholder="Enter username"><span id="error"><?php echo $userError;?></span></td>
       
    </tr>
    <tr>
        <td><label>email</label></td>
        <td><input type="text" name="email" placeholder="Enter username"><span id="error"><?php echo $userError;?></span></td>
       
    </tr>
    <tr>
        <td><label>Password</label></td>
        <td><input type="password" name="password" placeholder="Enter password"><span id="error"></span></td>
       
    </tr>
    <tr>
        <td><label>timestamp</label></td>
        <td><input type="text" name="timestamp" placeholder="Enter username"><span id="error"><?php echo $userError;?></span></td>
       
    </tr>
    <tr>
        <td><input type="submit" name="login" id="login" value="Sign in"></td>
        <td>Not registered yet? <a href="register.php">Register</a></td>
    </tr>
       
        
</table>
  </form>
  
</body>
</html>