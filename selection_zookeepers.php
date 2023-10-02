<?php

include "config.php";

$attr = $_POST['attr'];
$value = $_POST['value'];

$sql_statement = "SELECT * FROM zookeepers WHERE $attr = '$value'";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result)) {
    $ZKID = $row['ZKID'];
    $ZKname = $row['ZKname'];
    $ZKsurname = $row['ZKsurname'];
    echo $ZKID . " | " . $ZKname . " | " . $ZKsurname . "<br>";
}

?>