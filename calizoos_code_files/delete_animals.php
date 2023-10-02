<?php

include "config.php";

if(!empty($_POST['AID']))
{
    $AID = $_POST['AID'];
    $sql_statement = "DELETE FROM animals WHERE AID = $AID";
    $result = mysqli_query($db, $sql_statement);
    echo "$ASpecies is deleted from the database. " . $result;
}

?>