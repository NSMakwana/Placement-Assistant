<?php
require_once("conn.php");
require_once("Homepage.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="signup.css">
    </head>
    <body>
    
        <div id="signup">
        <center><h2>Sign up</h2></center>
        <form method="POST">
        <table id="s">
           
                <tr>
                        <td id="huname"><label for="uname">Username</label></td>
                        <td id="uname"><input type="text" name="uname" id="un" required></td>
                </tr>
                <tr>
                        <td id="s1"></td><td id="s1"></td>
                </tr>
                <tr>
                        <td id="emailh"><label for="email">Email</label></td>
                        <td id="em"><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                        <td id="s1"></td><td id="s1"></td>
                </tr>
                <tr>
                        <td id="pwdh"><label for="">Password</label></td>
                        <td id="pw"><input type="password" name="pwd" id="pwd"required></td>
                </tr>
                <tr>
                        <td id="s1"></td><td id="s1"></td>
                </tr>
                <tr>
                        <td id="s1"></td><td id="s1"></td>
                </tr>
                <tr>
                        <td id="sub"><input type="submit" name="submit" id="submit" value="Sign up"></td>
                        <td id="signin"><a href="login.php">Already registered?Sign in</a></td>
                        
                </tr>
            </form>
        </table>
        </div>
    </body>
    <?php
    if(isset($_POST["submit"]))
    {
        $uname=$_POST["uname"];
        $email=$_POST["email"];
        $pwd=$_POST["pwd"];

        $query="INSERT into sign_up(user_name,email_id,password) values('".$uname."','".$email."','".password_hash($pwd,PASSWORD_DEFAULT)."')";
        
        mysqli_query($conn,$query);

    }
    ?>
</html>
 