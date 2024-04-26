<?php
    session_start();
    // require_once("conn.php");
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
<div id="title">
           <center>STUDENT</center>
        </div>

    <div id="option">
        
        <form name="stu_option" method="post">
        <table id="t">
        <tr id="row">
                    
                    <td id="op"><center><label for="batch">Batch:</label>
                                        <select id="batch" name="batch">
                                        <option value="21-23">21-23</option>
                                        <option value="23-24">23-24</option>
                                        <option value="25-26">24-25</option>                                        
                                        </select></center></a></td>
                    <td id="op"><center><label for="program">Program:</label>
                                        <select id="program" name="program">
                                        <option value="MCA">MCA</option>
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
            <td id="op"><center><input type="submit" name="submit" id="submit" value="Submit"><center></td>
            <td></td>
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
        header("location:PC_ind.php?b=$batch&p=$program");
    }
    else{
        header("location:PC_rub.php?b=$batch && p=$program");
    }
}

?>
</html>