<?php
    session_start();
    require_once("conn.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="PC_rub_css.css">
    </head>
    <body>
    <body>
    <div id="title">
           <center>List of Student</center>
        </div>
        <div id="data" border='2px solid black'>    
        <?php
         if(isset($_POST["ok"]))
         {      
            $n=1;  
            $ssc=$_POST["percent_10"];
            $hsc=$_POST["percent_12"];

                $records_per_page =15;

                if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
                    $current_page = intval($_REQUEST['page']);
                } else {
                    $current_page = 1;
                }
                
                $start_from = ($current_page - 1) * $records_per_page;
                $query="SELECT  stud_personal.enum,stud_personal.name,stud_edu.perct_ssc,stud_edu.perct_hsc from stud_edu INNER JOIN stud_personal on stud_personal.enum=stud_edu.enum where stud_edu.perct_ssc > $ssc and stud_edu.perct_hsc >$hsc LIMIT $start_from, $records_per_page";
                
                $result=mysqli_query($conn,$query);
                
                echo "<table id='d'>";
                echo "<tr><th>Sr no.</th>
                <th>Name</th>
                <th>SSC</th>
                <th>HSC</th>
                </tr>";                
                while ($row=mysqli_fetch_assoc($result)) {
                                                             
                    echo '<tr>';
                    echo "<td id='sr'>".$row['enum']."</td>";
                    echo "<td id='name'>". $row['name']."</td>";
                    echo "<td id='marks'>". $row['perct_ssc']."</td>";
                    echo "<td id='marks'>". $row['perct_hsc']."</td>";
                    echo '</tr> ';
                    $n++;
                }
                
                echo "</table>";
                
                
                $query = "SELECT COUNT(*) total FROM stud_edu where perct_ssc>$ssc and perct_hsc>$hsc";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_assoc($result);
                $total_records = $row['total'];
                $total_pages = ceil($total_records / $records_per_page);
                
                echo "<div id='pg'>";
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='?page=$i'>$i</a>";
                }  
            echo "</div>";    
            }
           ?>
        </div>
    <div id="filter">
    <form id="f" method="post">
    <center><div id="q">Qualifications</div></center>
               
        <table id="f">
            <tr>
               
            </tr>
            <tr>
                <td id="op"><label for="percent_10">SSC</label></td>
                <td id="op"><select id="percent_10" name="percent_10">
                            <option value="50">>50%</option>
                            <option value="60">>60%</option>
                            <option value="80">>80%</option>                                        
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
            <tr>
                <td id="op"><label for="percent_12">HSC</label></td>
                <td id="op"><select id="percent_12" name="percent_12">
                            <option value="50">>50%</option>
                            <option value="60">>60%</option>
                            <option value="80">>80%</option>                                        
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