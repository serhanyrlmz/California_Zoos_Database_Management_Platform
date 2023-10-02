<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM zoos"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Zoo_id = $row['ZID']; 
    $Zoo_name = $row['ZName']; 
    $Zoo_location = $row['Location']; 
    echo $Zoo_id . " " . $Zoo_name . " " . $Zoo_location . "<br>"; 
} 

?>