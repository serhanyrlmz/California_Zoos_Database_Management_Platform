<?php

include "config.php";

$attr = $_POST['attr'];
$value = $_POST['value'];

$sql_statement = "SELECT * FROM animals WHERE $attr = '$value'";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result)) {
    $AID = $row['AID'];
    $Aspecies = $row['Aspecies'];
    $Aeats = $row['Aeats'];
    echo $AID . " | " . $Aspecies . " | " . $Aeats . "<br>";
}

?>