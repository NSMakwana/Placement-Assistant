<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="company_details_css.css">
</head>
<body>
<form>
        <table id="cmp">
                    <tr>
                        <td id="op"><h3>Company details: </h3></td>
                        <td id="op"></td>
                    </tr>                
                    <tr>
                    <td id="op"><label> Name :</label></td>
                    <td id="op"><input type="name" name="cmp_name"></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Address :</label></td>
                    <td id="op"><input type="text" name="cmp_address"></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Minimum package :</label></td>
                    <td id="op"><input type="text" name="min_package"></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Maximum package :</label></td>
                    <td id="op"><input type="text" name="max_package"></td>
                    </tr>
                    <tr>
                    <td id="op"> <h3>Details of contact person: </h3></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Name :</label></td>
                    <td id="op"><input type="name" name="per_name"></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Designation :</label></td>
                    <td id="op"><input type="text" name="per_designation"></td>
                    </tr>
                    <tr>
                    <td id="op"><label>Email address :</label></td>
                    <td id="op"><input type="email" name="per_email"></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Mobile number :</label></td>
                    <td id="op"><input type="text" name="per_num"></td>
                    </tr>
                    <tr>
                    <td id="op"><h3>Details of vacancy: </h3></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Designation :</label></td>
                    <td id="op"><input type="name" name="vac_designation"></td>
                    </tr>
                    <tr>
                    <td id="op"><label> Location :</label></td>
                    <td id="op"><input type="text" name="vac_location"></td>
                    </tr>
                    <tr>
                    <td id="op"><label for ="experience"> Experience required: </label></td>
                    <td id="op"><select name="experience" id="experience">
                                <option value="no experience">no experience</option>
                                <option value="1 year">1 year</option>
                                <option value="2 year">2 year</option>
                                <option value="more than 2 year">more than 2 year</option>
                        </select>                    
                    </tr>
                    <tr>
                    <td id="op"><label> Mobile number : </label></td>
                    <td id="op"><input type="text" name="vac_mobilenum" pattern="[789][0-9]{9}"></td>
                    </tr>
                    <tr>
                    <td id="op"><h3>Academic background: </h3></td>
                    </tr>
                
                    <tr>UG :
                    <td id="op">
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
                        <label for="A7"> Any other </label><br>
                    </td>
                    </tr>

                    <tr>PG :
                    <td id="op">
                        <input type="checkbox" id="B1" name="pg1" value="PGDCA">
                        <label for="B1"> PGDCA </label><br>
                        <input type="checkbox" id="B2" name="pg2" value="MCA">
                        <label for="B2"> MCA </label><br>
                        <input type="checkbox" id="B3" name="pg3" value="M-TECH">
                        <label for="B3"> M-TECH </label><br>
                        <input type="checkbox" id="B4" name="pg4" value="MSC-CS">
                        <label for="B4"> MSC-CS </label><br>
                        <input type="checkbox" id="B5" name="pg5" value="Any other">
                        <label for="B5"> Any other </label><br><br>
                    </td>
                    </tr>
                    <tr>
                     <td id="op"><h3>Placement process: </h3></td>
                    </tr>
                    <tr>
                    <td id="op">
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