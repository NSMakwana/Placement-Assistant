<!-- 
Q-1) Write a PHP script to make a registration page and login page where details of user
is stored in text file. After proper authentication Login is successful or not message
must be displayed
 -->

<html>
    <head>
        <link rel="stylesheet" href="registration-css.css">
    <body>

    <?php
            $name_error=$email_error=$ph_error="";
            $name=$email=$phno=$course="";
            $flag=0;


            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                if(empty($_POST["r_name"]))
                {
                    $name_error="Name is required";
                    $flag=1;
                }            
                else
                {
                    $name=$_POST["r_name"];
                    if(!preg_match("/^[a-zA-z-' ]*$/",$_POST["r_name"]))
                    {
                        $name_error="Only letters and white space allowed";
                        $flag=1;
                    }
                    
                }
            }


            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                if(empty($_POST["r_phno"]))
                {
                    $ph_error="Phone no is required";
                    $flag=1;
                }
                else
                {
                    
                    $email=$_POST["r_phno"];
                    if(!preg_match("/^[0-9]*$/",$_POST["r_phno"]))
                    {
                        $ph_error="Only numbers are allowed";
                        $flag=1;
                    }
                   
                }
            }


            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                if(empty($_POST["r_email"]))
                {
                    $email_error="Email is required";
                }
                else
                {
                    $phno=$_POST["r_email"];
               
                    if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/",$_POST["r_email"]))
                    {
                        $email_error="invalid email format";
                        $flag=1;

                    }
                  
                }
            }
            
    
    ?>
        <div class="form">
        <form name="Form1" method="post" action="<?php if($_SERVER["REQUEST_METHOD"]=="POST" && $name_error=="" && $email_error=="" && $ph_error==""){ echo "success.php";}?>">
            <div id="heading">Registration form</div>
            <table>
            <td><label for="name">Name: </label></td>
            <td><input type="text" id="name" name="r_name" value="<?php echo $name;?>"><span class="error">*<?php echo $name_error;?></span></td>
            </tr>
            <tr>
            <td><label for="email">Email: </label></td>
            <td><input type="text" id="email" name="r_email" value="<?php echo $email;?>"><span class="error">*<?php echo $email_error;?></span></td>
            </tr>
            <tr>
            <td><label for="Phno">Phone no.: </label></td>
            <td><input type="text" id="phno" name="r_phno" value="<?php echo $phno;?>"><span class="error">*<?php echo $ph_error;?></span></td>
            <tr>
            <td><label>Select Course:</label></td>
            <td><input type="radio" id="msc" name="course" value="M.Sc.(C.S.)"><label for="msc">M.Sc.(C.S.)</label></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="radio" id="mca" name="course" value="MCA"><label for="mca">MCA</label></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="radio" id="pgdca" name="course" value="PGDCA"><label for="pgdca">PGDCA</label></td>
            </tr>
            <tr>
            <td><input type="submit" id="submit" name="r_submit" value="submit"></td>
            <td></td>
            </tr>
    
        </form>
    </div>
            <?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                if(isset($_POST["r_submit"]))
                {
                    if($name_error=="" && $email_error=="" && $ph_error=="")
                {
                    $file=fopen("../Files/Registration.txt","a");
                    fwrite($file,$_POST["r_name"].",".$_POST["r_email"].",".$_POST["r_phno"].",".$_POST["course"]."\n");
                }
            }
        }
            ?>
    
    </body>
</html>
