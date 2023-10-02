<?php 

include "config.php"; 

if (!empty($_POST['CID'])){ 
    $CID = $_POST['CID']; 
    $CType = $_POST['CType']; 
    $CHeat = $_POST['CHeat']; 
    $sql_statement = "INSERT INTO cages(CID, CType, CHeat) VALUES ('$CID','$CType','$CHeat')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Cage is added to the database. " . $result;
} 
else 
{
    echo "You did not enter the CID.";
}

?>
