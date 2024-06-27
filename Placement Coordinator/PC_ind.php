<?php
     session_start();
     require_once("conn.php");
     require_once("back and home titleline.php");
     $batch=$course="";
     
?>
<html>
    <head>
            <link rel="stylesheet" href="PC_ind_css.css">
    </head>
    <body>
    <div class="nav">
				
				
				<a href="PC_student.php"><button id="b"><img src="../Images/back.png" height="30px" width="35px"></button></a>
				<a class="active" href="../Homepage.php">Home</a>
				</div>
    <div id="title">
           <center>List of Student</center>
        </div>
        <div id="data">    
           <?php
         
            
                $n=1;
            
            $batch=$_REQUEST["b"];
            $course=$_REQUEST["p"];
            
                $records_per_page = 9;

                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                    $current_page = intval($_GET['page']);
                } else {
                    $current_page = 1;
                }
                
                $start_from = ($current_page - 1) * $records_per_page;
                
                $query="SELECT enum,name from stud_personal where course='".$course."'"." LIMIT $start_from, $records_per_page";
                $result=mysqli_query($conn,$query);
               
                 echo "<table id='d'>";
                echo "<tr><th>Sr. No.</th>
                <th>Name</th>
                <th></th>
                </tr>";                
                while ($row=mysqli_fetch_assoc($result)) {
                                                             
                    echo '<tr>';
                    echo "<td id='sr'>".$row['enum']."</td>";
                    echo "<td id='name'>". $row['name']."</td>";
                    echo "<td id='view'><a href='PC_ind_view.php?id=".$row['enum']."'>View</a></td>";
                    echo '</tr> ';
                    $n++;
                }
                
                echo "</table>";
                
                
                $query = "SELECT COUNT(*) total FROM stud_personal where course='".$course."' ";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];
                $total_pages = ceil($total_records / $records_per_page);
                
                echo "<div id='pg'>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=$i&b=$batch&p=$course'>$i</a>";
                }  
            echo "</div>";    
        ?>
        </div>
        
    </body>

</html>