<?php

include "config.php";

if(!empty($_POST['ZID']))
{
    $ZID = $_POST['ZID'];
    $sql_statement = "DELETE FROM zoos WHERE ZID = $ZID";
    $result = mysqli_query($db, $sql_statement);
    echo "$ZName is deleted from the database. " . $result;
}

?>