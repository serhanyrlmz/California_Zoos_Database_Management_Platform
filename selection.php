<?php

include "config.php";

$attr = $_POST['attr'];
$value = $_POST['value'];

$sql_statement = "SELECT * FROM zoos WHERE $attr = '$value'";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result)) {
    $ZID = $row['ZID'];
    $ZName = $row['ZName'];
    $Location = $row['Location'];
    echo $ZID . " | " . $ZName . " | " . $Location . "<br>";
}

?>