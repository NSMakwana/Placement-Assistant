<?php
$cname=$caddr=$mpkg=$mxpkg=$deg=$pname=$email=$mno=$vdeg=$vloc=$vexpr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["cmp_name"]))
    {
        $cname=$_POST["cmp_name"];
    }
    if (!empty($_POST["cmp_address"]))
    {
        $caddr=$_POST["cmp_address"];
    }
    if (!empty($_POST["min_package"]))
    {
        $mpkg=$_POST["min_package"];
    }
    if (!empty($_POST["max_package"]))
    {
        $mxpkg=$_POST["max_package"];
    }
    if (!empty($_POST["per_name"]))
    {
        $pname=$_POST["pername"];
    }
    if (!empty($_POST["per_designation"]))
    {
        $pdeg=$_POST["per_designation"];
    }
    if (!empty($_POST["per_email"]))
    {
        $email=$_POST["per_email"];
    }
    if (!empty($_POST["per_num"]))
    {
        $mpkg=$_POST["per_num"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="company_details_css.css">
    <script>
        function addDesignation() {
           
            var designationContainer = document.getElementById('designation');
            var designationIndex = designationContainer.children.length;

            var designationDiv = document.createElement('div');
            designationDiv.className = 'designation';
            designationDiv.innerHTML = `
                <h4>Designation ${designationIndex + 1}</h4>
                <label for="designation_${designationIndex}">Designation:</label>
                <input type="text" id="designation_${designationIndex}" name="designations[${designationIndex}][name]">
                <label for="package_${designationIndex}">Package Details:</label>
                <input type="text" id="package_${designationIndex}" name="designations[${designationIndex}][packages]">
                <label for="experience_${designationIndex}">Experience Details:</label>
                <input type="text" id="experience_${designationIndex}" name="designations[${designationIndex}][experiences]">
                <label for="qualification_${designationIndex}">Qualification Details:</label>
                <input type="checkbox" id="A1" name="ug1" value="B.COM">
                        <label for="A1"> B.COM </label><br>
                        <input type="checkbox" id="A2" name="ug2" value="BSC">
                        <label for="A2"> BSC </label><br>
                        <input type="checkbox" id="A3" name="ug3" value="BBA">
                        <label for="A3"> BBA </label><br>
                        <input type="checkbox" id="A4" name="ug4" value="BCA">
                        <label for="A4"> BCA </label><br>
                        <input type="checkbox" id="A5" name="ug5" value="BE">
                        <label for="A5"> BE </label><br>
                        <input type="checkbox" id="A6" name="ug6" value="BTECH">
                        <label for="A6"> BTECH </label><br>
                        <input type="checkbox" id="A7" name="ug7" value="Any other">
                        <label for="A7"> Any other </label><br>`
            ;
            designationContainer.appendChild(designationDiv);
        }
    </script>
</head>
<body>
    <?php
    
    
    ?>
<div id="details">
<form>
                <h3 id="he">Company details: </h3>             
          
        <table id="d">
                    
                    <tr></tr>              
                    <tr>
                    <th id="h"><label> Name :</label></th>
                    <td><input type="name" name="cmp_name"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Block number  :</label></th>
                    <td><input type="text" name="block_num"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Building name :</label></th>
                    <td><input type="text" name="building_name"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Area :</label></th>
                    <td><input type="text" name="area"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Landmark :</label></th>
                    <td><input type="text" name="landmark"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Pincode :</label></th>
                    <td><input type="text" name="pincode"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> City :</label></th>
                    <td><input type="text" name="city"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> State :</label></th>
                    <td><input type="text" name="state"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Minimum package :</label></th>
                    <td><input type="text" name="min_package"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Maximum package :</label></th>
                    <td><input type="text" name="max_package"></td>
                    </tr>
                    <tr></tr> 
    </table>
                    <tr>
                    <th id="he"><h3>Details of contact person: </h3></th>
                    </tr>
                    <tr></tr> 
                    <tr>
                    <th id="h"><label> Name :</label></th>
                    <td><input type="name" name="per_name"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Designation :</label></th>
                    <td><input type="text" name="per_designation"></td>
                    </tr>
                    <tr>
                    <th id="h"><label>Email address :</label></th>
                    <td><input type="email" name="per_email"></td>
                    </tr>
                    <tr>
                    <th id="h"><label> Mobile number :</label></th>
                    <td><input type="text" name="per_num"></td>
                    </tr>
                    <tr></tr> 
                    <tr>
                    <th id="he"><h3>Details of vacancy: </h3></th>
                    </tr>
                    <tr></tr> 
                    <tr>
                    <th id="h"><label> Designation :</label></th>
                    <td>
                    <div id="designation"></div>
                    <button type="button" onclick="addDesignation()">Add Designation</button>
                    </td>    
                    </tr>
                    <tr></tr> 
                    <tr>
                     <th id="he"><h3>Placement process: </h3></th>
                    </tr> 
                    <tr></tr>    
                    <tr>
                    <td>
                        <input type="checkbox" id="C1" name="T1" value="aptitude_test">
                        <label for="C1"> Aptitude Test  </label><br>
                        <input type="checkbox" id="C2" name="T2" value="Tech_round">
                        <label for="C2"> Technical round  </label><br>
                        <input type="checkbox" id="C3" name="T3" value="R1">
                        <label for="C3"> Round1 </label><br>
                        <input type="checkbox" id="C4" name="T4" value="R2">
                        <label for="C4"> Round2 </label><br>
                        <input type="checkbox" id="C5" name="T5" value="Pair_req">
                        <label for="C5"> Pair required  </label><br>
                      <br>PI Round : <br> <input type="checkbox" id="C6" name="T6" value="Ro1">
                        <label for="C6"> Round1 </label><br>
                        <input type="checkbox" id="C7" name="T7" value="Ro2">
                        <label for="C7"> Round2 </label><br>
                        <input type="checkbox" id="C8" name="T8" value="HR_round">
                        <label for="C8"> H.R round  </label><br>
                    </td>
                    </tr>
                </table>


                <br> <input type="SUBMIT" name="SUBMIT" value="SUBMIT"></br>
</form>

    </body>
</html>