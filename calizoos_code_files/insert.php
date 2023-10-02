<?php 

include "config.php"; 

if (!empty($_POST['ZID'])){ 
    $ZID = $_POST['ZID']; 
    $ZName = $_POST['ZName']; 
    $Location = $_POST['Location']; 
    $sql_statement = "INSERT INTO zoos(ZID, ZName, Location) VALUES ('$ZID','$ZName','$Location')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Zoo is added to the database. " . $result;
} 
else 
{
    echo "You did not enter your ZID.";
}

?>
