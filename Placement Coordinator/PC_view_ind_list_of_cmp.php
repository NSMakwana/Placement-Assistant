<?php

require_once("conn.php");

$cid=$_REQUEST['cid'];
$query="Select c_name from company_details where cid=$cid";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$c_name=$row["c_name"];
               

?>
<html>
    <head>
            <link rel="stylesheet" href="PC_view_ind_list_of_cmp_css.css">
    </head>
    <body>

    <div id="title">
           <center>Details of <?php echo $c_name;?> </center>
    </div>
    
    <div id="details">
    <?php
         
           echo"<h2 id='pd'>Name and Address</h2>";
           $query="SELECT * from company_details where cid=$cid";
           $result=mysqli_query($conn,$query);
           
           echo "<table id='d'>";
           while ($row=mysqli_fetch_assoc($result)) {
                                                             
            echo "<tr><th id='h'>Name</th><td id='c_name'>".$row['c_name']."</td>";
            echo "<tr><th id='h'>Block no.</th><td id='b_no'>". $row['block_num']."</td></tr>";
            echo "<tr><th id='h'>Building_name</th><td id='b_name'>". $row['building_name']."</td></tr>";
            echo "<tr><th id='h'>Area</th><td id='area'>". $row['area']."</td></tr>";
            echo "<tr><th id='h'>Landmark</th><td id='landm'>". $row['landmark']."</td></tr>";
            echo "<tr><th id='h'>Pincode</th><td id='pincode'>". $row['pincode']."</td></tr>";
            echo "<tr><th id='h'>City</th><td id='city'>". $row['city']."</td></tr>";
            echo "<tr><th id='h'>State</th><td id='state'>". $row['state']."</td></tr>";
            echo "<tr><th id='h'>Minimum Package</th><td id='min_pkg'>". $row['min_package']."</td></tr>";
            echo "<tr><th id='h'>Maximum Package</th><td id='max_pkg'>". $row['max_package']."</td></tr>";
            }
           echo "</table>";
        
           echo"<h2 id='ed'>Details of Contact Person</h2>";
           $query="SELECT * from company_details where cid=$cid";
           $result=mysqli_query($conn,$query);
           
           echo "<table id='edud'>";
           while ($row=mysqli_fetch_assoc($result)) {
                                                             
            echo "<tr><th id='h'>Name</th><td id='c_name'>".$row['manager_name']."</td>";
            echo "<tr><th id='h'>Desigation no.</th><td id='b_no'>". $row['designation']."</td></tr>";
            echo "<tr><th id='h'>Email</th><td id='b_name'>". $row['email_id']."</td></tr>";
            echo "<tr><th id='h'>Mobile no.</th><td id='area'>". $row['mobile_num']."</td></tr>";
            }
           echo "</table>";

           echo"<h2 id='des'>Vacancy details</h2>";
           $query=" SELECT * from designations where cid=$cid ";
           $result=mysqli_query($conn,$query);
          
          
          
            $c=1;
           while ($row=mysqli_fetch_assoc($result)) {
                                                        
            
            echo "<h2>Designation ".$c."</h2>";

            echo "<table id='designation'>";
            echo "<tr><th id='h'>Name</th><td id='c_name'>".$row['name']."</td>";
            echo "<tr><th id='h'>Experience(required)</th><td id='b_no'>". $row['experience_details']."</td></tr>";
            echo "<tr><th id='h'>Minimum package</th><td id='b_name'>". $row['min_package']."</td></tr>";
            echo "<tr><th id='h'>Maximum package</th><td id='area'>". $row['max_package']."</td></tr>";
            echo "<tr><th id='h'>No.of Position</th><td id='area'>". $row['no_of_pos']."</td></tr>";
            echo "<tr><th id='h'>Bond</th><td id='area'>". $row['bond']."</td></tr>";
            echo "<tr><th id='h'>Type</th><td id='area'>". $row['type']."</td></tr>";
            echo "<tr><th id='h'>Stipend</th><td id='area'>". $row['stipend']."</td></tr>";
            echo "<tr><th id='h'>Loacation</th><td id='area'>". $row['location']."</td></tr>";
            $qual=array();
            $bcom=$row['bcom'];$bba=$row['bba'];$bca=$row['bca'];$bsc=$row['bsc'];$be=$row['be'];$btech=$row['btech'];$pgdca=$row['pgdca'];$mca=$row['mca'];$mtech=$row['mtech'];$msc_aiml=$row['msc_aiml'];$msc_cs=$row['msc_cs'];
            if(!empty($bcom))
            {
                array_push($qual,$bcom);           
            }
            if(!empty($bba))
            {
                array_push($qual,$bba);
            }
            if(!empty($bsc))
            {
                array_push($qual,$bsc);           
            }
            if(!empty($bca))
            {
                array_push($qual,$bca);
            }
            if(!empty($be))
            {
                array_push($qual,$be);
            }
            if(!empty($btech))
            {
                array_push($qual,$btech);           
            }
            if(!empty($pgdca))
            {
                array_push($qual,$pgdca);           
            }
            if(!empty($mca))
            {
                array_push($qual,$mca);
            }
            if(!empty($mtech))
            {
                array_push($qual,$mtech);           
            }
            if(!empty($msc_cs))
            {
                array_push($qual,$msc_cs);
            }
            if(!empty($msc_aiml))
            {
                array_push($qual,$msc_aiml);
            }
            echo "<tr><th id='h'>Qualifications</th><td id='area'>";for($i=0;$i<sizeof($qual);$i++){ echo $qual[$i]."   ";}echo "</td></tr>";
            echo "<tr><th id='h'>Remarks</th><td id='remarks'>". $row['remarks']."</td></tr>";
            $c++;
            echo "</table>";
            }
          
        
        
          ?> 
   
        </div>  
        
  
    </body>

</html>