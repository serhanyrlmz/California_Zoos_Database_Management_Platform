<?php 

include "config.php"; 

if (!empty($_POST['ZKID'])){ 
    $ZKID = $_POST['ZKID']; 
    $ZKname = $_POST['ZKname']; 
    $ZKsurname = $_POST['ZKsurname']; 
    $sql_statement = "INSERT INTO zookeepers(ZKID, ZKname, ZKsurname) VALUES ('$ZKID','$ZKname','$ZKsurname')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Zookeeper is added to the database. " . $result;
} 
else 
{
    echo "You did not enter the ZKID.";
}

?>
