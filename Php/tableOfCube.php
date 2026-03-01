<?php
    echo "Table of Cube;<br>";
    echo "<table border='1'>";
    echo "<tr><th>NUMBER</th><th>CUBE</th></tr>";
    for($i=1;$i<=10;$i++){
        $cube=$i*$i*$i;
        echo "<tr><td>$i</td><td>$cube</td></tr>";
    }
    echo "</table>";
?>