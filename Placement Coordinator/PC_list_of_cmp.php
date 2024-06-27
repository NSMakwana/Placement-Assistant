<?php
     session_start();
     require_once("conn.php");
     $batch=$course="";
     
?>
<html>

    <head>
        <link rel="stylesheet" href="PC_ind_css.css">
    </head>
    <body>
    <div id="title">
               <center>List Of Companies</center>
        </div>
        <div id="data">    
           <?php           
                $n=1;            
                        
                $records_per_page = 9;

                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                    $current_page = intval($_GET['page']);
                } else {
                    $current_page = 1;
                }
                
                $start_from = ($current_page - 1) * $records_per_page;
                
                $query="SELECT c_name,cid from company_details LIMIT $start_from, $records_per_page";
                $result=mysqli_query($conn,$query);
               
                 echo "<table id='d'>";
                echo "<tr><th>Sr no.</th>
                <th>Name</th>
                <th></th>
                </tr>";   
                $n=1;
                while ($row=mysqli_fetch_assoc($result)) {
                                                             
                    echo '<tr>';
                    echo "<td id='sr'>".$n."</td>";
                    echo "<td id='name'>". $row['c_name']."</td>";
                    echo "<td id='view'><a href='PC_view_ind_list_of_cmp.php?cid=".$row['cid']."'>View</a></td>";
                    echo '</tr> ';
                    $n++;
                }
                
                echo "</table>";
                
                
                $query = "SELECT COUNT(*) total FROM company_details";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];
                $total_pages = ceil($total_records / $records_per_page);
                
                echo "<div id='pg'>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=$i>$i</a>";
                }  
            echo "</div>";    
        ?>
        </div>
    </body>

</html>