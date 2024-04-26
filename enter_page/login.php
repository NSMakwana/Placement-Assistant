
<?php 
        require_once("connection.php");

if(isset($_POST["submit"])) 
{ 
    $email_id=$_POST["email_id"];
    $password=$_POST["password"];

    $query="select * from sign_up";
    $flag=0;
    $record=mysqli_query($conn,$query);

    while($result=mysqli_fetch_assoc($record))
    {
        if($result["email_id"]==$email_id && $result["password"]==$password)
        {
            $flag=1;
        }
    }
    if($flag==0)
    {
        echo"invalid data";
        header("Location:login.php");
    }
    else
    {
        header("Loaction:home_page(blank).php");
    }
}

//     if(isset($email_id)) 
//     { 
//         if($email_id=$_POST["email_id"])
//             { 
//                 $f=TRUE; 
//                 if($f) 
//             { 
//             echo"successfully loggedin"; 
//             } 
//             else 
//             { 
//             echo "user not found"; 
//             } 
//             } 
//     }
// } 
 
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