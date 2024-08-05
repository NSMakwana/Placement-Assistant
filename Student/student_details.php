<?php

require_once("conn.php");

$enumerr = $nameerr = $emailerr = $numerr = $nationerr = $gendererr = $addresserr = $courseerr = $doberr = "";
$enum = $name = $num = $email = $nation = $gender = $address = $dob = $course = "";
$enum1 = $name1 = $num1 = $email1 = $nation1 = $gender1 = $b_no=$build_name=$area=$lm=$sn=$cn=$pn="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$enum1=$_POST["rn"];
$name1=$_POST["n"];
$course=$_POST["course"];
$num1=$_POST["mobile"];
$email1=$_POST["email"];
$b_no=$_POST["b_no"];
$build_name=$_POST["b_name"];
$lm=$_POST["landmark"];
$area=$_POST["area"];
$sn=$_POST["state"];
$cn=$_POST["city"];
$pn=$_POST["pincode"];
$dob=$_POST["d_o_b"];


$marks1_ssc = $_POST["marks_ssc"];
$tm1_ssc = $_POST["tm_ssc"];
$perct1_ssc = $_POST["perct_ssc"];
$year1_ssc = $_POST["year_ssc"];
$board1_ssc = $_POST["board_ssc"];
$marks1_hsc = $_POST["marks_hsc"];
$tm1_hsc = $_POST["tm_hsc"];
$perct1_hsc = $_POST["perct_hsc"];
$stream1_hsc= $_POST["stream_hsc"];
$year1_hsc = $_POST["year_hsc"];
$board1_hsc = $_POST["board_hsc"];
$marks1_bachelor = $_POST["marks_bachelor"];
$tm1_bachelor = $_POST["tm_bachelor"];
$perct1_bachelor = $_POST["perct_bachelor"];
$deg1_bachelor = $_POST["deg_bachelor"];
$uni1_bachelor = $_POST["uni_bachelor"];
$year1_bachelor = $_POST["year_bachelor"];
$marks1_master = $_POST["marks_master"];
$tm1_master = $_POST["tm_master"];
$perct1_master = $_POST["perct_master"];
$deg1_master = $_POST["deg_master"];
$uni1_master = $_POST["uni_master"];
$year1_master =$_POST["year_master"];

$drops=$_POST["drops"];
$remarks=$_POST["remarks"];
$batch=$_POST["batch"];
}
// require_once("connection.php");
if(isset($_POST["SUBMIT"]))
{
        $query="insert into stud_personal(enum,course,name,email,ph_num,block_num,building_name,area,landmark,pincode,city,state,dob,batch)
        values('".$enum1."','".$course."','".$name1."','".$email1."','".$num1."','".$b_no."','".$build_name."','".$area."','".$lm."','".$pn."','".$cn."','".$sn."','".$dob."','".$batch."')";
        mysqli_query($conn,$query) or die("something wrong");
        $sid = mysqli_insert_id($conn);

        $query1="insert into stud_edu(sid,enum,marks_ssc,tm_ssc,perct_ssc,year_ssc,board_ssc,marks_hsc,tm_hsc,perct_hsc,stream_hsc,year_hsc,board_hsc,marks_bachelor,tm_bachelor,perct_bachelor,deg_bachelor,uni_bachelor,year_bachelor,marks_master,tm_master,perct_master,deg_master,uni_master,year_master,drops,remarks)
        values('".$sid."','".$enum1."','".$marks1_ssc."','".$tm1_ssc."','".$perct1_ssc."','".$year1_ssc."','".$board1_ssc."','".$marks1_hsc."','".$tm1_hsc."','".$perct1_hsc."','".$stream1_hsc."','".$board1_hsc."','".$year1_hsc."','".$marks1_bachelor."','".$tm1_bachelor."','".$perct1_bachelor."','".$deg1_bachelor."','".str_replace("'","\'",$uni1_bachelor)."','".$year1_bachelor."','".$marks1_master."','".$tm1_master."','".$perct1_master."','".$deg1_master."','".str_replace("'","\'",$uni1_master)."','".$year1_master."','".$drops."','".$remarks."')";
        mysqli_query($conn,$query1) or die("something wrong");
}



?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="student_details.css">
</head>
<body>
<div id="title">
           <center>Student Details</center>
        </div>
    
<div id="details">
<form method="post" enctype="multipart/form-data">
                <h3 id="he1">Personal Details </h3>             
                <table id="nd">
                    <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr> 
                    
                    <tr>
                    <th id="rnh"><label id="lbl">Roll. No.</label id="label"></th>
                    <td id="rn"><input type="text" name="rn" id="rn" required></td>
                    <td id="s1"></td>
                    <th id="nh"><label id="lbl">Name</label id="label"></th>
                    <td id="n"><input type="text" name="n" id="n"required></td>                   
                    </tr>

                    <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr>

                    </table>             
                    <table id="d2">
                                  
                    <tr>
                    <th id="cnh"><label id="lbl">Course</label id="label"></th>
                    <td id="con"><select name="course" id="course">
                    <option value="M.Sc. AIML">M.Sc. AIML</option>
                    <option value="MCA">MCA</option>
                    </td>

                    <td id="s1"></td>

                    <th id="mnh"><label id="lbl">Mobile No.</label id="label"></th>
                    <td id="mn"><input type="number" name="mobile" id="mobile" pattern="[0-9]" maxlength="10" minlength="10" required></td>
                    
                    <td id="s2"></td>

                    <th id="eh"><label id="lbl">Email</label id="label"></th>
                    <td id="e"><input type="email" name="email" id="email" required></td>  
                    
                    <td id="s3"></td>

                    <th id="dobh"><label id="lbl">D.O.B.</label id="label"></th>
                    <td id="dob"><input type="date" name="d_o_b" id="d_o_b" required></td>  
                    </tr>

                    <tr>
                    <td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr>

                    </table>
                    <table id="d">    
                    <th id="bnh"><label id="lbl"> Block number</label id="label"></th>
                    <td id="bn"><input type="text" name="b_no" id="b_no" required></td>
                    <td id="s1"></td>
                    <th id="bh"><label id="lbl"> Building name </label></th>
                    <td id="b"><input type="text" name="b_name" id="b_name"required></td>
                    <td id="s2"></td>
                    <th id="ah"><label id="lbl"> Area</label id="label"></th>
                    <td id="a"><input type="text" name="area" id="area" required></td>
                    </tr>
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    <th id="lh"><label id="lbl"> Landmark </label></th>
                    <td id="l"><input type="text" name="landmark" id="lm" required></td>
                    <td id="s3"></td>
                    <th id="sh"><label id="lbl"> State </label></th>
                    <td id="s"><input type="text" name="state" id="sn" required></td>
                    <td id="s4"></td>
                    <th id="ch"><label id="lbl"> City </label></th>
                    <td id="c"><input type="text" name="city" id="cn" required></td>
                    </tr>

                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    
                    <tr>
                    <th id="ph"><label id="lbl"> Pincode </label></th>
                    <td id="p"><input type="text" name="pincode" id="pn" required></td>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                   
                    </tr>

                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    </table>
                   

                    <h3 id="he1">S.S.C. Details</h3>    
                    <table id="d">    
                    <th id="omsh"><label id="lbl">Obtained Marks in S.S.C.</label id="label"></th>
                    <td id="oms"><input type="text" name="marks_ssc" id="marks_ssc" required ></td>
                    <td id="s1"></td>
                    <th id="tmsh"><label id="lbl">Total marks in S.S.C.</label></th>
                    <td id="tms"><input type="text" name="tm_ssc"id="tm_ssc" required></td>
                    <td id="s2"></td>
                    <th id="psh"><label id="lbl">Percentage in S.S.C.</label id="label"></th>
                    <td id="ps"><input type="text" name="perct_ssc" id="perct_ssc" required></td>
                    </tr>
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    <th id="bsh"><label id="lbl">Board of S.S.C.</label></th>
                    <td id="bs"><input type="text" name="board_ssc" id="board_ssc" required></td>
                    <td id="s3"></td>
                    <th id="ysh"><label id="lbl">Year of passing of S.S.C.</label></th>
                    <td id="ys"><input type="text" name="year_ssc" id="year_ssc" required></td>
                    <td id="s4"></td>
                    <td id="sp"></td><td id="sp">
                    </tr>
                    </table>                   
                    <h3 id="he1">H.S.C. Details</h3>    
                    <table id="d">    
                    <th id="omhh"><label id="lbl">Obtained Marks in H.S.C.</label id="label"></th>
                    <td id="omh"><input type="text" name="marks_hsc" id="marks_hsc" required ></td>
                    <td id="s1"></td>
                    <th id="tmhh"><label id="lbl">Total marks in H.S.C.</label></th>
                    <td id="tmh"><input type="text" name="tm_hsc" id="tm_hsc" required></td>
                    <td id="s2"></td>
                    <th id="pchh"><label id="lbl">Percentage in H.S.C.</label id="label"></th>
                    <td id="pch"><input type="text" name="perct_hsc" id="perct_hsc" required></td>
                    </tr>
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    <th id="sth"><label id="lbl">Stream of H.S.C./Diploma</label></th>
                    <td id="st"><input type="text" name="stream_hsc" id="stream_hsc" required></td>
                    <td id="s3"></td>
                    <th id="bhsh"><label id="lbl">Board of H.S.C.</label></th>
                    <td id="bhs"><input type="text" name="board_hsc" id="board_hsc" required></td>
                    <td id="s3"></td>
                    <th id="yhh"><label id="lbl">Year of passing of H.S.C.</label></th>
                    <td id="yh"><input type="text" name="year_hsc" id="year_hsc" required></td>
                    
                    </tr>
                    </table>                   
                    <h3 id="he1">Bachelor's Details</h3>    
                    <table id="d">    
                    <th id="ombh"><label id="lbl">Obtained Marks in Bachelor's</label id="label"></th>
                    <td id="omb"><input type="text" name="marks_bachelor" id="marks_bachelor" required></td>
                    <td id="s1"></td>
                    <th id="tmbh"><label id="lbl">Total marks in Bachelor's</label></th>
                    <td id="tmb"><input type="text" name="tm_bachelor" id="tm_bachelor" required></td>
                    <td id="s2"></td>
                    <th id="pcbh"><label id="lbl">Percentage in Bachelor's</label id="label"></th>
                    <td id="pcb"><input type="text" name="perct_bachelor" id="perct_bachelor" required></td>
                    </tr>
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    <th id="dnbh"><label id="lbl">Degree Name</label></th>
                    <td id="dnb"><input type="text" name="deg_bachelor" id="deg_bachelor" required></td>
                    <td id="s3"></td>
                    <th id="ubh"><label id="lbl">University of Bachelor's</label></th>
                    <td id="ub"><input type="text" name="uni_bachelor" id="uni_bachelor" required></td>
                    <td id="s3"></td>
                    <th id="ybh"><label id="lbl">Year of passing of Bachelor's</label></th>
                    <td id="yb"><input type="text" name="year_bachelor" id="year_bachelor" required></td>
                    </tr>
                    </table>  
                    <h3 id="he1">Master's Details</h3>    
                    <table id="d">    
                    <th id="ommh"><label id="lbl">Obtained Marks in Master's(Sem-I)</label id="label"></th>
                    <td id="omm"><input type="text" name="marks_master" id="marks_master"required ></td>
                    <td id="s1"></td>
                    <th id="tmmh"><label id="lbl">Total marks of Master's(Sem-I)</label></th>
                    <td id="tmm"><input type="text" name="tm_master" id="tm_master" required></td>
                    <td id="s2"></td>
                    <th id="pcmh"><label id="lbl">Percentage of Master's(Sem-I)</label id="label"></th>
                    <td id="pcm"><input type="text" name="perct_master" id="perct_master" required></td>
                    </tr>
                    <tr><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td></tr>
                    <tr>
                    <th id="dnmh"><label id="lbl">Degree Name</label></th>
                    <td id="dnm"><input type="text" name="deg_master" id="deg_master" required></td>
                    <td id="s3"></td>
                    <th id="umh"><label id="lbl">University of Master's</label></th>
                    <td id="um"><input type="text" name="uni_master" id="uni_master" required></td>
                    <td id="s3"></td>
                    <th id="ymh"><label id="lbl">Year of passing of Master's</label></th>
                    <td id="ym"><input type="text" name="year_master" id="year_master" required></td>
                    </tr>
                    </table>                   
                    <h3 id="he1">Other </h3>             
                <table id="nd">
                    <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr> 
                    
                    <tr>
                    <th id="ndrh"><label id="lbl">No. of Drops</label id="label"></th>
                    <td id="ndr"><select name="drops" id="drops">
                                <option value="0">0</option>  
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                        </select></td>
                    <td id="s1"></td>
                    <th id="rmh"><label id="lbl">Remarks</label id="label"></th>
                    <td id="rm"><input type="text" name="remarks" id="remarks"></td>
                    <th id="batchh"><label id="lbl">Batch</label id="label"></th>
                    <td id="bat"><input type="text" name="batch" id="batch" placeholder="2022-2024"></td>                   
                    </tr>

                    <tr>
                    </td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td><td id="sp"></td>                       
                    </tr>

                    </table>  
                    <br><input type="SUBMIT" name="SUBMIT" value="SUBMIT">
                 

</form>

</html>