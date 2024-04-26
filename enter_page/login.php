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
        header("Location:login.php");
        echo"invalid data";
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
        <h3>LOGIN HERE: </h3>
<form method="post"> 
EMAIL ID :<br> <input type="text" name="email_id"><br> 
PASSWORD : <br><input type="password" name="password"><br>
<input type="submit" name="submit" Value="submit"> 
<p class="message"> Not registered ?<a href="signup.php">Sign up</a></p> 
</form> 
</div>
</body> 
</html>