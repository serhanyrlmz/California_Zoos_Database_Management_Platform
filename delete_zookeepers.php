<?php

include "config.php";

if(!empty($_POST['ZKID']))
{
    $ZKID = $_POST['ZKID'];
    $sql_statement = "DELETE FROM zookeepers WHERE ZKID = $ZKID";
    $result = mysqli_query($db, $sql_statement);
    echo "$ZKname is deleted from the database. " . $result;
}

?>