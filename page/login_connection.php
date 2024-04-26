<?php
$servername = "localhost";
$username = "root";
$password = "";
$placement_name = "db1";
$conn = mysqli_connect($servername, $username, $password, $placement_name,4306);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "successful";

?>