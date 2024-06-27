<?php
    session_start();
    require_once("conn.php");
    require_once("back and home titleline.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="PC_rub_css.css">
        
    </head>
    
    <body>
    <script>
        function print(divId) {
            
            let printContents = document.getElementById(divId).innerHTML;
            
            let originalContents = document.body.innerHTML;
           

            let print_area=window.open();
            print_area.document.body.innerHTML=printContents;
            print_area.document.close();
            print_area.focus();
            print_area.print();
            print_area.close();
            
            
        }
        
    </script>
    <div class="nav">				
				<a href="PC_ind.php"><button id="b"><img src="../Images/back.png" height="30px" width="35px"></button></a>
				<a class="active" href="../Homepage.php">Home</a>
				</div>
    <div id="title">
           <center>List of Student</center>
    </div>
      <div id="details"> 
      <div id="filter">
    <form method="post">
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
                <td id="op"><label for="year_of_passing_master">Year of passing [Master]:</label></td>
                <td id="op"><select id="year_of_passing_master" name="year_passing">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>                   
                            <option value="NULL">-----</option>                                        
                            </select></td>
            </tr>
           
            <tr>
                <td></td>
                <td id="op"><input type="submit" id="ok" name="ok" value="OK"></td>
            </tr>

        </table>
    </form>
                <button id="print" onclick="print('data')">Print</button>
               
    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
         if(isset($_POST["ok"]))
         {      
            $n=1;  
            $ssc=$_POST["percent_10"];
            $hsc=$_POST["percent_12"];
            $y_master=$_POST["year_passing"];

         }}
         if($_SERVER["REQUEST_METHOD"]=="POST")
         {
       
                $query="SELECT  stud_personal.enum,stud_personal.name,stud_edu.perct_ssc,stud_edu.perct_hsc,stud_edu.year_master from stud_edu INNER JOIN stud_personal on stud_personal.enum=stud_edu.enum where stud_edu.perct_ssc > $ssc and stud_edu.perct_hsc >$hsc and stud_edu.year_master = $y_master";
                
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result)>0){ 
                echo  "<div id='data' border='2px solid black'>";
                echo "<table id='d'>";
                echo "<tr><th>Sr.No.</th>
                <th>Name</th>
                <th>SSC</th>
                <th>HSC</th>
                </tr>";    
                }
                else
                {
                    echo"data not found";
                }        
                while ($row=mysqli_fetch_assoc($result)) {
                    
                    {                          
                        echo '<tr>';
                        echo "<td id='sr'>".$row['enum']."</td>";
                        echo "<td id='name'>". $row['name']."</td>";
                        echo "<td id='marks'>".number_format( $row['perct_ssc'],2)."</td>";
                        echo "<td id='marks'>".number_format($row['perct_hsc'],2)."</td>";
                        echo '</tr> ';
                        $n++;
                    }
                }
                
                echo "</table>";
                echo "</div>";
                
               
           
            }  
           ?>
      </div>
</body>
</html>