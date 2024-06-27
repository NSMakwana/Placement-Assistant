<?php
session_start();
require_once("conn.php");
require_once("Homepage.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="signin.css">
    </head>
    <body>
    
        <div id="signin">
            <center><h2>Signin</h2></center>
        <form  method="POST">
        <table id="s">
           
                <tr>
                        <td id="huname"><label for="uname">Username</label></td>
                        <td id="uname"><input type="text" name="un" id="un" required></td>
                </tr>
                <tr>
                        <td id="s1"></td><td id="s1"></td>
                </tr>
                <tr>
                        <td id="pwdh"><label for="">Password</label></td>
                        <td id="pwd"><input type="password" name="pw" id="pw"required></td>
                </tr>
                <tr>
                        <td id="s1"></td><td id="s1"></td>
                </tr>
                <tr>
                        <td id="s1"></td><td id="s1"></td>
                </tr>
                <tr>
                        <td id="sub"><input type="submit" name="submit" id="submit" value="Signin"></td>
                        <td id="signup"><a href="sign-up.php">Not registerd yet?Sign up</a></td>
                        
                </tr>
            
        </table>
        </form>
        </div>
    </body>
    <?php
    if(isset($_POST["submit"]))
    {
        

        $uname=$_POST["un"];
        $pwd=$_POST["pw"];

        if($uname=="admin" && $pwd=="admin_placement")
         {
            header("location:Placement Coordinator/PC_home.php");
         }
         else{
        $query="SELECT * from sign_up where user_name='".$uname."'";
        $res=mysqli_query($conn,$query);
        $rec=mysqli_fetch_assoc($res);

        
        if(mysqli_num_rows($res)>0 && $rec["user_name"]==$uname)
        {
            if(password_verify($pwd,$rec["password"]))
            {
                $_SESSION["un"]=$uname;
                
              
                    header("location:Home.php");
            }
            
            else{
                header("location:signup.php");                
            }
         }
         else
         {
            header("location:signup.php");  
         }
    }}
        
        

    
    
    ?>
</html>
 