<?php

require_once("conn.php");

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
    <div id="title">
           <center>Details of <?php echo $name;?> </center>
        </div>
        <div id="data">    
           <?php
         
            
                $n=1;
               
                $query="SELECT * from stud_personal where enum=$id";
                $result=mysqli_query($conn,$query);
               
                 echo "<table id='d'>";
                echo "<tr><th>Enroll. no</th>
                <th>Name</th>
                <th>Course</th>
                <th>Email</th>
                <th>Address</th>
                <th>DOB</th>
                </tr>";                
                while ($row=mysqli_fetch_assoc($result)) {
                                                             
                    echo '<tr>';
                    echo "<td id='sr'>".$row['enum']."</td>";
                    echo "<td id='name'>". $row['name']."</td>";
                    echo "<td id='c'>". $row['course']."</td>";
                    echo "<td id='email'>". $row['email']."</td>";
                    echo "<td id='addr'>". $row['address']."</td>";
                    echo "<td id='dob'>". $row['dob']."</td>";
                    
                    echo '</tr> ';
                    
                }
                
                echo "</table>";
                
                
                
        ?>
        </div>
    </body>

</html>