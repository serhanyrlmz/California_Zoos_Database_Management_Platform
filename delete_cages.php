<?php

include "config.php";

if(!empty($_POST['CID']))
{
    $CID = $_POST['CID'];
    $sql_statement = "DELETE FROM cages WHERE CID = $CID";
    $result = mysqli_query($db, $sql_statement);
    echo "$CType is deleted from the database. " . $result;
}

?>