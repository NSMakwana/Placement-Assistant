<?php 
    $userError = "";
    $passwordError = "";
    $username = "";
    $password = "";
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        $userError = "username is required";
    } 
    else{
        $userError = "username is not required";
    }
    if(!preg_match("/^[A-Za-z]_$/",$username)) {
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
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
  <div class="header">
    <h2>Login</h2>
  </div>
  
   <table>  
  <form method="post" action="login.php">
    <tr>
        <td><label>Username</label></td>
        <td><input type="text" name="username" placeholder="Enter username"></td>
        <span style="color:red;"></span>
    </tr>
    <tr>
        <td><label>Password</label></td>
        <td><input type="password" name="password" placeholder="Enter password"></td>
        <span style="color:red;"></span>
    </tr>
    <tr>
        <td><button type="submit" class="button" name="login">Login</button></td>
</tr>
<tr>
    <p>
        <td>Not yet a member? <a href="register.php">Register</a></td>
    </p>
</tr>
</table>
  </form>
  </center>
</body>
</html>