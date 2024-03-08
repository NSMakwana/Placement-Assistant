<html>
<head>
<title>Login_page</title>

</head>
<body>

<?php

$file = fopen("data.txt","r");
        
if(isset($_POST["login"]))
{       
    if(isset($_POST["loginname"]) && isset($_POST["loginpassword"]))
    {   
        $f=FALSE;
        $file = fopen("data.txt","r");
        
        while(!feof($file))
        {
            $string=fgets($file);
            $array = explode(",", $string);

            if(isset($array[1]))
            {
                if($array[0]==$_POST["loginname"] && $array[1]==$_POST["loginpassword"])
                    {
                        $f=TRUE;
                    }
            }

        }

    if($f)
    {
    echo"successfully loggedin";
    }

    else
    {
    echo"user not found";
    }

    }
}
?>

<!-- <div class="container"> -->
<!-- <div class="loginpage"> -->

<div class="form">
<form class="loginform" name="loginform" method="post">

User-name : <input type="text" name="loginname"><br>
Password : <input type="password" name="loginpassword"><br>

Submit : <input type="submit" name="login" Value="Login">

<p class="message">Not registered yet? <a href="registration.php">create an account </a></p>
</form>
</div>

<!-- </div>
</div> -->
</body>
</html>