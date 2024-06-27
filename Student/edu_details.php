<?php
require_once('../vendor/autoload.php');
require_once("conn.php");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
?>
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

$marks_sscerr = $tm_sscerr = $perct_sscerr = $year_sscerr = $board_sscerr = $marks_hscerr = $tm_hscerr = $perct_hscerr =$stream_hsc= $year_hscerr = $board_hscerr= $marks_bachelorerr = $tm_bachelorerr = $l_entryerr=$dropserr=$perct_bachelorerr = $deg_bachelorerr = $uni_bachelorerr = $year_bachelorerr = $marks_mastererr = $tm_mastererr = $perct_mastererr = $deg_mastererr = $uni_mastererr = $year_mastererr ="";
$marks_ssc = $tm_ssc = $perct_ssc = $year_ssc = $board_ssc = $marks_hsc = $tm_hsc = $perct_hsc = $streamhsc = $year_hsc = $board_hsc = $marks_bachelor = $tm_bachelor = $perct_bachelor = $deg_bachelor = $uni_bachelor = $l_entry=$drops=$year_bachelor = $marks_master = $tm_master = $perct_master = $deg_master = $uni_master = $year_master ="";
$marks1_ssc = $tm1_ssc = $perct1_ssc = $year1_ssc = $board1_ssc = $marks1_hsc = $tm1_hsc = $perct1_hsc = $stream1_hsc= $year1_hsc = $board1_hsc =  $marks1_bachelor = $tm1_bachelor = $perct1_bachelor = $deg1_bachelor = $uni1_bachelor = $year1_bachelor = $marks1_master = $tm1_master = $perct1_master = $deg1_master = $uni1_master = $year1_master ="";

$enumerr = $nameerr = $emailerr = $numerr = $nationerr = $gendererr = $addresserr = $courseerr = $doberr = "";
$enum = $name = $num = $email = $nation = $gender = $address = $dob = $course = "";
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
  
  if (empty($_POST["course"])) {
    $courseerr = "Course is required";
  } else {
    $course = ($_POST["course"]);
  }

  if (empty($_POST["l_entry"])) {
    $l_entryerr = "Lateral entry is required";
  } else {
    $l_entry = ($_POST["l_entry"]);
  }

  if (empty($_POST["drops"])) {
    $dropserr = "Number of drops are required";
  } else {
    $drops = ($_POST["drops"]);
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

  if (empty($_POST["deg_bachelor"])) {
    $deg_bachelorerr = "Degree is required";
    echo $deg_bachelorerr;
  } else {
    $deg_bachelor = ($_POST["deg_bachelor"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$deg_bachelor)) {
      $deg_bachelorerr = "Only letters and white space allowed";
      echo $deg_bachelorerr;
    }
    else
    {
      $deg1_bachelor=$deg_bachelor;
    }
  }

  if (empty($_POST["uni_bachelor"])) {
    $uni_bachelorerr = "University is required";
    echo $uni_bachelorerr;
  } else {
    $uni_bachelor = ($_POST["uni_bachelor"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$uni_bachelor)) {
      $uni_bachelorerr = "Only letters and white space allowed";
      echo $uni_bachelorerr;
    }
    else
    {
      $uni1_bachelor=$uni_bachelor;
    }
  }


  if (empty($_POST["marks_bachelor"])) {
    $marks_bachelorerr = "Marks are required";
    echo $marks_bachelorerr;
  } else {
    $marks_bachelor = ($_POST["marks_bachelor"]);
    if (!preg_match("/^[0-9]*$/i",$marks_bachelor)) {
      $marks_bachelorerr = "Invalid marks";
      echo $marks_bachelorerr;
    }
    else{
      $marks1_bachelor=$marks_bachelor;
    }
  }

  if (empty($_POST["tm_bachelor"])) {
    $tm_bachelorerr = "Total Marks are required";
    echo $tm_bachelorerr;
  } else {
    $tm_bachelor = ($_POST["tm_bachelor"]);
    if (!preg_match("/^[0-9]*$/i",$tm_bachelor)) {
      $tm_bachelorerr = "Invalid marks";
      echo $tm_bachelorerr;
    }
    else{
      $tm1_bachelor=$tm_bachelor;
    }
  }

  if (empty($_POST["perct_bachelor"])) {
    $perct_bachelorerr = "Percentage is required";
    echo $perct_bachelorerr;
  } else {
    $perct_bachelor = ($_POST["perct_bachelor"]);
    if (!preg_match("/^[0-9]*$/i",$perct_bachelor)) {
      $perct_bachelorerr = "Invalid number";
      echo $perct_bachelorerr;
    }
    else{
      $perct1_bachelor=$perct_bachelor;
    }
  }

  if (empty($_POST["year_bachelor"])) {
    $year_bachelorerr = "Year is required";
    echo $year_bachelorerr;
  } else {
    $year_bachelor = ($_POST["year_bachelor"]);
    if (!preg_match("/^[0-9]*$/i",$year_bachelor)) {
      $year_bachelorerr = "Invalid Year";
      echo $year_bachelorerr;
    }
    else{
      $year1_bachelor=$year_bachelor;
    }
  }

  if (empty($_POST["deg_master"])) {
    $deg_mastererr = "Degree is required";
    echo $deg_mastererr;
  } else {
    $deg_master = ($_POST["deg_master"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$deg_master)) {
      $deg_mastererr = "Only letters and white space allowed";
      echo $deg_mastererr;
    }
    else
    {
      $deg1_master=$deg_master;
    }
  }

  if (empty($_POST["uni_master"])) {
    $uni_mastererr = "University is required";
    echo $uni_mastererr;
  } else {
    $uni_master = ($_POST["uni_master"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$uni_master)) {
      $uni_mastererr = "Only letters and white space allowed";
      echo $uni_mastererr;
    }
    else
    {
      $uni1_master=$uni_master;
    }
  }


  if (empty($_POST["marks_master"])) {
    $marks_mastererr = "Marks are required";
    echo $marks_mastererr;
  } else {
    $marks_master = ($_POST["marks_master"]);
    if (!preg_match("/^[0-9]*$/i",$marks_master)) {
      $marks_mastererr = "Invalid marks";
      echo $marks_mastererr;
    }
    else{
      $marks1_master=$marks_master;
    }
  }

  if (empty($_POST["tm_master"])) {
    $tm_mastererr = "Total Marks are required";
    echo $tm_mastererr;
  } else {
    $tm_master = ($_POST["tm_master"]);
    if (!preg_match("/^[0-9]*$/i",$tm_master)) {
      $tm_mastererr = "Invalid marks";
      echo $tm_mastererr;
    }
    else{
      $tm1_master=$tm_master;
    }
  }

  if (empty($_POST["perct_master"])) {
    $perct_mastererr = "Percentage is required";
    echo $perct_mastererr;
  } else {
    $perct_master = ($_POST["perct_master"]);
    if (!preg_match("/^[0-9]*$/i",$perct_master)) {
      $perct_mastererr = "Invalid number";
      echo $perct_mastererr;
    }
    else{
      $perct1_master=$perct_master;
    }
  }

  if (empty($_POST["year_master"])) {
    $year_mastererr = "Year is required";
    echo $year_mastererr;
  } else {
    $year_master = ($_POST["year_master"]);
    if (!preg_match("/^[0-9]*$/i",$year_master)) {
      $year_mastererr = "Invalid Year";
      echo $year_mastererr;
    }
    else{
      $year1_master=$year_master;
    }
  }

}


// require_once("connection.php");
if(isset($_POST["submit"]))
{
        $query="insert into stud_edu(enum,name,email,ph_num,address,dob,gender,nationality)
        values('".$enum1."','".$course."','".$name1."','".$email1."','".$num1."','".$address."','".$dob."','".$gender1."','".$nation1."')";
        mysqli_query($conn,$query) or die("something wrong");

        $query1="insert into stud_edu(enum,marks_ssc,tm_ssc,pert_ssc,year_ssc,board_ssc,marks_hsc,tm_hsc,pert_hsc,stream_hsc,year_hsc,board_hsc,marks_bachelors,tm_bachelors,pert_bachelors,deg_bachelor,uni_bachelor,year_bachelors,marks_master,tm_master,pert_master,deg_master,uni_master,year_master,l_entry,drops)
        values('".$enum1."','".$marks1_ssc."','".$tm1_ssc."','".$perct1_ssc."','".$year1_ssc."','".$board1_ssc."','".$marks1_hsc."','".$tm1_hsc."','".$perct1_hsc."','".$stream1_hsc."','".$board1_hsc."','".$year1_hsc."','".$marks1_bachelor."','".$tm1_bachelor."','".$perct1_bachelor."','".$deg1_bachelor."','".str_replace("'","\'",$uni1_bachelor)."','".$year1_bachelor."','".$marks1_master."','".$tm1_master."','".$perct1_master."','".$deg1_master."','".str_replace("'","\'",$uni1_master)."','".$year1_master."','".$l_entry."','".$drops."')";
        mysqli_query($conn,$query1) or die("something wrong");
}

?>


    <form name="form1" enctype="multipart/form-data" method="post" >
   <table>
         <tr>
        <td><h3>Personal Details:</h3></td>
      </tr>

      <tr>
        <td>Enrollment number:</td>
        <td><input type="text" name="enum"></td>
      </tr>

      <tr>
        <td>Course:</td>
        <td><input type="text" name="course"></td>
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
        <td><input type="date" name="dob" ></td>
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
           <h3>MASTER's DEGREE DETAILS(aggregate of 3 sem):</h3>

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

          <tr>
            <td></td>
            <td><input type="file" name="file_import"></td>
          </tr>       </table> 

      <br><input type="SUBMIT" name="SUBMIT" value="SUBMIT">
      <br><input type="SUBMIT" name="save_excel_data" value="SUBMIT">

    </form>
</body>
<?php

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES["file_import"]['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES["file_import"]['tmp_name'];
        $spreadsheet = PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            // if($count > 0)
            // {
                $enum1 = $row['0'];
                $name1 =$row['1'];
                $course =$row['2'];
                $num1 = $row['3'];
                $email1 =$row['4']; 
                $address= $row['5'];
                $dob=$row['6'];
                $marks1_ssc = $row['7'];
                $tm1_ssc = $row['8'];
                $perct1_ssc = $row['9'];
                $year1_ssc = $row['10'];
                $board1_ssc = $row['11'];
                $marks1_hsc = $row['12'];
                $tm1_hsc = $row['13'];
                $perct1_hsc = $row['14'];
                $stream1_hsc= $row['15'];
                $board1_hsc = $row['16'];
                $year1_hsc = $row['17'];
                $marks1_bachelor = $row['18'];
                $tm1_bachelor = $row['19'];
                $perct1_bachelor = $row['20'];
                $deg1_bachelor = $row['21'];
                $uni1_bachelor = $row['22'];
                $year1_bachelor = $row['23'];
                $marks1_master = $row['24'];
                $tm1_master = $row['25'];
                $perct1_master = $row['26'];
                $deg1_master = $row['27'];
                $uni1_master =$row['28']; 
                $year1_master =$row['29'];
                $l_entry=$row['30'];
                $drops=$row['31'];
                $remarks=$row['32'];


                $query="insert into stud_personal(enum,course,name,email,ph_num,address,dob)
                values('".$enum1."','".$course."','".$name1."','".$email1."','".$num1."','".$address."','".$dob."')";
                mysqli_query($conn,$query) or die("something wrong");
        
                echo $query."<br><br>";

              
                $query1="insert into stud_edu(enum,marks_ssc,tm_ssc,perct_ssc,year_ssc,board_ssc,marks_hsc,tm_hsc,perct_hsc,stream_hsc,board_hsc,year_hsc,marks_bachelor,tm_bachelor,perct_bachelor,deg_bachelor,uni_bachelor,year_bachelor,marks_master,tm_master,perct_master,deg_master,uni_master,year_master,l_entry,drops,remarks)
                values('".$enum1."','".$marks1_ssc."','".$tm1_ssc."','".$perct1_ssc."','".$year1_ssc."','".$board1_ssc."','".$marks1_hsc."','".$tm1_hsc."','".$perct1_hsc."','".$stream1_hsc."','".$board1_hsc."','".$year1_hsc."','".$marks1_bachelor."','".$tm1_bachelor."','".$perct1_bachelor."','".$deg1_bachelor."','".$uni1_bachelor."','".$year1_bachelor."','".$marks1_master."','".$tm1_master."','".$perct1_master."','".$deg1_master."','".$uni1_master."/','".$year1_master."','".$l_entry."','".$drops."','".$remarks."')";
                echo $query1;
                
                mysqli_query($conn,$query1) or die("something wrong");
        //     }
        //     else
        //     {
        //         $count = "1";
        //     }
        }

       }
}

?>
</html>
