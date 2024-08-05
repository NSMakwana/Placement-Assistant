<?php
    require_once("conn.php");
    $batch=$_REQUEST["b"];
    $course=$_REQUEST["p"];

$filename = "Student_data_".date('Y-m-d').".csv"; 
$delimiter = ","; 

// Create a file pointer 
$f = fopen('php://memory','w'); 

// Set column headers 
$fields = array('ID','Name'); 
fputcsv($f, $fields, $delimiter); 

// Get records from the database 
$query =("SELECT name FROM stud_personal where course='".$course."' and batch='".$batch."'"); 
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){ 
    $id=1;
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = mysqli_fetch_assoc($result)){ 
        $lineData = array($id, $row['name']); 
        
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