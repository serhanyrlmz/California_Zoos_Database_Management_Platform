<?php

include "config.php";

$attr = $_POST['attr'];
$value = $_POST['value'];

$sql_statement = "SELECT * FROM cages WHERE $attr = '$value'";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result)) {
    $CID = $row['CID'];
    $CType = $row['CType'];
    $CHeat = $row['CHeat'];
    echo $CID . " | " . $CType . " | " . $CHeat . "<br>";
}

?>