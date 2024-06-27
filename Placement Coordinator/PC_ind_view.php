<?php

require_once("conn.php");
require_once("back and home titleline.php");

$id=$_REQUEST['id'];
$query="Select name from stud_personal where enum=$id";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$name=$row["name"];
               

?>
<html>
    <head>
            <link rel="stylesheet" href="PC_ind_view_css.css">
    </head>
    <body>
    <div class="nav">				
				<a href="PC_ind.php"><button id="b"><img src="../Images/back.png" height="30px" width="35px"></button></a>
				<a class="active" href="../Homepage.php">Home</a>
				</div>
    <div id="title">
           <center>Details of <?php echo $name;?> </center>
    </div>
    <div id="photo">
      <img id="p"src="photo_icon.png" >
    </div>
    <div id="details">
    <?php
            // echo "<div id='details'>";
        //   echo"<div id='data'>";
          echo"<h2 id='pd'>Personal Details</h2>";
           $query="SELECT * from stud_personal where enum=$id";
           $result=mysqli_query($conn,$query);
           
           echo "<table id='d'>";
           while ($row=mysqli_fetch_assoc($result)) {
                                                             
            echo "<tr><th id='h'>Enroll. no</th><td id='sr'>".$row['enum']."</td>";
            echo "<tr><th id='h'>Name</th><td id='name'>". $row['name']."</td></tr>";
            echo "<tr><th id='h'>Course</th><td id='c'>". $row['course']."</td></tr>";
            echo "<tr><th id='h'>Email</th><td id='email'>". $row['email']."</td></tr>";
            echo "<tr><th id='h'>Address</th><td id='addr'>". $row['address']."</td></tr>";
            echo "<tr><th id='h'>DOB</th><td id='dob'>". $row['dob']."</td></tr>";
    
           }
        //    echo " </div>";

        //    echo"<div id='edudata'>";
           echo"<h2 id='ed'>Educational Details</h2>";
           $query="SELECT * from stud_edu where enum=$id";
           $result=mysqli_query($conn,$query);
           
           echo "<table id='edud'>";
           while ($row=mysqli_fetch_assoc($result)) {
                                                             
            echo "<tr><th id='h'>Obtained marks[SSC]</th><td id='m_scc'>".$row['marks_ssc']."</td>";
            echo "<tr><th id='h'>Total marks[SSC]</th><td id='tm_ssc'>". $row['tm_ssc']."</td></tr>";
            echo "<tr><th id='h'>Percentage[SSC]</th><td id='p_scc'>". round(100*$row['marks_ssc']/$row['tm_ssc'],2)."</td></tr>";
            echo "<tr><th id='h'>Year of Passing[SSC]</th><td id='y_scc'>". $row['year_ssc']."</td></tr>";
            echo "<tr><th id='h'>Board[SSC]</th><td id='b_ssc'>". $row['board_ssc']."</td></tr>";
            
            echo "<tr><th id='h'>Obtained marks[HSC]</th><td id='m_hsc'>".$row['marks_hsc']."</td>";
            echo "<tr><th id='h'>Total marks[HSC]</th><td id='tm_hsc'>". $row['tm_hsc']."</td></tr>";
            echo "<tr><th id='h'>Percentage[HSC]</th><td id='p_hsc'>".number_format(100*$row['marks_hsc']/$row['tm_hsc'],2)."</td></tr>";
            echo "<tr><th id='h'>Year of Passing[HSC]</th><td id='y_hsc'>". $row['year_hsc']."</td></tr>";
            echo "<tr><th id='h'>Board[HSC]</th><td id='b_hsc'>". $row['board_hsc']."</td></tr>";
            
            echo "<tr><th id='h'>Obtained marks[Bachelor]</th><td id='m_bachelor'>".$row['marks_bachelor']."</td>";
            echo "<tr><th id='h'>Total marks[Bachelor]</th><td id='tm_bachelor'>". $row['tm_bachelor']."</td></tr>";
            echo "<tr><th id='h'>Percentage[Bachelor]</th><td id='p_bachelor'>".number_format(100*$row['marks_bachelor']/$row['tm_bachelor'],2)."</td></tr>";
            echo "<tr><th id='h'>Year of Passing[Bachelor]</th><td id='y_bachelor'>". $row['year_bachelor']."</td></tr>";
            echo "<tr><th id='h'>Degree[Bachelor]</th><td id='deg_bachelor'>". $row['deg_bachelor']."</td></tr>";
            echo "<tr><th id='h'>University[Bachelor]</th><td id='uni_bachelor'>". $row['uni_bachelor']."</td></tr>";
    
            echo "<tr><th id='h'>Obtained marks[Master]</th><td id='m_master'>".$row['marks_master']."</td>";
            echo "<tr><th id='h'>Total marks[Master]</th><td id='tm_master'>". $row['tm_master']."</td></tr>";
            echo "<tr><th id='h'>Percentage[Master]</th><td id='p_master'>". number_format(100*$row['marks_master']/$row['tm_bachelor'],2)."</td></tr>";
            echo "<tr><th id='h'>Year of Passing[Master]</th><td id='y_master'>". $row['year_master']."</td></tr>";
            echo "<tr><th id='h'>Degree[Master]</th><td id='deg_master'>". $row['deg_master']."</td></tr>";
            echo "<tr><th id='h'>University[Master]</th><td id='uni_master'>". $row['uni_master']."</td></tr>";
    
            echo "<tr><th id='h'>Lateral Entry</th><td id='l_entry'>". $row['l_entry']."</td></tr>";
            echo "<tr><th id='h'>Drops</th><td id='drops'>". $row['drops']."</td></tr>";
            echo "<tr><th id='h'>Remarks</th><td id='remarks'>". $row['remarks']."</td></tr>";
    
           }
        //    echo " </div>";
          ?> 
   
        </div>  
        
  
    </body>

</html>