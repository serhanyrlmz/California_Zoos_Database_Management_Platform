<?php 

include "config.php"; 

if (!empty($_POST['AID'])){ 
    $AID = $_POST['AID']; 
    $ASpecies = $_POST['ASpecies']; 
    $Aeats = $_POST['Aeats']; 
    $sql_statement = "INSERT INTO animals(AID, ASpecies, Aeats) VALUES ('$AID','$ASpecies','$Aeats')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Animal is added to the database. " . $result;
} 
else 
{
    echo "You did not enter the AID.";
}

?>
