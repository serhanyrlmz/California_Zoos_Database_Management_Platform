<?php

include "config.php";

$sql_statement = "SELECT * FROM animals";
$sql_statement = "SELECT * FROM zoos";
$sql_statement = "SELECT * FROM cages";
$sql_statement = "SELECT * FROM zookeepers";
$sql_statement = "SELECT * FROM busy_with";
$sql_statement = "SELECT * FROM lives_in";
$sql_statement = "SELECT * FROM works_for";


$result = mysqli_query($db, $sql_statement);

$ZKname = $row['ZKname'];
$ZKsurname = $row['ZKsurname'];
$ZKID = $row['ZKID'];
$CID = $row['CID'];
$CType = $row['CType'];
$CHeat = $row['CHeat'];
$ZName = $row['ZName'];
$Location = $row['Location'];
$ZID = $row['ZID'];
$Aspecies = $row['Aspecies'];
$Aeats = $row['Aeats'];
$AID = $row['AID'];

echo "Welcome" . $ZKname . $ZKsurname . "! You should work for " . $ZName . "in" . $Location . ". You are responsible from Cage " . $CID . 
" which is type " . $CType . " and cage's heat should be " . $CHeat . ". " . $Aspecies . " lives there and must be feeded with " . $Aeats . ".";

?>