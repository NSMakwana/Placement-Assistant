<?php
require_once("conn.php");
 $cname=$b_no=$build_name=$area=$lm=$sn=$cn=$pn=$mpkg=$mxpkg=$deg=$pname=$pemail=$pno=$pdeg=$apt=$tech_r=$r1=$r2=$pair_req=$pi_r1=$pi_r2=$hr=$any_other="";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (!empty($_POST["cmp_name"]))
//     {
//         $cname=$_POST["cmp_name"];
//     }
//     $query="select * from company where name ='".$canme."'";
//     $res=mysqli_query($conn,$query);
//     while($rec=myqli_fetch_assoc($res))
//     {
//         if($cname==$rec["c_name"])
//         {
        
        
//         $b_no=$rec["block_num"];
//         $build_name=$rec["building_name"];
//         $area=$rec["area"];
//         $lm=$rec["landmark"];
//         $sn=$rec["state"];
//         $cn=$rec["city"];
//         $pn=$rec["pincode"];
//         $mpkg=$rec["min_package"];
//         $mxpkg=$rec["max_package"];
//         // $deg=$rec["designation"];
//         $pname=$rec["manager_name"];
//         $pemail=$rec["email_id"];
//         $pno=$rec["mobile_num"];
//         $pdeg=$rec["designation"];
//         $apt=$rec["aptitude_test"];
//         $tech_r=$rec["tech_round"];
//         $r1=$rec["round_1"];
//         $r2=$rec["round_2"];
//         $pair_req=$rec["pair_required"];
//         $pi_r1=$rec["PI_round1"];
//         $pi_r2=$rec["PI_round2"];
//         $hr=$rec["HR_round"];
//         $any_other=$rec["any_other"];
        
       
//     }}
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
    if (!empty($_POST["cmp_name"]))
    {
        $cname=$_POST["cmp_name"];
    }
    if (!empty($_POST["b_no"]))
    {
        $b_no=$_POST["b_no"];
    }
    if (!empty($_POST["b_name"]))
    {
        $build_name=$_POST["b_name"];
    }
    if (!empty($_POST["area"]))
    {
        $area=$_POST["area"];
    }
    if (!empty($_POST["landmark"]))
    {
        $lm=$_POST["landmark"];
    }
    if (!empty($_POST["state"]))
    {
        $sn=$_POST["state"];
    }
    if (!empty($_POST["city"]))
    {
        $cn=$_POST["city"];
    }
    if (!empty($_POST["pincode"]))
    {
        $pn=$_POST["pincode"];
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
        $pname=$_POST["per_name"];
    }
    if (!empty($_POST["per_designation"]))
    {
        $pdeg=$_POST["per_designation"];
    }
    if (!empty($_POST["per_email"]))
    {
        $pemail=$_POST["per_email"];
    }
    if (!empty($_POST["per_num"]))
    {
        $pno=$_POST["per_num"];
    }
    if (!empty($_POST["C1"]))
    {
        $apt=$_POST["C1"];
    }
    if (!empty($_POST["C2"]))
    {
        $tech_r=$_POST["C2"];
    }
    if (!empty($_POST["C3"]))
    {
        $r1=$_POST["C3"];
    }
    if (!empty($_POST["C4"]))
    {
        $r2=$_POST["C4"];
    }
    if (!empty($_POST["C5"]))
    {
        $pair_req=$_POST["C5"];
    }
    if (!empty($_POST["C6"]))
    {
        $pi_r1=$_POST["C6"];
    }
    if (!empty($_POST["C7"]))
    {
        $pi_r2=$_POST["C7"];
    }
    if (!empty($_POST["C8"]))
    {
        $hr=$_POST["C8"];
    }
    if (!empty($_POST["C9"]))
    {
        $any_other=$_POST["C9"];
    }
}
if(isset($_POST["submit"]))
{
   
        $query="insert into company_details(c_name,block_num,building_name,area,landmark,pincode,city,state,min_package,max_package,manager_name,designation,email_id,mobile_num,aptitude_test,tech_round,round_1,round_2,pair_required,PI_round1,PI_round2,HR_round,any_other) 
        VALUES ('".$cname."','".$b_no."','".$build_name."','".$area."','".$lm."','".$pn."','".$cn."','".$sn."','".$mpkg."','".$mxpkg."','".$pname."','".$pdeg."','".$pemail."','".$pno."','".$apt."','".$tech_r."','".$r1."','".$r2."','".$pair_req."','".$pi_r1."','".$pi_r2."','".$hr."','".$any_other."')";
        mysqli_query($conn,$query) or die("something wrong");
        $company_id = $conn->insert_id;
   
        foreach ($_POST['designations'] as $designation) {
            $designation_name = $designation['name'];
            $no_pos=$designation['pos'];
            $designation_experience = $designation['ex'];
            $type=$designation['type'];
            $bond=$designation['bond'];
            $location=$designation['location'];
            $min_packages = $designation['min_package'];
            $max_packages = $designation['max_package'];
            $remarks=$designation['remark'];
            $stipend=$designation['stipend'];
            
            $designation_ug1 = isset($designation['ug1']) ? $designation['ug1'] : "";
            $designation_ug2 = isset($designation['ug2']) ? $designation['ug2'] : "";
            $designation_ug3 = isset($designation['ug3']) ? $designation['ug3'] : "";
            $designation_ug4 = isset($designation['ug4']) ? $designation['ug4'] : "";
            $designation_ug5 = isset($designation['ug5']) ? $designation['ug5'] : "";
            $designation_ug6 = isset($designation['ug6']) ? $designation['ug6'] : "";
            $designation_pg1 = isset($designation['pg1']) ? $designation['pg1'] : "";
            $designation_pg2 = isset($designation['pg2']) ? $designation['pg2'] : "";
            $designation_pg3 = isset($designation['pg3']) ? $designation['pg3'] : "";
            $designation_pg4 = isset($designation['pg4']) ? $designation['pg4'] : "";
            $designation_pg5 = isset($designation['pg5']) ? $designation['pg5'] : "";
            $designation_pg6 = isset($designation['pg6']) ? $designation['pg6'] : "";

            $query1 = "INSERT INTO designations (cid, name,  experience_details, min_package, max_package, no_of_pos, bond, type, stipend, location, bcom, bba, bsc, bca, be, btech, pgdca, mca, mtech, msc_cs,anyother) 
            VALUES ('$company_id', '$designation_name','$designation_experience','$min_packages','$max_packages','$no_pos','$bond','$type','$stipend','$location','$designation_ug1', '$designation_ug2', '$designation_ug3', '$designation_ug4','$designation_ug6', '$designation_pg1', '$designation_pg2', '$designation_pg3', '$designation_pg4', '$designation_pg5', '$designation_pg6')";
            mysqli_query($conn, $query1);                
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
               <h3>Designation ${designationIndex + 1}</h3>
               <table id="d">

               <tr>
               <th id="vdh">
               <label for="designation_${designationIndex}">Designation</label>
               </td>
               <td id="vd">
               <input type="text" id="designation_${designationIndex}" name="designations[${designationIndex}][name]">
               </td>
               <td id="s8"></td>
               <th id="vposh">
               <label for="pos_${designationIndex}">No. of Positions</label>
               </th>
               <td id="vpos">
               <input type="number" id="pos_${designationIndex}" name="designations[${designationIndex}][pos]">
               </td>
               <td id="s9"></td>
               <th id="veh">
               <label for="experience_${designationIndex}">Experience</label>
               </th>
               <td id="ve">
                <select name="designations[${designationIndex}][ex]" id="experience_${designationIndex}">
                    <option value="no experience">no experience</option>
                    <option value="1 year">1 year</option>
                    <option value="2 year">2 year</option>
                    <option value="more than 2 year">more than 2 year</option>
                </select></td>               
               </td>
               </tr>

               <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>

               <tr>
               <th id="vth">
               <label for="type_${designationIndex}">Type</label>
               </td>
               <td id="vt">
               <input type="text" id="type_${designationIndex}" name="designations[${designationIndex}][type]">
               </td>
               <td id="s10"></td>
               <th id="vbondh">
               <label for="bond_${designationIndex}">Bond</label>
               </th>
               <td id="vbond">
               <input type="text" id="bond_${designationIndex}" name="designations[${designationIndex}][bond]">
               </td>
               <td id="s11"></td>
               <th id="vloch">
               <label for="loc_${designationIndex}">Location</label>
               </th>
               <td id="vloc">
               <input type="text" id="loc_${designationIndex}" name="designations[${designationIndex}][location]">
                </td>               
               </td>
               </tr>

               <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>

               <tr>
               <th id="vmph">
               <label for="m_package_${designationIndex}">Minimum package</label>
               </td>
               <td id="vmp">
               <input type="text" id="m_package_${designationIndex}" name="designations[${designationIndex}][min_package]">
               </td>
               <td id="s12"></td>
               <th id="vmph">
               <label for="mx_package_${designationIndex}">Maximum Package</label>
               </th>
               <td id="vmxp">
               <input type="text" id="mx_package_${designationIndex}" name="designations[${designationIndex}][max_package]">
               </td>
               <td id="s13"></td>
               <th id="vrmh">
               <label for="remark_${designationIndex}">Remarks</label>
               </th>
               <td id="vrm">
               <textarea id="remark_${designationIndex}" name="designations[${designationIndex}][remark]"></textarea>
                </td>               
               </td>
               </tr>
               
               <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>

               <tr>
               <th id="vmph">
               <label for="stipend_${designationIndex}">Stipend</label>
               </td>
               <td id="vs">
               <input type="text" id="stipend_${designationIndex}" name="designations[${designationIndex}][stipend]">
               </td>
               <td id="sp"></td><td id="sp"></td><td id="sp"></td>
               
               </tr>
               
               
               </table>

               <h3><label for="qualification_${designationIndex}">Qualification</label></h3>
               <table id="new">
               <tr>
               <td id="n1">
                       <input type="checkbox" id="A1" name="designations[${designationIndex}][ug1]" value="B.Com">
                       <label for="A1"> B.COM </label><br>
                       <input type="checkbox" id="A3" name="designations[${designationIndex}][ug3]" value="BBA">
                       <label for="A3"> BBA </label><br>
                       <input type="checkbox" id="A2" name="designations[${designationIndex}][ug2]" value="B.Sc">
                       <label for="A2"> BSC </label><br>                     
                       </td> 
                       <td>
                       <input type="checkbox" id="A4" name="designations[${designationIndex}][ug4]" value="BCA">
                       <label for="A4"> BCA </label><br>              
                       <input type="checkbox" id="A5" name="designations[${designationIndex}][ug5]" value="BE">
                       <label for="A5"> BE </label><br>
                       <input type="checkbox" id="A6" name="designations[${designationIndex}][ug6]" value="B.Tech">
                       <label for="A6"> BTECH </label><br>
                       </td>
                       <td>
                        <input type="checkbox" id="B1" name="designations[${designationIndex}][pg1]" value="PGDCA">
                        <label for="B1"> PGDCA </label><br>
                        <input type="checkbox" id="B2" name="designations[${designationIndex}][pg2]" value="MCA">
                        <label for="B2"> MCA </label><br>
                        <input type="checkbox" id="B3" name="designations[${designationIndex}][pg3]" value="M-TECH">
                        <label for="B3"> M-TECH </label><br>
                        </td>
                        <td>
                        <input type="checkbox" id="B4" name="designations[${designationIndex}][pg4]" value="MSC-CS">
                        <label for="B4"> MSC-CS </label><br>
                        <input type="checkbox" id="B6" name="designations[${designationIndex}][pg6]" value="MSC-AIML">
                        <label for="B6"> MSC-AIML </label><br>
                        <input type="checkbox" id="B5" name="designations[${designationIndex}][pg5]" value="Any other">
                        <label for="B5"> Any other </label></td></tr>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        </table>
                    
                    `;
           
            designationContainer.appendChild(designationDiv);
        }
    </script>
</head>
<body>
<div id="title">
           <center>Company Details</center>
        </div>
    
<div id="details">
<form method="post">
                <h3 id="he1">Name and Address</Address> </h3>             
          
                    <table id="nd">  
                    <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr> 
                         
                    <tr>
                    <th id="nh"><label id="lbl"> Name  </label></th>
                    <td id="n"><input type="name" id="name" name="cmp_name" required></td>
                    </tr>                    
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    </table>
                    <table id="d">    
                    <th id="bnh"><label id="lbl"> Block number</label id="label"></th>
                    <td id="bn"><input type="text" name="b_no" id="b_no"></td>
                    <td id="s1"></td>
                    <th id="bh"><label id="lbl"> Building name </label></th>
                    <td id="b"><input type="text" name="b_name" id="b_name"></td>
                    <td id="s2"></td>
                    <th id="ah"><label id="lbl"> Area</label id="label"></th>
                    <td id="a"><input type="text" name="area" id="area"></td>
                    </tr>
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    <th id="lh"><label id="lbl"> Landmark </label></th>
                    <td id="l"><input type="text" name="landmark" id="lm"></td>
                    <td id="s3"></td>
                    <th id="sh"><label id="lbl"> State </label></th>
                    <td id="s"><input type="text" name="state" id="sn"></td>
                    <td id="s4"></td>
                    <th id="ch"><label id="lbl"> City </label></th>
                    <td id="c"><input type="text" name="city" id="cn"></td>
                    </tr>

                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    
                    <tr>
                    <th id="ph"><label id="lbl"> Pincode </label></th>
                    <td id="p"><input type="text" name="pincode" id="pn"></td>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                   
                    </tr>

                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    </table>
                    <table id="d">
                    <tr>
                    <th id="minh"><label id="lbl"> Minimum package</label id="label"></th>
                    <td id="min"><input type="text" name="min_package" id="min_pkg"></td>
                    <td id="s5"></td>
                    <th id="maxh"><label id="lbl"> Maximum package</label id="label"></th>
                    <td id="max"><input type="text" name="max_package" id="max_h"></td>
                   
                    </tr>
                    <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr> 
                    
    </table>
    <h3 id="he2">Details of Contact Person </h3>
        <table id="nd">
        <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr> 
                    
                    <tr>
                    <th id="cnh"><label id="lbl"> Name  </label></th>
                    <td id="cn"><input type="name" name="per_name" id="per_name"></td>
                    </tr>                    
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    </table>
                    
                    <table id="d">
                    <tr>
                    <th id="cdh"><label id="lbl"> Designation </label id="label"></th>
                    <td id="cd"><input type="text" name="per_designation" id="per_designation"></td>
                    <td id="s6"></td>
                    <th id="ceh"><label id="lbl">Email address</label id="label"></th>
                    <td id="ce"><input type="email" name="per_email" id="per_email"></td>
                    <td id="s7"></td>
                    <th id="cmh"><label id="lbl"> Mobile number</label id="label"></th>
                    <td id="cm"><input type="text" name="per_num" id="per_num"></td>
                    <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr> 
                    </table>

                    <h3 id="he3">Details of Vacancy </h3>

                   
                    <div id="designation"></div>
                    <button type="button" onclick="addDesignation()">Add Designation</button>
                   
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>      
                    </table>
                    
                    <h3 id="he4">Placement process: </h3>
                    
                    <table id="new2">  
                    <tr>
                    <td id="r1">
                        <input type="checkbox" id="C1" name="C1" value="Aptitude test">
                        <label for="C1"> Aptitude Test  </label><br>
                        <input type="checkbox" id="C2" name="C2" value="Technical Round">
                        <label for="C2"> Technical round  </label><br>
                        <input type="checkbox" id="C3" name="C3" value="Round 1">
                        <label for="C3"> Round1 </label><br>
                        <input type="checkbox" id="C4" name="C4" value="Round 2">
                        <label for="C4"> Round2 </label><br>
                        <input type="checkbox" id="C5" name="C5" value="Pair Required">
                        <label for="C5"> Pair required  </label></td>
                        <td id="r2">PI Round :<br> <input type="checkbox" id="C6" name="C6" value="Round 1">
                        <label for="C6"> Round1 </label><br>
                        <input type="checkbox" id="C7" name="C7" value="Round 2">
                        <label for="C7"> Round2 </label><br>
                        <input type="checkbox" id="C8" name="C8" value="HR Round">
                        <label for="C8"> H.R round  </label><br>
                        <input type="checkbox" id="C9" name="C9" value="Any Other">
                        <label for="C9">Any other </label><br>
                        </td>
                    </tr>
                </table>


                <br> <input type="submit" name="submit" value="submit"></br> 
</form>

    </body>
</html>