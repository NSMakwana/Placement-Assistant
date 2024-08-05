<?php
    session_start();
    require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="PC_student_css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="nav">
				
				
				<a href="PC_home.php"><button id="b"><img src="../Images/back.png" height="30px" width="35px"></button></a>
				<a class="active" href="../Homepage.php">Home</a>
                

				</div>
<div id="title">
           <center>STUDENT</center>
        </div>
        
    <div id="option">
        
        <form name="stu_option" method="post"  enctype="multipart/form-data">
        <table id="t">
        <tr id="row">
                    
                    <td id="op"><center><label for="batch">Batch:</label>
                                        <select id="batch" name="batch">
                                        <option value="2020-2022">2020-2022</option>
                                        <option value="2022-2024">2022-2024</option>
                                        <option value="2024-2026">2024-2026</option>                                        
                                        </select></center></a></td>
                    <td id="op"><center><label for="program">Program:</label>
                                        <select id="program" name="program">
                                        <option value="MCA">MCA</option>
                                        <option value="MSc AIML">MSc AIML</option>   
                                        <option value="M Tech">M Tech</option>
                                        <option value="MSC CS">MSC CS</option>                                        
                                        <option value="PGDCA">PGDCA</option>    
                                         
                                                                                                               
                                        </select></center></a></td>
                    <td id="op"><center><label for="report">Report:</label>
                                        <select id="report" name="report">
                                        <option value="Individual">Individual</option>
                                        <option value="Rubric">Rubric</option>                             
                                        </select></center></td> 
        </tr>
        <tr id="row">
            <td></td>
            <td></td>
            <td></td>
            
        </tr>
        <tr id="row">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr id="row">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr id="row">
            <td></td>
            <td></td>
            <td></td>
        </tr>
</table>
<table id="t2">
        <tr id="row">
            <td id="f"></td>
            <td id="f"><center><input type="submit" name="submit" id="submit" value="Search"><center></td>
            <td id="f"><center><input type="submit" name="down" id="down" value="Download List of Students(Registered)"><center></td>
            <td id="f"><center><input type="submit" name="down_all" id="down_all" value="Download all details of Students(Registered)"><center></td>
            
            <td id="f"></td>
            
        </tr>
        </form>
        </table>
    </div>
</body>
<?php
if(isset($_POST["submit"]))
{
    $batch=$_POST["batch"];
    $program=$_POST["program"];
    $report=$_POST["report"];

    if($report=="Individual")
    {
        header("location:PC_ind.php?b=$batch && p=$program");
    }
    else{
        header("location:PC_rub.php?b=$batch && p=$program");
    }
}

if(isset($_POST["down"]))
{
    
    $batch=$_POST["batch"];
    $program=$_POST["program"];
    $report=$_POST["report"];
    
    if($report=="Individual")
    {
        header("location:PC_download_student.php?b=$batch && p=$program");
        
    }
    else{
        header("location:PC_download_student_rub.php?b=$batch && p=$program");
    }
}
if(isset($_POST["down_all"]))
{
    
    $batch=$_POST["batch"];
    $program=$_POST["program"];
    // $report=$_POST["report"];
    header("location:PC_download_student_all.php?b=$batch && p=$program");
      
}
?>

</html>