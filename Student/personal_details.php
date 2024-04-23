<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #box{
            width: 3%;
            /*padding: 12px 20px;*/
            margin: 4px 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<?php

$enumerr = $nameerr = $emailerr = $numerr = $nationerr = $gendererr = $addresserr = $doberr = "";
$enum = $name = $num = $email = $nation = $gender = $address = $dob = "";
$enum1 = $name1 = $num1 = $email1 = $nation1 = $gender1 = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameerr = "Name is required";
    echo $nameerr;
  } else {
    $name = ($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameerr = "Only letters and white space allowed";
      echo $nameerr
    }
    else
    {
      $name1=$name;
    }
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nation"])) {
      $nationerr = "Nation is required";
      echo $nationerr;
    } else {
      $nation = ($_POST["nation"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$nation)) {
        $nationerr = "Only letters and white space allowed";
        echo $nationerr;
      }
      else{
        $nation1=$nation;
      }
    }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["gender"])) {
        $gendererr = "Gender is required";
        echo $gendererr;
      } else {
        $gender = ($_POST["gender"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$gender)) {
          $gendererr = "Only letters and white space allowed";
          echo $gendererr;
        }
        else{
          $gender1=$gender;
        }
      }
      }

  if (empty($_POST["mail"])) {
    $emailerr = "Email is required";
  } else {
    $email = ($_POST["mail"]);
    $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
    if (!preg_match($pattern, $email)) {
        $emailerr = "Invalid email format";
        echo $emailerr;
    }
    else{
        $email1=$email;
    }
  }
    
 

  if (empty($_POST["num"])) {
    $numerr = "Phone number is required";
    echo $numerr;
  } else {
    $num = ($_POST["num"]);
    if (!preg_match("/^[0-9]{10}*$/i",$num)) {
      $numerr = "Invalid number";
      echo $numerr;
    }
    else{
      $num1=$num;
    }
  }

  if (empty($_POST["enum"])) {
    $enumerr = "Enrollment number is required";
    echo $enumerr;
  } else {
    $enum = ($_POST["enum"]);
    if (!preg_match("/^[0-9]{16}*$/i",$enum)) {
      $enumerr = "Invalid number";
      echo $enumerr;
    }
    else{
      $enum1=$enum;
    }
  }

  if (empty($_POST["address"])) {
    $addresserr = "Address is required";
    echo $addresserr;
  } else {
    $address = ($_POST["address"]);
    }

  if (empty($_POST["dob"])) {
    $doberr = "Dob is required";
    echo $doberr;
  } else {
    $dob = ($_POST["dob"]);
  }
}

require_once("connection.php");
if(isset($_POST["submit"]))
{
  $query="insert into stud_edu(enum,name,email,ph_num,address,dob,gender,nationality)
  values('".$enum1."','".$name1."','".$email1."','".$num1."','".$address."','".$dob."','".$gender1."','".$nation1."')";
  mysqli_query($conn,$query) or die("something wrong");
}

?>


    <form name="form1" method="post" >
        Enrollment number:<input type="text" name="enum" required><br><br>
        Full Name:<input type="text" name="name" required><br><br> <!--done-->
        Email:<input type="email" name="mail" required><br><br> <!--done-->
        Phone_no:<input type="text" value="+91" readonly id="box"></input>
	      <input type="text" name="num" required><br><br> <!--done-->
        Address:<input type="textarea" name="address" required><br><br>
        Date of Birth:<input type="date" name="dob" required><br><br> <!--done-->
        Gender:<input type="text" name="gender" ><br><br> <!--done-->
        Nationality:<input type="text" name="nation" ><br><br>
        <a href="edu_details.php" ><button>Next</button>
        <!-- <input type="submit" name="submit"> -->
    </form>
</body>
</html>
