<?php
     session_start();
     require_once("conn.php");
     
?>
<html>
    <head>
            <link rel="stylesheet" href="PC_ind_css.css">
    </head>
    <body>
        <div id="details">
        <?php
            $n=1;
            $batch=$_REQUEST["batch"];
            $course=$_REQUEST["course"];
            
                $records_per_page = 05;

                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                    $current_page = intval($_GET['page']);
                } else {
                    $current_page = 1;
                }
                
                $start_from = ($current_page - 1) * $records_per_page;
                
                $query="SELECT name from stud_personal where course='".$course."'"." LIMIT $start_from, $records_per_page";
                $result=mysqli_query($conn,$query);
               
                 echo "<table id='d'>";
                echo "<tr><th>Sr no.</th>
                <th>Name</th>
                </tr>";                
                while ($row = mysqli_fetch_assoc($result)) {
                                                             
                    echo '<tr>';
                    echo '<td>'.$n.'</td>';
                    echo '<td>'. $row['name'].'</td>';
                    echo ' <a  type="button" href="view_ind.php?id=' . $row['enum'].'">View</a></td>';
                    echo '</tr> ';
                    $n++;
                }
                
                echo "</table>";
                
                
                $query = "SELECT COUNT(*) total FROM people";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];
                $total_pages = ceil($total_records / $records_per_page);
                
                echo "<div>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=$i'>$i</a> ";
                }      
        ?>
        </div>
    </body>

</html>q