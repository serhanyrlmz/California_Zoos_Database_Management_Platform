<?php 

include "config.php";

?>

<form action="delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT ZID, ZName, Location FROM zoos";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $ZID = $id_rows['ZID'];
        $ZName = $id_rows['ZName'];
        $Location = $id_rows['Location'];
        echo "<option value=$ZID>". $ZName . " - " . $Location . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>