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
        
        <form method="post">
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
                    <td id="op"><center>Report:<center></td>
        </tr>
        <tr id="row">
            <td></td>
            <td></td>
            <td id="op"><a href="PC_ind.php"><center><button id="ind">Individual</button></center></a></td>
            
        </tr>
        <tr id="row">
            <td></td>
            <td></td>
            <td id="op"><a href="PC_rub.php"><center><button id="rub">Rubric</button></center></a></td>
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
</html>