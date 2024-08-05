<?php
    require_once("conn.php");
    $batch=$_REQUEST["b"];
    $course=$_REQUEST["p"];

$filename = "Student_data_".$course.date('Y-m-d').".csv"; 
$delimiter = ","; 

// Create a file pointer 
$f = fopen('php://memory','w'); 

// Set column headers 
$fields = array('Roll No','Name',"Course","Mobile number","Email-id","Permanent Address","DOB","Obtained marks in ssc","Total marks in ssc","Percentage in ssc","year of passing scc","board of ssc","Obtained marks in hsc","Total marks in hsc","Percentage in hsc","Year of passing hsc","Stream of hsc/Diploma","Board/University of hsc"," Marks obtained in Bachelors","Total marks in Bachelors","Percentage in Bachelors","Degree name of Bachelors","University of Bachelors","Year of passing Bachelors"," Marks obtained in Masters","Total marks in Masters","Percentage in Masters","Degree name of Masters","University of Masters","Year of passing Masters","No of drops","Remarks"); 
fputcsv($f, $fields, $delimiter); 

// Get records from the database 

$query="SELECT stud_personal.*,stud_edu.* from stud_edu INNER JOIN stud_personal on stud_personal.sid=stud_edu.sid where stud_personal.course = '".$course."' and stud_personal.batch = '".$batch."'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){ 
    $id=1;
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = mysqli_fetch_assoc($result)){ 
        $addr = $row['block_num'] . ', ' . $row['building_name'] . ', ' . $row['area'] . ', ' . $row['landmark'] . ', ' . $row['city'] . ', ' . $row['state'] . ', ' . $row['pincode'];
        $lineData = array($row['enum'],$row['name'],$row['course'],$row['ph_num'],$row['email'],$addr,$row['dob'],$row['marks_ssc'],$row['tm_ssc'],$row['perct_ssc'],$row['year_ssc'],$row['board_ssc'],$row['marks_hsc'],$row['tm_hsc'],$row['perct_hsc'],$row['year_hsc'],$row['stream_hsc'],$row['board_hsc'],$row['marks_bachelor'],$row['tm_bachelor'],$row['perct_bachelor'],$row['deg_bachelor'],$row['uni_bachelor'],$row['year_bachelor'],$row['marks_master'],$row['tm_master'],$row['perct_master'],$row['deg_master'],$row['uni_master'],$row['year_master'],$row['drops'],$row['remarks']); 
        
    fputcsv($f,$lineData, $delimiter);
        $id++;
     } 
} 


// Move back to beginning of file 
fseek($f, 0); 

// Set headers to download file rather than displayed 
header('Content-Type: text/csv'); 
header('Content-Disposition: attachment; filename="' . $filename . '";'); 

// Output all remaining data on a file pointer 
fpassthru($f); 

// Exit from file 
exit();

?>