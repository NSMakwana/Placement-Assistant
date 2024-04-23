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

$marks_sscerr = $tm_sscerr = $perct_sscerr = $year_sscerr = $board_sscerr = $marks_hscerr = $tm_hscerr = $perct_hscerr =$stream_hsc= $year_hscerr = $board_hscerr="";
$marks_ssc = $tm_ssc = $perct_ssc = $year_ssc = $board_ssc = $marks_hsc = $tm_hsc = $perct_hsc = $streamhsc = $year_hsc = $board_hsc ="";
$marks1_ssc = $tm1_ssc = $perct1_ssc = $year1_ssc = $board1_ssc = $marks1_hsc = $tm1_hsc = $perct1_hsc = $stream1_hsc= $year1_hsc = $board1_hsc ="";

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
      echo $nameerr;
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

  if (empty($_POST["board_ssc"])) {
    $board_sscerr = "Board is required";
    echo $board_sscerr;
  } else {
    $board_ssc = ($_POST["board_ssc"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$board_ssc)) {
      $board_sscerr = "Only letters and white space allowed";
      echo $board_sscerr;
    }
    else
    {
      $board1_ssc=$board_ssc;
    }
  }

  if (empty($_POST["stream_hsc"])) {
    $stream_hscerr = "Stream is required";
    echo $stream_hscerr;
  } else {
    $stream_hsc = ($_POST["stream_hsc"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$stream_hsc)) {
      $stream_hscerr = "Only letters and white space allowed";
      echo $stream_hscerr;
    }
    else
    {
      $stream1_hsc=$stream_hsc;
    }
  }

  if (empty($_POST["marks_ssc"])) {
    $marks_sscerr = "Marks are required";
    echo $marks_sscerr;
  } else {
    $marks_ssc = ($_POST["marks_ssc"]);
    if (!preg_match("/^[0-9]*$/i",$marks_ssc)) {
      $marks_sscerr = "Invalid marks";
      echo $marks_sscerr;
    }
    else{
      $marks1_ssc=$marks_ssc;
    }
  }

  if (empty($_POST["tm_ssc"])) {
    $tm_sscerr = "Total Marks are required";
    echo $tm_sscerr;
  } else {
    $tm_ssc = ($_POST["tm_ssc"]);
    if (!preg_match("/^[0-9]*$/i",$tm_ssc)) {
      $tm_sscerr = "Invalid marks";
      echo $tm_sscerr;
    }
    else{
      $tm1_ssc=$tm_ssc;
    }
  }

  if (empty($_POST["perct_ssc"])) {
    $perct_sscerr = "Percentage is required";
    echo $perct_sscerr;
  } else {
    $perct_ssc = ($_POST["perct_ssc"]);
    if (!preg_match("/^[0-9]*$/i",$perct_ssc)) {
      $perct_sscerr = "Invalid number";
      echo $perct_sscerr;
    }
    else{
      $perct1_ssc=$perct_ssc;
    }
  }

  if (empty($_POST["year_ssc"])) {
    $year_sscerr = "Year is required";
    echo $year_sscerr;
  } else {
    $year_ssc = ($_POST["year_ssc"]);
    if (!preg_match("/^[0-9]*$/i",$year_ssc)) {
      $year_sscerr = "Invalid Year";
      echo $year_sscerr;
    }
    else{
      $year1_ssc=$year_ssc;
    }
  }


  if (empty($_POST["board_hsc"])) {
    $board_hscerr = "Board is required";
    echo $board_hscerr;
  } else {
    $board_hsc = ($_POST["board_hsc"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$board_hsc)) {
      $board_hscerr = "Only letters and white space allowed";
      echo $board_hscerr;
    }
    else
    {
      $board1_hsc=$board_hsc;
    }
  }


  if (empty($_POST["marks_hsc"])) {
    $marks_hscerr = "Marks are required";
    echo $marks_hscerr;
  } else {
    $marks_hsc = ($_POST["marks_hsc"]);
    if (!preg_match("/^[0-9]*$/i",$marks_hsc)) {
      $marks_hscerr = "Invalid marks";
      echo $marks_hscerr;
    }
    else{
      $marks1_hsc=$marks_hsc;
    }
  }

  if (empty($_POST["tm_hsc"])) {
    $tm_hscerr = "Total Marks are required";
    echo $tm_hscerr;
  } else {
    $tm_hsc = ($_POST["tm_hsc"]);
    if (!preg_match("/^[0-9]*$/i",$tm_hsc)) {
      $tm_hscerr = "Invalid marks";
      echo $tm_hscerr;
    }
    else{
      $tm1_hsc=$tm_hsc;
    }
  }

  if (empty($_POST["perct_hsc"])) {
    $perct_hscerr = "Percentage is required";
    echo $perct_hscerr;
  } else {
    $perct_hsc = ($_POST["perct_hsc"]);
    if (!preg_match("/^[0-9]*$/i",$perct_hsc)) {
      $perct_hscerr = "Invalid number";
      echo $perct_hscerr;
    }
    else{
      $perct1_hsc=$perct_hsc;
    }
  }

  if (empty($_POST["year_hsc"])) {
    $year_hscerr = "Year is required";
    echo $year_hscerr;
  } else {
    $year_hsc = ($_POST["year_hsc"]);
    if (!preg_match("/^[0-9]*$/i",$year_hsc)) {
      $year_hscerr = "Invalid Year";
      echo $year_hscerr;
    }
    else{
      $year1_hsc=$year_hsc;
    }
  }
}


require_once("connection.php");
if(isset($_POST["submit"]))
{
        $query="insert into stud_edu(enum,name,email,ph_num,address,dob,gender,nationality)
        values('".$enum1."','".$name1."','".$email1."','".$num1."','".$address."','".$dob."','".$gender1."','".$nation1."')";
        mysqli_query($conn,$query) or die("something wrong");

        $query1="insert into stud_edu(enum,marks_ssc,tm_ssc,pert_ssc,year_ssc,board_ssc,marks_hsc,tm_hsc,pert_hsc,stream_hsc,year_hsc,board_hsc,marks_bachelors,tm_bachelors,pert_bachelors,deg_bachelor,uni_bachelor,year_bachelors,marks_master,tm_master,pert_master,deg_master,uni_master,year_master,l_entry,drops)
        values('".$enum1."','".$marks1_ssc."','".$tm1_ssc."','".$perct1_ssc."','".$year1_ssc."','".$board1_ssc."','".$marks1_hsc."','".$tm1_hsc."','".$perct1_hsc."','".$year1_hsc."','".$board1_hsc."')";
        mysqli_query($conn,$query1) or die("something wrong");
}

?>


    <form name="form1" method="post" >
      <table>
      <tr>
        <td><h3>Personal Details:</h3></td>
      </tr>

      <tr>
        <td>Enrollment number:</td>
        <td><input type="text" name="enum"></td>
      </tr>

      <tr>
        <td>Full Name:</td>
        <td><input type="text" name="name"></td>
      </tr>

      <tr>
        <td>Email:</td>
        <td><input type="email" name="mail"></td>
      </tr>

      <tr>
        <td>Phone number:</td>
        <td><input type="text" value="+91" readonly id="box"></input>
	      <input type="text" name="num"></td>
      </tr>

      <tr>
        <td>Address:</td>
        <td><input type="textarea" name="address"></td>
      </tr>

      <tr>
        <td>Date of Birth:</td>
        <td><input type="date" name="dob" required></td>
      </tr>

      <tr>
        <td>Gender:</td>
        <td><input type="text" name="gender"></td>
      </tr>

      <tr>
        <td>Nationality:</td>
        <td><input type="text" name="nation"></td>
      </tr>

        <tr>
          <td><h3>SSC DETAILS:</h3></td>
        </tr>
          <tr>
            <td>Obtained Marks SSC:</td>
            <td><input type="text" name="marks_ssc"></td>
          </tr>
        
          <tr>
            <td>Totalmarks SSC:</td>
            <td><input type="text" name="tm_ssc"></td>
          </tr>

          <tr>
            <td> Percentage of SSC:</td>
            <td><input type="text" name="perct_ssc"></td>
          </tr>

          <tr>
            <td>Year of passing SSC:</td>
            <td><input type="text" name="year_ssc"></td>
          </tr>

          <tr>
            <td>Board SSC:</td>
            <td><input type="text" name="board_ssc"></td>
          </tr>   

          <tr>
            <td><h3>HSC DETAILS:</h3></td>
          </tr>

           <tr>
            <td>Obtained Marks HSC:</td>
            <td><input type="text" name="marks_hsc"></td>
          </tr>
        
          <tr>
            <td>Totalmarks HSC:</td>
            <td><input type="text" name="tm_hsc"></td>
          </tr>

          <tr>
            <td> Percentage of HSC:</td>
            <td><input type="text" name="perct_hsc"></td>
          </tr>

          <tr>
            <td>Stream HSC:</td>
            <td><input type="text" name="stream_hsc"></td>
          </tr>

          <tr>
            <td>Board HSC:</td>
            <td><input type="text" name="board_hsc"></td>
          </tr>  

          <tr>
            <td>
              <h3>BACHELOR DEGREE DETAILS:</h3>
            </td>
          </tr>

          <tr>
            <td>Marks obtained in bacholer's:</td>
            <td><input type="text" name="marks_bachelor"></td>
          </tr>

          <tr>
            <td>Total marks in bachelor's:</td>
            <td><input type="text" name="marks_bachelor"></td>
          </tr>
        
          <tr>
            <td>Percentage in bachelor's:</td>
            <td><input type="text" name="perct_bachelor"></td>
          </tr>

          <tr>
            <td> Degree name of bachelor's:</td>
            <td><input type="text" name="deg_bachelor"></td>
          </tr>

          <tr>
            <td>University of bachelor's:</td>
            <td><input type="text" name="uni_bachelor"></td>
          </tr>

          <tr>
            <td>Year of passing of bachelor's:</td>
            <td><input type="text" name="year_bachelor"></td>
          </tr>        
          
          <tr>
            <td>
              <h3>MASTER's DEGREE DETAILS(aggregate of 3 sem):</h3>
            </td>
          </tr>
          <!-- <h3>MASTER's DEGREE DETAILS(aggregate of 3 sem):</h3> -->

          <tr>
            <td>Marks obtained in master's:</td>
            <td><input type="text" name="marks_master"></td>
          </tr>

          <tr>
            <td>Total marks in master's:</td>
            <td><input type="text" name="tm_master"></td>
          </tr>
        
          <tr>
            <td>Percentage in master's:</td>
            <td><input type="text" name="perct_master"></td>
          </tr>

          <tr>
            <td> Degree name of master's:</td>
            <td><input type="text" name="deg_master"></td>
          </tr>

          <tr>
            <td>University of master's:</td>
            <td><input type="text" name="uni_master"></td>
          </tr>

          <tr>
            <td>Year of passing of master's:</td>
            <td><input type="text" name="year_master"></td>
          </tr>      
          
          <tr>
            <td>Lateral entry</td>
            <td><select name="l_entry" id="l_entry">
                                <option value="yes">YES</option>
                                <option value="no">NO</option>
                        </select>                    
            </td>
          </tr>

          <tr>
          <td>Number of Drops:</td>
            <td><select name="drops" id="drops">
                                <option value="0">0</option>  
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                        </select>                    
            </td>
          </tr>

          <tr>
            <td>Remarks:</td>
            <td><textarea></textarea></td>
          </tr>
      </table>

      <br><input type="SUBMIT" name="SUBMIT" value="SUBMIT">

    </form>
</body>
</html>
