<?php
    session_start();
    // require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="PC_company_css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="title">
           <center>COMPANY</center>
        </div>

    <div id="option">
        
        <table id="t">
        <tr id="row">
                    
        <td id="box"><center><a href="Company details\company_details.php"><button id="data" value="Data Entry">Data Entry</button></a><center></td>
        <td id="box"><center><a href="PC_company_view.php"><button id="view" value="View">View</button></a><center></td>
        </tr>
        <tr id="row">
            <td></td>
            <td></td>
            <td></td>
            
        </tr>
       
</table>
</html>