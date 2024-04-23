<?php
    session_start();
    require_once("conn.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="PC_rub_css.css">
    </head>
    <body>
    <div id="title">
           <center>Details of Student</center>
        </div>
        <div id="data">
        <?php
            $n=1;
            $batch=$_REQUEST["b"];
            $course=$_REQUEST["p"];
            
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
                
                
                $query = "SELECT COUNT(*) total FROM stud_personal where course='".$course."' ";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];
                $total_pages = ceil($total_records / $records_per_page);
                
                echo "<div>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=$i'>$i</a> ";
                }    
                echo "</div>";  
        ?>
        </div>
    <div id="filter">
    <form id="f">
    <center><div id="q">Qualifications</div></center>
               
        <table id="f">
            <tr>
               
            </tr>
            <tr>
                <td id="op"><label for="percent_10">SSC</label></td>
                <td id="op"><select id="percent_10" name="percent_10">
                            <option value=">50%">>50%</option>
                            <option value=">60%">>60%</option>
                            <option value=">80%">>80%</option>                                        
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
            <tr>
                <td id="op"><label for="percent_12">HSC</label></td>
                <td id="op"><select id="percent_12" name="percent_12">
                            <option value=">50%">>50%</option>
                            <option value=">60%">>60%</option>
                            <option value=">80%">>80%</option>                                        
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
            <tr>
                <td id="op"><label for="expr">Experience(in year):</label></td>
                <td id="op"><select id="expr" name="expr">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="3">5</option>                                        
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
            <tr>
                <td id="op"><label for="backlog">Backlog</label></td>
                <td id="op"><select id="backlog" name="backlog">
                            <option value="0">No Backlog</option> 
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="3">5</option>                                                       
                            </select></td>
            </tr>
            <tr>
                <td></td>
                <td id="op"><input type="submit" id="ok" name="ok" value="OK"></td>
            </tr>
        </table>
    </form>
    </div>
    

</body>
</html>