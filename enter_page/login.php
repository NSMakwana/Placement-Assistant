
<?php
//if(isset($_POST["user_name"]) && isset($_POST["password"]) && isset($_POST["email"])) 
//{ 
// $file = fopen("testw.txt","a"); 
// fwrite($file,"\n".$_POST["name"].",".$_POST["password"].",".$_POST["email"]); 
// fclose($file); 
//}
?>
<?php 
        require_once("connection.php");

if(isset($_POST["submit"])) 
{ 
  //  $email_id=$_REQUEST["email_id"];
    $query="SELECT * FROM  sign_up WHERE email_id=".$email_id;
    $res=mysqli_query($conn,$query);


    if(isset($array[1])) 
    { 
        if($array[1]==$_POST["email_id"])
            { 
                $f=TRUE; 
                if($f) 
            { 
            echo"successfully loggedin"; 
            } 
            else 
            { 
            echo "user not found"; 
            } 
            } 
    }
} 
 
?> 
<html> 
<body> 

<form method="post"> 
Email ID : <input type="text" name="email_id"><br> 
Password : <input type="password" name="password"><br>
<input type="submit" name="submit" Value="submit"> 
<p class="message"> Not registered ?<a href="signup.php">Sign up</a></p> 
</form> 
 
</body> 
</html>